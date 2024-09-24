<?php get_header(); ?>

  <main>
    <div class="top-title">
      <div class="top-pc">
        <img src="<?php echo get_template_directory_uri(); ?>/img/img/company_hd.png">
      </div>
      <div class="top-sp">
        <img src="<?php echo get_template_directory_uri(); ?>/img/img/company_hd_sp.png">
      </div>
      <h2><?php the_title(); ?></h2>
    </div>

    <div class="company-info">
      <table>
        <tr>
          <th>会社名</th>
          <td>株式会社Ti-PROOF</td>
        </tr>
        <tr>
          <th>代表者名</th>
          <td>三日尻　竜己</td>
        </tr>
        <tr>
          <th>携帯番号</th>
          <td>090-8001-3304</td>
        </tr>
        <tr>
          <th>TEL</th>
          <td>048-940-8935</td>
        </tr>
        <tr>
          <th>FAX</th>
          <td>048-940-8930</td>
        </tr>
        <tr>
          <th>所在地</th>
          <td>〒343-0011 <span>埼玉県越谷市増林2714</span></td>
        </tr>
        <tr>
          <th>営業時間</th>
          <td>8:30-20:00</td>
        </tr>
        <tr>
          <th>定休日</th>
          <td>日曜日</td>
        </tr>
        <tr>
          <th>業務内容</th>
          <td>防水工事、外壁改修工事、<span>内装工事</span></td>
        </tr>
        <tr>
          <th>対応エリア</th>
          <td>関東一円</td>
        </tr>
      </table>
    </div>

    <div class="map">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3231.5123073514305!2d139.81486057526124!3d35.909958317376365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601897ca46f8e0fd%3A0xe6e80512a785ec8!2z44CSMzQzLTAwMTEg5Z-8546J55yM6LaK6LC35biC5aKX5p6X77yS77yX77yR77yU!5e0!3m2!1sja!2sjp!4v1727009364489!5m2!1sja!2sjp"
        style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <section id="contact" class="company-contact">
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