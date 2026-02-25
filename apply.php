<?php
$page_title = 'Kids Up Recruit | Apply';
$body_class = 'page-apply';
$apply_cta_href = '#apply-form';
$apply_cta_aria_label = '応募フォームへ移動';
$page_top_title_line1 = 'Kids UP 採用エントリー';
$page_top_title_line2 = 'フォームに必要事項をご入力ください';
$page_top_cta_label = 'フォームへ';
$page_top_cta_href = '#apply-form';
$recruit_api_endpoint = getenv('RECRUIT_API_ENDPOINT') ?: 'https://kids-up.app/api/recruit_applications';
$privacy_policy_url = 'https://www.p-up.world/privacypolicy/';
include __DIR__ . '/includes/header.php';
?>
<?php include __DIR__ . '/includes/page-top.php'; ?>

<section class="apply-page" id="apply-form">
  <div class="ku-section__inner apply-page__inner">
    <header class="apply-page__header">
      <h1 class="apply-page__title">応募フォーム / Application Form</h1>
      <p class="apply-page__description">
        希望職種を選択すると、該当職種の応募フォームが表示されます。<span aria-hidden="true">※</span>は必須項目です。
      </p>
    </header>

    <div class="apply-form-wrapper">
      <form
        id="recruit-apply-form"
        class="apply-form"
        novalidate
        data-api-endpoint="<?php echo esc_attr($recruit_api_endpoint); ?>"
        data-privacy-policy-url="<?php echo esc_attr($privacy_policy_url); ?>"
      >
        <div class="apply-form__grid">
          <div class="apply-field apply-field--full">
            <label for="apply-role">
              希望職種 (Job Type) <span class="apply-required">※必須</span>
            </label>
            <select id="apply-role" name="role" required>
              <option value="">職種を選択してください</option>
              <option value="sm">SM / スクールマネージャー</option>
              <option value="bilingual">バイリンガル</option>
              <option value="native">Native</option>
              <option value="driver">ドライバー</option>
              <option value="tour_staff">添乗員</option>
              <option value="new_graduate">新卒</option>
            </select>
          </div>

          <div class="apply-field">
            <label for="apply-email">メールアドレス (Email Address) <span class="apply-required">※必須</span></label>
            <input id="apply-email" name="email" type="email" autocomplete="email" required>
          </div>

          <div class="apply-field">
            <label for="apply-phone">電話番号 (Phone Number) <span class="apply-required">※必須</span></label>
            <input id="apply-phone" name="phone" type="tel" autocomplete="tel" required>
          </div>

          <div class="apply-field">
            <label for="apply-full-name">氏名 (Full Name) <span class="apply-required">※必須</span></label>
            <input id="apply-full-name" name="full_name" type="text" autocomplete="name" required>
          </div>

          <div class="apply-field">
            <label for="apply-date-of-birth">生年月日 (Date of Birth) <span class="apply-required">※必須</span></label>
            <input
              id="apply-date-of-birth"
              name="date_of_birth"
              type="date"
              min="0001-01-01"
              max="9999-12-31"
              maxlength="10"
              required
            >
          </div>

          <div class="apply-field apply-field--full">
            <label for="apply-full-address">住所 (Full Address) <span class="apply-required">※必須</span></label>
            <input id="apply-full-address" name="full_address" type="text" autocomplete="street-address" required>
          </div>

          <div class="apply-field">
            <label for="apply-gender">性別 (Gender)</label>
            <select id="apply-gender" name="gender">
              <option value="">指定なし (Not specified)</option>
              <option value="Male">男性 (Male)</option>
              <option value="Female">女性 (Female)</option>
            </select>
          </div>

          <div class="apply-field">
            <label for="apply-nationality">国籍 (Nationality)</label>
            <input id="apply-nationality" name="nationality" type="text" autocomplete="country-name">
          </div>

          <div class="apply-field apply-field--full">
            <label for="apply-highest-education">最終学歴 (Highest Level of Education)</label>
            <textarea id="apply-highest-education" name="highest_education" rows="3"></textarea>
          </div>

          <div class="apply-field apply-field--full">
            <label for="apply-employment-history">職務経歴 (Employment History)</label>
            <textarea id="apply-employment-history" name="employment_history" rows="4"></textarea>
          </div>

          <div class="apply-field apply-field--full js-native-only" hidden>
            <label for="apply-reason-for-application">Reason for Application</label>
            <textarea id="apply-reason-for-application" name="reason_for_application" rows="3"></textarea>
          </div>

          <div class="apply-field js-native-only" hidden>
            <label for="apply-work-visa-status">Do you currently hold a valid work visa?</label>
            <select id="apply-work-visa-status" name="work_visa_status">
              <option value="">Select</option>
              <option value="Yes">Yes</option>
              <option value="No">No</option>
              <option value="In progress">In progress</option>
            </select>
          </div>

          <div class="apply-field apply-field--full">
            <label for="apply-questions">ご質問等ございましたらご記入ください。 (If you have any questions, please write them below.)</label>
            <textarea id="apply-questions" name="questions" rows="4"></textarea>
          </div>
        </div>

        <input type="hidden" id="tracking-link-slug" name="tracking_link_slug" value="">

        <label class="apply-consent">
          <input id="apply-privacy-consent" type="checkbox" name="privacy_policy_consent" value="on" required>
          <span>
            個人情報保護への同意 (Consent to the Privacy Policy) <span class="apply-required">※必須</span>
            <span class="apply-consent__policy">
              <a href="<?php echo esc_url($privacy_policy_url); ?>" target="_blank" rel="noopener noreferrer">プライバシーポリシー (Privacy Policy)</a>
            </span>
          </span>
        </label>

        <div id="apply-error-box" class="apply-error" hidden></div>

        <div class="apply-actions">
          <button id="apply-submit-button" type="submit" class="apply-submit">応募する / Submit</button>
        </div>
      </form>

      <section id="apply-success-box" class="apply-success" hidden>
        <h2 class="apply-success__title">ご応募ありがとうございました。</h2>
        <p class="apply-success__ja">
          内容を確認のうえ、次のステップに進んでいただく方にのみご連絡させていただきます。<br>
          あらかじめご了承ください。
        </p>
        <p class="apply-success__en">
          Thank you for your application.<br>
          We will carefully review the applications and contact those who will proceed in our hiring process.
        </p>
      </section>
    </div>
  </div>
</section>

<script src="<?php echo get_template_directory_uri(); ?>/js/apply.js"></script>

<?php include __DIR__ . '/includes/footer.php'; ?>
