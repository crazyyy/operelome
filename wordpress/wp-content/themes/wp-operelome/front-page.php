<?php /* Template Name: Home Page Template */ get_header(); ?>
        <div id="middle">
          <div class="centered">
            <div class="row row-slider">
              <div class="col col-16">
                <?php get_template_part('homeslider'); ?>
              </div>
              <div class="col col-8">
                <form class="search-form" action="./index_files/index.html">
                  <div class="search-right">
                    <input class="search-button" type="submit" name="" value="Поиск">
                  </div>
                  <div class="search-left">
                    <input class="search-text" type="text" name="s" value="" placeholder="Введите запрос..." required="required">
                  </div>
                </form>
                <a href="http://operelome.ru/zadat-vopros" class="bordered-button bordered-button-doctor">
                  <span><strong>Задать вопрос<br> травматологу</strong></span>
                </a>
                <a href="http://operelome.ru/poisk-travmpunkta" class="bordered-button bordered-button-map">
                  <span><strong>Поиск<br> травмпунктов</strong></span>
                </a>
              </div>
              <div class="clear"></div>
            </div>
            <div class="row no-mrg row-questions">
              <div class="col col-16">
                <div class="block1 block-questions">
                  <div class="block1-inner">
                    <div class="title">Последние вопросы врачу-травматологу</div>
                    <div class="row no-mrg">
                      <div class="col col-8 text-center img">
                        <img class="question" src="<?php echo get_template_directory_uri(); ?>/img/question.png" alt="">
                      </div>
                      <div class="col col-16">
                        <ul class="questions-list">
                          <li><a href="http://operelome.ru/vopros/posle-pereloma-lonnoy-kosti-nachalis-silnyie-boli">После перелома лонной кости начались сильные боли?</a></li>
                          <li><a href="http://operelome.ru/vopros/posle-seansa-magnitoterapii-nachinayutsya-rezkie-boli-v-oblasti-pereloma-klyuchitsyi">После сеанса магнитотерапии начинаются резкие боли в области перелома ключицы</a></li>
                          <li><a href="http://operelome.ru/vopros/perelom-pozvonka-1-y-stepeni-mozhno-li-vstavat">Перелом позвонка 1-й степени — можно ли вставать?</a></li>
                          <li><a href="http://operelome.ru/vopros/iz-za-skolioza-noshu-korset-mozhno-li-v-nem-katatsya-na-skeyte">Из-за сколиоза ношу корсет, можно ли в нем кататься на скейте?</a></li>
                        </ul>
                      </div>
                      <div class="clear"></div>
                    </div>
                    <div class="text-right" style="margin-top: 20px;">
                      <a class="btn-filled btn-filled-small" href="http://operelome.ru/zadat-vopros" title="">Задать свой вопрос</a>
                      <a class="btn-filled btn-filled-small" href="http://operelome.ru/vopros" title="">Все вопросы</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col col-8 vk">


              </div>
              <div class="clear"></div>
            </div>
            <div class="row row-posts">
              <div class="col col-12">
                <div class="block-title">
                  Первая помощь при переломе
                  <a class="more" href="http://operelome.ru/pervaya-pomosch" title="Первая помощь при переломе"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-link.png" alt=""></a>
                </div>
                <div class="short-horiz-wrapper">
                  <div class="short-horiz" id="short-horiz-1509">
                    <div class="img">
                      <div class="thumb thumb-small">
                        <a href="http://operelome.ru/pervaya-pomosch/1509-pravila-nalozheniya-shin-pri-perelomah" title="Правила наложения шин при переломах"><img src="<?php echo get_template_directory_uri(); ?>/img/ruka-na-perevyazi-mddz6kyj89s50fljma8py4ndguoarolrljk8qlu63g.jpg" title="Правила наложения шин при переломах" alt="Правила наложения шин при переломах" width="150" height="150"></a>
                      </div>
                    </div>
                    <div class="title"><a href="http://operelome.ru/pervaya-pomosch/1509-pravila-nalozheniya-shin-pri-perelomah" title="Правила наложения шин при переломах">Правила наложения шин при переломах</a></div>
                  </div>
                  <div class="short-horiz" id="short-horiz-1490">
                    <div class="img">
                      <div class="thumb thumb-small">
                        <a href="http://operelome.ru/pervaya-pomosch/1490-pervaya-pomoshh-pri-perelome-nogi" title="Первая помощь при переломе ноги"><img src="<?php echo get_template_directory_uri(); ?>/img/sportsmen-s-nogoy-v-gipse-mdbnuuoom7dlg4vfxmuon3m9svym1jvv69c10tkfa4.jpg" title="Первая помощь при переломе ноги" alt="Первая помощь при переломе ноги" width="150" height="150"></a>
                      </div>
                    </div>
                    <div class="title"><a href="http://operelome.ru/pervaya-pomosch/1490-pervaya-pomoshh-pri-perelome-nogi" title="Первая помощь при переломе ноги">Первая помощь при переломе ноги</a></div>
                  </div>
                  <div class="short-horiz" id="short-horiz-1460">
                    <div class="img">
                      <div class="thumb thumb-small">
                        <a href="http://operelome.ru/pervaya-pomosch/1460-pervaya-pomoshh-pri-perelome-reber" title="Первая помощь при переломе ребер"><img src="<?php echo get_template_directory_uri(); ?>/img/sportsmen-poluchil-udar-po-rebram-md6rk8ev8vc2c7ovq9v14nbc5tmxpo8ylevoq7rfq4.jpg" title="Первая помощь при переломе ребер" alt="Первая помощь при переломе ребер" width="150" height="150"></a>
                      </div>
                    </div>
                    <div class="title"><a href="http://operelome.ru/pervaya-pomosch/1460-pervaya-pomoshh-pri-perelome-reber" title="Первая помощь при переломе ребер">Первая помощь при переломе ребер</a></div>
                  </div>
                </div>
              </div>
              <div class="col col-12 last">
                <div class="block-title">
                  Реабилитация после переломов
                  <a class="more" href="http://operelome.ru/reabilitatsiya" title="Реабилитация после переломов"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-link.png" alt=""></a>
                </div>
                <div class="short-horiz-wrapper">
                  <div class="short-horiz" id="short-horiz-1520">
                    <div class="img">
                      <div class="thumb thumb-small">
                        <a href="http://operelome.ru/golova/1520-vdavlennyiy-perelom-cherepa" title="Вдавленный перелом черепа"><img src="<?php echo get_template_directory_uri(); ?>/img/rentegnsnimok-cherepa-mdfg2sc4foht1xmuedya6ly4jt3a9i5zehdmgigcws.jpg" title="Вдавленный перелом черепа" alt="Вдавленный перелом черепа" width="150" height="150"></a>
                      </div>
                    </div>
                    <div class="title"><a href="http://operelome.ru/golova/1520-vdavlennyiy-perelom-cherepa" title="Вдавленный перелом черепа">Вдавленный перелом черепа</a></div>
                  </div>
                  <div class="short-horiz" id="short-horiz-1402">
                    <div class="img">
                      <div class="thumb thumb-small">
                        <a href="http://operelome.ru/golova/1402-perelom-nosa-u-rebenka" title="Перелом носа у ребенка"><img src="<?php echo get_template_directory_uri(); ?>/img/malchik-prizhimaet-k-nosu-platok-mcxxkytjs8w1wbhfq4oj9bpsavr8a7e7epdld8qkpo.jpg" title="Перелом носа у ребенка" alt="Перелом носа у ребенка" width="150" height="150"></a>
                      </div>
                    </div>
                    <div class="title"><a href="http://operelome.ru/golova/1402-perelom-nosa-u-rebenka" title="Перелом носа у ребенка">Перелом носа у ребенка</a></div>
                  </div>
                  <div class="short-horiz" id="short-horiz-623">
                    <div class="img">
                      <div class="thumb thumb-small">
                        <a href="http://operelome.ru/golova/623-perelom-cherepa" title="Перелом черепа"><img src="<?php echo get_template_directory_uri(); ?>/img/perelom-cherepa-m8pvf14o1j068uk7qkdlw8jktcdwmneqt31p4uao9o.jpeg" title="Перелом черепа" alt="Перелом черепа" width="150" height="150"></a>
                      </div>
                    </div>
                    <div class="title"><a href="http://operelome.ru/golova/623-perelom-cherepa" title="Перелом черепа">Перелом черепа</a></div>
                  </div>
                </div>
              </div>
              <div class="clear"></div>
            </div>
            <div class="page-wrapper" id="page-2">
              <h1 class="page-title"><?php the_title(); ?></h1>
              <div class="page-content formatted">
                <?php the_content(); ?>
              </div>
            </div>
          </div>
        </div>
<?php get_footer(); ?>
