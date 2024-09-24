<?php get_header(); ?>

  <main>
    <div class="top-title">
      <div class="top-pc">
        <img src="<?php echo get_template_directory_uri(); ?>/img/img/recruit_form_hd.png">
      </div>
      <div class="top-sp">
        <img src="<?php echo get_template_directory_uri(); ?>/img/img/recruit_form_hd_sp.png">
      </div>
      <h2><?php the_title(); ?></h2>
    </div>

    <div class="application-form">
      <h3>経験者・未経験者ともに大歓迎！<br>奮ってご応募ください！</h3>
      <div class="application-content">
      <?php echo apply_filters('the_content', '[contact-form-7 id="d0b7857" title="求人のご応募"]'); ?>
      
      </div>
    </div>

    <section id="contact" class="application-contact">
      <div class="contact-pc">
        <img src="<?php echo get_template_directory_uri(); ?>/img/img/contact_bg.png" alt="ローラで塗っている背景">
      </div>
      <div class="contact-sp">
        <img src="<?php echo get_template_directory_uri(); ?>/img/img/sp_contact_bg.png" alt="ローラで塗っている背景">
      </div>
      <div class="contact-content">
        <div class="contact-title">
          <h2>CONTACT</h2>
          <p>お問い合わせ</p>
        </div>
        <div class="for-contact">
          <p>お電話でのお問い合わせはこちら</p>
          <div class="contact-phone">
            <a href="tel:+81489408935"><img src="<?php echo get_template_directory_uri(); ?>/img/アイコン/tel.png" alt="電話のアイコン">
              <p>048-940-8935<span>&emsp;&emsp;&rsaquo;</span></p>
            </a>
          </div>
          <div class="contact-mail">
            <a href="<?php echo home_url(); ?>/contact">
              <img src="<?php echo get_template_directory_uri(); ?>/img/アイコン/メールの無料アイコン.png" alt="メールのアイコン">
              <p>お仕事のご依頼・その他のお問い合わせ</p>
            </a>
          </div>
          <p>お気軽にお問い合わせください。</p>
        </div>
      </div>
    </section>

  </main>

  <?php get_footer(); ?>