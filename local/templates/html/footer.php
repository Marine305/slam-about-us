
                   <!--Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/components-template/footer/style.css");-->
                    <div class="footer-wrap">
                        <div class="container">
                            <div class="footer">
                                <div class="footer__col">
                                    <a class="logo" href="#" aria-label="На главную">
                                        <span class="lazy-img-wrap">
                                            <img class="lazy-img logo__img" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="<?=SITE_TEMPLATE_PATH?>/images/SLAM_logo-color.svg" alt="Slam logo">
                                        </span>
                                    </a>
                                    <div class="copy"> <span>© </span>
                                        <div class="copy__name">ООО «Слэмсофт», 2020</div>
                                    </div>
                                </div>
                                <div class="footer__col">
                                    <a href="tel:+375445644564">+375 44 564-45-64</a>
                                    <a href="tel:+375447119432">+375 44 711-94-32</a>
                                </div>
                                <div class="footer__col">
                                    <a href="mailto:info@slam.by" target="_blank">info@slam.by</a><!--Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/components-template/social-list/style.css");-->
                                    <div class="social-list">
                                        <a class="social" href="#" aria-label="facebook">
                                            <svg class="icon social__icon">
                                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#fb"/>
                                            </svg>
                                        </a>
                                        <a class="social" href="#" aria-label="linkedin">
                                            <svg class="icon social__icon">
                                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#in"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             </main>
         </div>
                   <script>
                       var tagInitTimeout,
                           tagInitInitFlag = false,
                           width = window.innerWidth
                               || document.documentElement.clientWidth
                               || document.body.clientWidth,

                           tagInit = function () {

                               (function (m, e, t, r, i, k, a) {
                                   m[i] = m[i] || function () {
                                       (m[i].a = m[i].a || []).push(arguments)
                                   };
                                   m[i].l = 1 * new Date();
                                   k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
                               })
                               (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

                               ym(64535857, "init", {
                                   clickmap:true,
                                   trackLinks:true,
                                   accurateTrackBounce:true,
                                   webvisor:true
                               });

                               window.dataLayer = window.dataLayer || [];

                               function gtag() {
                                   dataLayer.push(arguments);
                               }

                               gtag('js', new Date());

//                               gtag('config', 'UA-162857316-1');


                               clearTimeout(tagInitTimeout);
                           },
                           tagInitOnEvent = function () {
                               if (!tagInitInitFlag) {
                                   clearTimeout(tagInitTimeout);
                                   tagInit();
                               }
                           };


                       if (width <= 420) {
                           tagInitTimeout = setTimeout(tagInit, 5000);
                           document.addEventListener("scroll", tagInitOnEvent);
                           document.addEventListener("click", tagInitOnEvent);
                           document.addEventListener("touchstart", tagInitOnEvent);
                       } else {
                           tagInit();
                       }
                   </script>
    </body>
</html>