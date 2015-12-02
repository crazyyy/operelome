

  <?php if ( is_active_sidebar('widgetarea1') ) : ?>
    <?php dynamic_sidebar( 'widgetarea1' ); ?>
  <?php else : ?>

            <div id="sidebar">

              <div class="sitem">

                <form class="search-form" action="http://operelome.ru/">
                  <div class="search-right">
                    <input class="search-button" type="submit" name="" value="Поиск">
                  </div>
                  <div class="search-left">
                    <input class="search-text" type="text" name="s" value="" placeholder="Введите запрос..." required="required">
                  </div>
                </form>
              </div>

              <div class="sitem">

                <a href="http://operelome.ru/zadat-vopros" class="bordered-button bordered-button-doctor">
                  <span>
                    <strong>Задать вопрос
                      <br> травматологу</strong>
                  </span>
                </a>

                <a href="http://operelome.ru/poisk-travmpunkta" class="bordered-button bordered-button-map">
                  <span>
                    <strong>Поиск
                      <br> травмпунктов</strong>
                  </span>
                </a>
              </div>

              <div class="sitem">

                <div class="stitle">Вопросы врачу-травматологу</div>
                <div class="block1">
                  <div class="block1-inner block1-inner-small">

                    <ul class="questions-list-small">
                      <li><a href="http://operelome.ru/vopros/posle-pereloma-lonnoy-kosti-nachalis-silnyie-boli">После перелома лонной кости начались сильные боли?</a></li>
                      <li><a href="http://operelome.ru/vopros/posle-seansa-magnitoterapii-nachinayutsya-rezkie-boli-v-oblasti-pereloma-klyuchitsyi">После сеанса магнитотерапии начинаются резкие боли в области перелома ключицы</a></li>
                      <li><a href="http://operelome.ru/vopros/perelom-pozvonka-1-y-stepeni-mozhno-li-vstavat">Перелом позвонка 1-й степени — можно ли вставать?</a></li>
                      <li><a href="http://operelome.ru/vopros/byil-perelom-pozvonkov-vozmut-li-v-armiyu-pri-takom-diagnoze">Был перелом позвонков — возьмут ли в армию при таком диагнозе?</a></li>
                      <li><a href="http://operelome.ru/vopros/iz-za-skolioza-noshu-korset-mozhno-li-v-nem-katatsya-na-skeyte">Из-за сколиоза ношу корсет, можно ли в нем кататься на скейте?</a></li>
                      <li><a href="http://operelome.ru/vopros/nuzhna-li-operatsiya-pri-kompressionnom-i-vzryivnom-perelomah-pozvonkov">Нужна ли операция при компрессионном и взрывном переломах позвонков?</a></li>
                    </ul>

                    <div class="text-right" style="margin-top: 10px;">
                      <a class="btn-filled btn-filled-small" href="http://operelome.ru/vopros" title="">Все вопросы</a>
                    </div>

                  </div>
                </div>
              </div>



              <div class="spongebob spongebob-sidebar">

                <script async="" src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- operelomekvadrat -->
                <ins class="adsbygoogle" style="display: none !important; width: 300px; height: 250px;" data-ad-client="ca-pub-8497001485260533" data-ad-slot="9363001408"></ins>
                <script>
                  (adsbygoogle = window.adsbygoogle || []).push({});
                </script>

              </div>
              <div class="sitem">
                <div class="stitle">Наши партнеры</div>
                <div class="block2 block-partners">
                  <a href="http://www.comnews-conferences.ru/it2015" title="" target="_blank">
                    <img src="./category_files/98ri83ry934y.gif" alt="">
                  </a>
                  <a href="https://www.aptekaexpo.ru/" title="" target="_blank">
                    <img src="./category_files/9u8ur99r8u.gif" alt="">
                  </a>
                </div>
              </div>

            </div>

  <?php endif; ?>
