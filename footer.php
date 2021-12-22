<footer class="p-footer">
      <div class="c-container">
        <div class="p-footer__wrap">
          <div class="p-footer__logo">
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/riv_logo_official2.png" alt="">
          </div>
          <div class="p-footer__nav">
            <ul>
              <li>
                <a class="animsition-link" href="<?php echo esc_url( home_url('/')); ?>"><span class="c-txt-sm">ホーム</span></a>
              </li>
              <li>
                <a class="animsition-link" href="<?php echo esc_url( home_url('/first')); ?>"><span class="c-txt-sm">初めての方へ</span></a>
              </li>
              <li>
                <a class="animsition-link" href="<?php echo esc_url( home_url('/price')); ?>"><span class="c-txt-sm">コース紹介</span></a>
              </li>
              <li>
                <a class="animsition-link" href="<?php echo esc_url( home_url('/staff')); ?>"><span class="c-txt-sm">スタッフ紹介</span></a>
              </li>
              <li>
                <a class="animsition-link" href="<?php echo esc_url( home_url('/faq')); ?>"><span class="c-txt-sm">よくあるご質問</span></a>
              </li>
              <li>
                <a class="animsition-link" href="<?php echo esc_url( home_url('/recruit')); ?>"><span class="c-txt-sm">採用情報</span></a>
              </li>
              <li>
                <a class="animsition-link" href="<?php echo esc_url( home_url('/news')); ?>"><span class="c-txt-sm">お知らせ</span></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="copyright">&copy;2021 RivRound</div>
      </div>
    </footer>
    <!-- /.footer -->
    <div class="mobile-menu">
      <nav class="mobile-menu__nav">
        <ul class="mobile-menu__list">
          <li class="mobile-menu__item"><a class="animsition-link" href="<?php echo esc_url( home_url('/')); ?>">ホーム</a></li>
          <li class="mobile-menu__item"><a class="animsition-link" href="<?php echo esc_url( home_url('/first')); ?>">初めての方へ</a></li>
          <li class="mobile-menu__item"><a class="animsition-link" href="<?php echo esc_url( home_url('/price')); ?>">コース紹介</a></li>
          <li class="mobile-menu__item"><a class="animsition-link" href="<?php echo esc_url( home_url('/staff')); ?>">スタッフ紹介</a></li>
          <li class="mobile-menu__item"><a class="animsition-link" href="<?php echo esc_url( home_url('/faq')); ?>">よくあるご質問</a></li>
          <li class="mobile-menu__item"><a class="animsition-link" href="<?php echo esc_url( home_url('/news')); ?>">お知らせ</a></li>
          <li class="mobile-menu__item"><a class="animsition-link" href="<?php echo esc_url( home_url('/recruit')); ?>">採用情報</a></li>
        </ul>
        <div class="contact-btn">
          <ul class="contact-btn-list">
            <li class="contact-btn-item">
              <a href="tel:05031599527">
                <span class="tel">電話予約</span>
              </a>
            </li>
            <li class="contact-btn-item">
              <a target="_blank" href="<?php echo esc_url( home_url('/contact')); ?>">
                <span class="mail">オンライン予約</span>
              </a>
            </li>
        </div>
        </ul>
      </nav>
    </div>
    <!-- /.mobile-menu -->
    <?php wp_footer(); ?>