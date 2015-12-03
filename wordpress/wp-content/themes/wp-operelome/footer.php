          </div><!-- centered -->
        </div><!-- #middle -->
        <div id="footer-disclaimer">
          <div class="centered">
            <!-- noindex -->Информация носит справочный характер. Не занимайтесь самолечением! При признаках заболевания обратитесь к врачу!
            <!-- /noindex -->
          </div>
        </div>
        <div id="footer">
          <div class="centered">
            <div class="footer-right">
              <div class="footer-counters">
              </div>
            </div>
            <div class="footer-left">
              <div class="footer-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>" class="logo-img">
              </div>
              <div class="footer-after-logo">
                <div class="footer-nav">
                  <?php wpeFootNav(); ?>
                </div>
                <div class="footer-text">
                  <!-- noindex --><strong>&copy; <?php echo date("Y"); ?> Собственность <?php bloginfo('name'); ?></strong> | Материалы на сайте защищены авторским правом. При копировании материалов ссылка на сайт <?php bloginfo('name'); ?> обязательная
                  <!-- /noindex -->
                </div>
              </div>
            </div>
            <div class="clear"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="sb-slidebar sb-left">
    <?php wpeFootNavSec(); ?>
    <div class="title">Рубрики</div>
    <?php wpeFootNavThird(); ?>
  </div>
  <div id="top-nav" class="sb-slide">
    <div class="sb-toggle-left"><span></span><span></span><span></span></div>
  </div>
  <!-- wp footer start -->
  <?php wp_footer(); ?>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.fancybox.pack.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.sliderpro.min.js"></script>

</body>
</html>
