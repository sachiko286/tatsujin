<?php get_header(); ?>

<section class="sub-fv">
  <div class="sub-fv-wrapper">
    <div class="sub-fv-bg sub-fv-bg-overview">
      <!-- <video src="" autoplay muted loop playsinline></video> -->
      <img src="<?php echo get_template_directory_uri(); ?>/images/assets/recruit-fv.jpg" alt="FV画像">
    </div>
    <div class="sub-fv-title contents-wrapper">
      <h1 class="sub-fv-title-en">
        company
        <span class="sub-fv-title-ja">会社情報</span>
      </h1>
    </div>
  </div>
</section>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb') ?>

<section class="job">
  <div class="job-contents-wrapper contents-wrapper fade-in">
    <h2 class="job-title page-title">
      <span class="page-title-en">job description</span>
      <span class="page-title-ja-dot page-title-ja">募集要項</span>
    </h2>
    <div class="job-lists">
      <dl class="job-list">
        <dt class="job-list-term">雇用形態</dt>
        <dd class="job-list-description">正社員</dd>
      </dl>
      <dl class="job-list">
        <dt class="job-list-term">募集職種</dt>
        <dd class="job-list-description">
          溶接作業 他
        </dd>
      </dl>
      <dl class="job-list">
        <dt class="job-list-term">応募資格</dt>
        <dd class="job-list-description">大学・大学院・高専・専門学校を卒業見込の方</dd>
      </dl>
      <dl class="job-list">
        <dt class="job-list-term">給与</dt>
        <dd class="job-list-description">220,000円〜350,000円</dd>
      </dl>
      <dl class="job-list">
        <dt class="job-list-term">賞与</dt>
        <dd class="job-list-description">年2回 </dd>
      </dl>
      <dl class="job-list">
        <dt class="job-list-term">勤務時間</dt>
        <dd class="job-list-description">8：30～17：30（休憩60分）</dd>
      </dl>
      <dl class="job-list">
        <dt class="job-list-term">休日・休暇</dt>
        <dd class="job-list-description">
          完全週休2日制、国民祝日、年末年始、夏季休暇、年次有給休暇
        </dd>
      </dl>
      <dl class="job-list">
        <dt class="job-list-term">福利厚生</dt>
        <dd class="job-list-description">
          各種社会保険適用、交通費支給（上限あり）、退職金、<br>
          産前・産後休暇制度、育児・介護休職制度
        </dd>
      </dl>
    </div>
    <div class="job-button">
      <a href="<?php echo esc_url(home_url('/entry/')); ?>">entry</a>
    </div>
  </div>
</section>

<section class="job">
  <div class="job-contents-wrapper contents-wrapper fade-in">
    <h2 class="job-title page-title">
      <span class="page-title-en">job description</span>
      <span class="page-title-ja-dot page-title-ja">募集要項</span>
    </h2>
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>

        <div class="job-lists">
          <?php $recruitment_type = get_field('recruitment_type'); ?>
          <?php if (!empty($recruitment_type)) : ?>
            <dl class="job-list">
              <dt class="job-list-term">募集職種</dt>
              <dd class="job-list-description"><?php echo $recruitment_type; ?></dd>
            </dl>
          <?php endif; ?>
          <?php $employment_type = get_field('employment_type'); ?>
          <?php if (!empty($employment_type)) : ?>
            <dl class="job-list">
              <dt class="job-list-term">雇用形態</dt>
              <dd class="job-list-description">
                <?php echo $employment_type; ?>
              </dd>
            </dl>
          <?php endif; ?>
          <?php $qualification = get_field('qualification'); ?>
          <?php if (!empty($qualification)) : ?>
            <dl class="job-list">
              <dt class="job-list-term">応募資格</dt>
              <dd class="job-list-description"><?php echo $qualification; ?></dd>
            </dl>
          <?php endif; ?>
          <?php $salary = get_field('salary'); ?>
          <?php if (!empty($salary)) : ?>
            <dl class="job-list">
              <dt class="job-list-term">給与</dt>
              <dd class="job-list-description"><?php echo $salary; ?></dd>
            </dl>
          <?php endif; ?>
          <?php $bonus = get_field('bonus'); ?>
          <?php if (!empty($bonus)) : ?>
            <dl class="job-list">
              <dt class="job-list-term">賞与</dt>
              <dd class="job-list-description"><?php echo $bonus; ?></dd>
            </dl>
          <?php endif; ?>
          <?php $working_hours = get_field('working_hours'); ?>
          <?php if (!empty($working_hours)) : ?>
            <dl class="job-list">
              <dt class="job-list-term">勤務時間</dt>
              <dd class="job-list-description"><?php echo $working_hours; ?></dd>
            </dl>
          <?php endif; ?>
          <?php $holidays = get_field('holidays'); ?>
          <?php if (!empty($holidays)) : ?>
            <dl class="job-list">
              <dt class="job-list-term">休日・休暇</dt>
              <dd class="job-list-description">
                <?php echo $holidays; ?>
              </dd>
            </dl>
          <?php endif; ?>
          <?php $benefit = get_field('benefit'); ?>
          <?php if (!empty($benefit)) : ?>
            <dl class="job-list">
              <dt class="job-list-term">福利厚生</dt>
              <dd class="job-list-description">
                <?php echo $benefit; ?>
              </dd>
            </dl>
          <?php endif; ?>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
    <div class="job-button">
      <a href="<?php echo esc_url(home_url('/entry/')); ?>">entry</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>