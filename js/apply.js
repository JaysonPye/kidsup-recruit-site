(function() {
  var form = document.getElementById('recruit-apply-form');
  if (!form) {
    return;
  }

  var roleSelect = document.getElementById('apply-role');
  var submitButton = document.getElementById('apply-submit-button');
  var errorBox = document.getElementById('apply-error-box');
  var successBox = document.getElementById('apply-success-box');
  var trackingSlugInput = document.getElementById('tracking-link-slug');
  var nativeOnlyRows = form.querySelectorAll('.js-native-only');
  var applySection = document.getElementById('apply-form');

  var API_ENDPOINT = form.dataset.apiEndpoint || '/api/recruit_applications';
  var PRIVACY_POLICY_URL = form.dataset.privacyPolicyUrl || 'https://www.p-up.world/privacypolicy/';

  function normalizeRole(value) {
    if (!value) {
      return '';
    }

    var normalized = value.toString().trim().toLowerCase().replace(/[\s_]+/g, '-');
    var aliases = {
      sm: 'sm',
      'school-manager': 'sm',
      bilingual: 'bilingual',
      'bilingual-educator': 'bilingual',
      native: 'native',
      'native-educator': 'native',
      driver: 'driver',
      'bus-driver': 'driver',
      'tour-staff': 'tour_staff',
      'tour-staffs': 'tour_staff',
      'bus-staff': 'tour_staff',
      'new-graduate': 'new_graduate',
      graduate: 'new_graduate',
      graduates: 'new_graduate',
      'shin-sotsu': 'new_graduate'
    };

    return aliases[normalized] || '';
  }

  function deriveRoleFromSlug(slug) {
    if (!slug) {
      return '';
    }

    var lower = slug.toLowerCase();
    if (/(^|[-_])sm($|[-_])/.test(lower) || lower === 'sm') {
      return 'sm';
    }
    if (lower.indexOf('bilingual') !== -1) {
      return 'bilingual';
    }
    if (lower.indexOf('native') !== -1) {
      return 'native';
    }
    if (lower.indexOf('driver') !== -1) {
      return 'driver';
    }
    if (lower.indexOf('tour') !== -1 || lower.indexOf('staff') !== -1) {
      return 'tour_staff';
    }
    if (lower.indexOf('graduate') !== -1 || lower.indexOf('new-grad') !== -1) {
      return 'new_graduate';
    }
    return '';
  }

  function getTrackingParams() {
    var params = new URLSearchParams(window.location.search);
    return {
      role: normalizeRole(params.get('role') || params.get('job') || params.get('type')),
      trackingLinkSlug: (params.get('slug') || params.get('tracking_link_slug') || '').trim(),
      utm_source: params.get('utm_source') || '',
      utm_medium: params.get('utm_medium') || '',
      utm_campaign: params.get('utm_campaign') || '',
      utm_term: params.get('utm_term') || '',
      utm_content: params.get('utm_content') || '',
      gclid: params.get('gclid') || '',
      fbclid: params.get('fbclid') || '',
      ttclid: params.get('ttclid') || '',
      tracking_click_id: (params.get('tracking_click_id') || params.get('click_id') || '').trim(),
      raw_tracking: Object.fromEntries(params.entries())
    };
  }

  function setNativeMode(enabled) {
    nativeOnlyRows.forEach(function(row) {
      row.hidden = !enabled;
      if (!enabled) {
        row.querySelectorAll('input, select, textarea').forEach(function(input) {
          input.value = '';
        });
      }
    });
  }

  function setError(messages) {
    if (!messages || !messages.length) {
      errorBox.hidden = true;
      errorBox.textContent = '';
      return;
    }

    errorBox.hidden = false;
    errorBox.innerHTML = '<ul>' + messages.map(function(message) {
      return '<li>' + escapeHtml(String(message)) + '</li>';
    }).join('') + '</ul>';
  }

  function escapeHtml(value) {
    return value
      .replace(/&/g, '&amp;')
      .replace(/</g, '&lt;')
      .replace(/>/g, '&gt;')
      .replace(/"/g, '&quot;')
      .replace(/'/g, '&#39;');
  }

  function setLoading(loading) {
    form.classList.toggle('is-loading', loading);
    submitButton.disabled = loading;
    submitButton.textContent = loading ? '送信中...' : '応募する / Submit';
  }

  function scrollToApplyForm(behavior) {
    if (!applySection) {
      return;
    }

    var header = document.querySelector('.ku-header');
    var headerHeight = header ? header.offsetHeight : 0;
    var targetTop = window.pageYOffset + applySection.getBoundingClientRect().top - headerHeight - 16;
    if (targetTop < 0) {
      targetTop = 0;
    }

    window.scrollTo({
      top: targetTop,
      behavior: behavior || 'smooth'
    });
  }

  function focusAndScrollToField(field) {
    if (!field || typeof field.focus !== 'function') {
      return;
    }

    field.focus({ preventScroll: true });

    var header = document.querySelector('.ku-header');
    var headerHeight = header ? header.offsetHeight : 0;
    var targetTop = window.pageYOffset + field.getBoundingClientRect().top - headerHeight - 20;
    if (targetTop < 0) {
      targetTop = 0;
    }

    window.scrollTo({
      top: targetTop,
      behavior: 'smooth'
    });
  }

  function updateFormForRole() {
    var role = roleSelect.value;
    var isNative = role === 'native';
    form.classList.toggle('is-native', isNative);
    setNativeMode(isNative);
  }

  var trackedParams = getTrackingParams();
  var selectedRole = trackedParams.role || deriveRoleFromSlug(trackedParams.trackingLinkSlug);

  if (selectedRole) {
    roleSelect.value = selectedRole;
  }

  if (trackedParams.trackingLinkSlug) {
    trackingSlugInput.value = trackedParams.trackingLinkSlug;
  }

  updateFormForRole();

  roleSelect.addEventListener('change', function() {
    updateFormForRole();
  });

  document.querySelectorAll('a[href="#apply-form"]').forEach(function(link) {
    link.addEventListener('click', function(event) {
      event.preventDefault();
      scrollToApplyForm('smooth');
    });
  });

  if (window.location.hash === '#apply-form') {
    window.requestAnimationFrame(function() {
      scrollToApplyForm('smooth');
    });
  }

  form.addEventListener('submit', async function(event) {
    event.preventDefault();
    setError([]);

    if (!roleSelect.value) {
      setError(['希望職種を選択してください。']);
      focusAndScrollToField(roleSelect);
      return;
    }

    if (!form.reportValidity()) {
      focusAndScrollToField(form.querySelector(':invalid'));
      return;
    }

    var role = roleSelect.value;
    var applicationPayload = {
      role: role,
      email: form.elements.email.value.trim(),
      phone: form.elements.phone.value.trim(),
      full_name: form.elements.full_name.value.trim(),
      date_of_birth: form.elements.date_of_birth.value,
      full_address: form.elements.full_address.value.trim(),
      gender: form.elements.gender.value.trim(),
      highest_education: form.elements.highest_education.value.trim(),
      employment_history: form.elements.employment_history.value.trim(),
      reason_for_application: role === 'native' ? form.elements.reason_for_application.value.trim() : '',
      nationality: form.elements.nationality.value.trim(),
      work_visa_status: role === 'native' ? form.elements.work_visa_status.value : '',
      questions: form.elements.questions.value.trim(),
      privacy_policy_consent: form.elements.privacy_policy_consent.checked,
      privacy_policy_url: PRIVACY_POLICY_URL,
      utm_source: trackedParams.utm_source,
      utm_medium: trackedParams.utm_medium,
      utm_campaign: trackedParams.utm_campaign,
      utm_term: trackedParams.utm_term,
      utm_content: trackedParams.utm_content,
      gclid: trackedParams.gclid,
      fbclid: trackedParams.fbclid,
      ttclid: trackedParams.ttclid,
      tracking_link_slug: trackingSlugInput.value.trim(),
      tracking_click_id: trackedParams.tracking_click_id,
      landing_page_url: window.location.href,
      referrer_url: document.referrer || '',
      locale: role === 'native' ? 'en' : 'ja',
      raw_tracking: trackedParams.raw_tracking
    };

    setLoading(true);

    try {
      var response = await fetch(API_ENDPOINT, {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          Accept: 'application/json'
        },
        body: JSON.stringify({ recruit_application: applicationPayload })
      });

      var json = {};
      try {
        json = await response.json();
      } catch (parseError) {
        json = {};
      }

      if (response.ok && json.status === 200) {
        var thankYouJa = json.thank_you && json.thank_you.ja;
        var thankYouEn = json.thank_you && json.thank_you.en;
        var jaEl = successBox.querySelector('.apply-success__ja');
        var enEl = successBox.querySelector('.apply-success__en');
        if (thankYouJa && jaEl) {
          jaEl.textContent = thankYouJa;
        }
        if (thankYouEn && enEl) {
          enEl.textContent = thankYouEn;
        }

        form.hidden = true;
        successBox.hidden = false;
        successBox.scrollIntoView({ behavior: 'smooth', block: 'start' });
        return;
      }

      var errors = Array.isArray(json.errors) ? json.errors : ['送信に失敗しました。入力内容をご確認ください。'];
      setError(errors);
    } catch (networkError) {
      setError(['通信エラーが発生しました。時間をおいて再度お試しください。']);
    } finally {
      setLoading(false);
    }
  });
})();
