<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetPageProperty("title", "Поддержка и ускорение сайтов на 1С-Битрикс");
$APPLICATION->SetPageProperty("description", "Мы детально изучили требования Google и обеспечиваем качественную реализацию проекта на всех уровнях: выбор хостинга, производительная верстка, качественный код с оптимизацией запросов к базам данных.");
$APPLICATION->SetTitle("Ускорение сайтов на 1С-Битрикс");
?>
    <main class="main">
    <div class="first-screen">
        <picture class="first-screen-bg">
            <source media="(max-width: 460px)" srcset="<?= SITE_TEMPLATE_PATH ?>/images/fs-bg-460w.jpg">
            <source media="(min-width: 461px)" srcset="<?= SITE_TEMPLATE_PATH ?>/images/fs-bg.jpg">
            <img class="first-screen-bg" src="<?= SITE_TEMPLATE_PATH ?>/images/fs-bg.jpg" alt="img">
        </picture>

        <div class="container">
            <div class="first-screen__body">
                <div class="first-screen__text-col">
                    <h1>Поддержка и ускорение сайтов на 1С-Битрикс</h1>
                    <ul class="fs-list">
                        <li class="fs-list__item">Ваш сайт медленно работает?</li>
                        <li class="fs-list__item">SEO-специалисты требуют ускорить сайт ради лучшего ранжирования?</li>
                        <li class="fs-list__item">Вы не уверены в компетентности вашего разработчика, Ваш сайт падает
                            от нагрузок, а обмены идут очень долго?
                        </li>
                    </ul>
                    <div class="text-20">Мы все исправим.</div>
                </div>
                <div class="first-screen__form-col">
                    <? $APPLICATION->IncludeComponent(
                        "slam:easyform",
                        "form_top",
                        array(
                            "CATEGORY_EMAIL_PLACEHOLDER" => "E-mail",
                            "CATEGORY_EMAIL_TITLE" => "E-mail",
                            "CATEGORY_EMAIL_TYPE" => "email",
                            "CATEGORY_EMAIL_VALIDATION_ADDITIONALLY_MESSAGE" => "data-bv-emailaddress-message=\"E-mail введен некорректно\"",
                            "CATEGORY_EMAIL_VALIDATION_MESSAGE" => "Обязательное поле",
                            "CATEGORY_EMAIL_VALUE" => "",
                            "CATEGORY_MESSAGE_PLACEHOLDER" => "",
                            "CATEGORY_MESSAGE_TITLE" => "Сообщение",
                            "CATEGORY_MESSAGE_TYPE" => "textarea",
                            "CATEGORY_MESSAGE_VALIDATION_ADDITIONALLY_MESSAGE" => "",
                            "CATEGORY_MESSAGE_VALUE" => "",
                            "CATEGORY_PHONE_INPUTMASK" => "N",
                            "CATEGORY_PHONE_INPUTMASK_TEMP" => "",
                            "CATEGORY_PHONE_PLACEHOLDER" => "№ телефона",
                            "CATEGORY_PHONE_TITLE" => "№ телефона",
                            "CATEGORY_PHONE_TYPE" => "text",
                            "CATEGORY_PHONE_VALIDATION_ADDITIONALLY_MESSAGE" => "data-bv-regexp=\"true\" data-bv-regexp-regexp=\"^[ \\-\\+\\(\\)0-9]+\$\" data-bv-regexp-message=\"Телефон введен некорректно\"",
                            "CATEGORY_PHONE_VALUE" => "",
                            "CATEGORY_TITLE_PLACEHOLDER" => "Имя",
                            "CATEGORY_TITLE_TITLE" => "Имя",
                            "CATEGORY_TITLE_TYPE" => "text",
                            "CATEGORY_TITLE_VALIDATION_ADDITIONALLY_MESSAGE" => "",
                            "CATEGORY_TITLE_VALUE" => "",
                            "CATEGORY_URL_PLACEHOLDER" => "Адрес сайта",
                            "CATEGORY_URL_TITLE" => "Адрес сайта",
                            "CATEGORY_URL_TYPE" => "text",
                            "CATEGORY_URL_VALIDATION_ADDITIONALLY_MESSAGE" => "",
                            "CATEGORY_URL_VALUE" => "",
                            "COMPONENT_TEMPLATE" => "form_top",
                            "CREATE_SEND_MAIL" => "",
                            "DISPLAY_FIELDS" => array(
                                0 => "TITLE",
                                1 => "EMAIL",
                                2 => "PHONE",
                                3 => "URL",
                                4 => "",
                            ),
                            "EMAIL_BCC" => "",
                            "EMAIL_FILE" => "N",
                            "EMAIL_SEND_FROM" => "N",
                            "EMAIL_TO" => "",
                            "ENABLE_SEND_MAIL" => "N",
                            "ERROR_TEXT" => "Произошла ошибка. Сообщение не отправлено.",
                            "EVENT_MESSAGE_ID" => array(
                                0 => "358",
                            ),
                            "FIELDS_ORDER" => "TITLE,EMAIL,PHONE,URL",
                            "FORM_AUTOCOMPLETE" => "Y",
                            "FORM_ID" => "FORM6",
                            "FORM_NAME" => "Форма обратной связи 2",
                            "FORM_SUBMIT_VALUE" => "Отправить",
                            "FORM_SUBMIT_VARNING" => "",
                            "HIDE_ASTERISK" => "Y",
                            "HIDE_FIELD_NAME" => "N",
                            "HIDE_FORMVALIDATION_TEXT" => "N",
                            "INCLUDE_BOOTSRAP_JS" => "Y",
                            "MAIL_SUBJECT_ADMIN" => "#SITE_NAME#: Сообщение из формы обратной связи",
                            "OK_TEXT" => "Мы&nbsp;свяжемся с&nbsp;вами в&nbsp;течение 2х&nbsp;часов.",
                            "REQUIRED_FIELDS" => array(
                                0 => "TITLE",
                                1 => "EMAIL",
                                2 => "PHONE",
                                3 => "URL",
                            ),
                            "SEND_AJAX" => "Y",
                            "SHOW_MODAL" => "Y",
                            "TITLE_SHOW_MODAL" => "Ваше сообщение отправлено.",
                            "USE_BOOTSRAP_CSS" => "N",
                            "USE_BOOTSRAP_JS" => "N",
                            "USE_CAPTCHA" => "N",
                            "USE_FORMVALIDATION_JS" => "Y",
                            "USE_IBLOCK_WRITE" => "N",
                            "USE_JQUERY" => "N",
                            "USE_MODULE_VARNING" => "N",
                            "WIDTH_FORM" => "480px",
                            "_CALLBACKS" => "",
                            "CATEGORY_TITLE_VALIDATION_MESSAGE" => "Обязательное поле",
                            "CATEGORY_PHONE_VALIDATION_MESSAGE" => "Обязательное поле",
                            "CATEGORY_URL_VALIDATION_MESSAGE" => "Обязательное поле",
                            "USE_INPUTMASK_JS" => "N"
                        ),
                        false
                    ); ?>
                </div>
            </div>
        </div>
    </div><!--Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/components-template/wide-single-block/style.css");-->
    <div class="no-critical">
    <div class="wide-single-block" id="why-us">
        <div class="lazy-img-wrap">
            <span class="lazy-img"
                  data-bg="url(<?= SITE_TEMPLATE_PATH ?>/images/1c-bitrix.png), linear-gradient(transparent, transparent)"></span>
        </div>
        <div class="container">
            <h2 class="wide-single-block__title">«Битрикс медленно работает».</h2>

            <div class="wide-single-block__text">К сожалению, на рынке веб-разработки среди владельцев
                интернет-магазинов сложилось такое мнение. В первую очередь — это следствие малого опыта разработчиков,
                которые используют коробочные решения для больших проектов или просто не понимают, как устроен этот
                фреймворк.
            </div>
            <div class="wide-single-block__text bold">Битрикс — это универсальный инструмент для создания проектов любой
                сложности. Сегодня на рынке СНГ — это наиболее формализованная, мощная и надежная CMS среди конкурентов.
            </div>
            <div class="animate-field hidden-md-down">
                <div class="el"></div>
                <div class="el"></div>
                <div class="el"></div>
                <div class="el"></div>
                <div class="el"></div>
                <div class="el"></div>
                <div class="el"></div>
                <div class="el"></div>
                <div class="el"></div>
                <div class="el"></div>
                <div class="el"></div>
                <div class="el"></div>
                <div class="el"></div>
                <div class="el"></div>
                <div class="el"></div>
            </div>
        </div>
    </div>
    <!--Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/components-template/promo-block/style.css");-->
    <div class="promo-block-wrap" id="examples">
        <div class="promo-block-wrap__bg">
            <div class="lazy-img-wrap"><span class="lazy-img"
                                             data-bg="url(<?= SITE_TEMPLATE_PATH ?>/images/bg-feedback.png), linear-gradient(transparent, transparent)"></span>
            </div>
        </div>
        <div class="container">
            <div class="parallax">
                <div class="promo-block">
                    <h2 class="promo-block__title">Мы&nbsp;разрабатываем самые быстрые сайты</h2>

                    <div class="promo-block__body">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="text">Мы&nbsp;являемся профессиональным интегратором веб-проектов на&nbsp;CMS
                                    1C-Битрикс и&nbsp;имеем статус &laquo;Золотой партнер&raquo;.
                                </div>
                                <div class="text">Мы&nbsp;детально изучили требования Google и&nbsp;обеспечиваем
                                    качественную реализацию проекта на&nbsp;всех уровнях: выбор хостинга,
                                    производительная верстка, качественный код с&nbsp;оптимизацией запросов к&nbsp;базам
                                    данных. Также мы&nbsp;используем собственные модули по&nbsp;оптимизации изображений
                                    и&nbsp;конвертации каталогов.
                                </div>
                                <div class="text bold">Всем нашим партнерам и&nbsp;клиентам мы&nbsp;гарантируем
                                    ускорение их&nbsp;сайта до&nbsp;цифр выше&nbsp;90% в&nbsp;Google pagespeed insight
                                    при соблюдении всех наших рекомендаций.
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <!--Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/components-template/youtube/script.min.js");-->
                                <!--Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/components-template/youtube/style.css");-->
                                <div class="video-card" data-target="#videoPlay">
                                    <div class="video-card__img">
                                                <span class="lazy-img-wrap">
                                                    <img class="lazy-img"
                                                         src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mP8z8BQDwAEhQGAhKmMIQAAAABJRU5ErkJggg=="
                                                         data-src="/local/templates/html/images/youtube.jpg" alt="img">
                                                </span>
                                        <figure>
                                            <div class="youtube js-page-video" data-embed="9k64HGiMm5U">
                                                <div class="play-button">
                                                    <div class="play-button__icon"></div>
                                                </div>
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                                <p class="bold">domotehnika.by&nbsp;&mdash; сравнение нашего сайта со&nbsp;скоростью
                                    загрузки конкурентов</p>

                                <p>На&nbsp;десктопе главная страница загружается всего за&nbsp;2,1&nbsp;секунды, что в&nbsp;10&nbsp;раз
                                    быстрее некоторых конкурентов.</p>
                            </div>
                        </div>
                        <? $APPLICATION->IncludeComponent(
                            "slam:easy.list",
                            "example_speed",
                            array(
                                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                "ALL_NEWS_TITILE" => "",
                                "ALL_NEWS_TITILE_HREF" => "",
                                "BLOCK_TITLE" => "",
                                "CACHE_TIME" => "36000000",
                                "CACHE_TYPE" => "A",
                                "CHECK_DATES" => "Y",
                                "COMPONENT_TEMPLATE" => "example_speed",
                                "COMPRESS_IMAGE" => "Y",
                                "COMPRESS_IMAGE_VALUE" => "80",
                                "DATE_PROP" => "ACTIVE_FROM",
                                "DEBUG" => "N",
                                "DISPLAY_BOTTOM_PAGER" => "Y",
                                "DISPLAY_TOP_PAGER" => "N",
                                "EXTRA_DEFAULT_IMAGE" => "",
                                "EXTRA_FIRST_IMAGE" => "DETAIL_PICTURE",
                                "EXTRA_IMAGE_COMPRESS" => "Y",
                                "EXTRA_IMAGE_COMPRESS_VALUE" => "80",
                                "EXTRA_IMAGE_SET_PRELOADER" => "Y",
                                "EXTRA_IMAGE_SHOW" => "Y",
                                "EXTRA_RESIZE_IMAGE" => "Y",
                                "EXTRA_RESIZE_IMG_HEIGHT" => "230",
                                "EXTRA_RESIZE_IMG_WIDTH" => "350",
                                "EXTRA_SECOND_IMAGE" => "DETAIL_PICTURE",
                                "EXTRA_TYPE_IMG_THUMB" => "BX_RESIZE_IMAGE_PROPORTIONAL",
                                "FILTER_NAME" => "arrFilter",
                                "IBLOCK_ID" => "30",
                                "IBLOCK_TYPE" => "content",
                                "INCLUDE_SUBSECTIONS" => "Y",
                                "MAIN_DEFAULT_IMAGE" => "",
                                "MAIN_FIRST_IMAGE" => "PREVIEW_PICTURE",
                                "MAIN_RESIZE_IMAGE" => "Y",
                                "MAIN_RESIZE_IMG_HEIGHT" => "230",
                                "MAIN_RESIZE_IMG_WIDTH" => "350",
                                "MAIN_SECOND_IMAGE" => "0",
                                "MAIN_TYPE_IMG_THUMB" => "BX_RESIZE_IMAGE_PROPORTIONAL",
                                "NEWS_COUNT" => "6",
                                "PAGER_BASE_LINK_ENABLE" => "N",
                                "PAGER_DESC_NUMBERING" => "N",
                                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                "PAGER_SHOW_ALL" => "N",
                                "PAGER_SHOW_ALWAYS" => "N",
                                "PAGER_TEMPLATE" => ".default",
                                "PAGER_TITLE" => "",
                                "PARENT_SECTION" => "",
                                "PARENT_SECTION_CODE" => "",
                                "PRELOADER_EXTRA_IMAGE_QUALITY" => "5",
                                "PRELOADER_IMAGE_QUALITY" => "5",
                                "PROPERTY_CODE" => array(
                                    0 => "SPEED",
                                    1 => "LINK",
                                    2 => "",
                                ),
                                "SET_FILTER" => "N",
                                "SET_IMAGE_PRELOADER" => "Y",
                                "SET_PARENT_SECTION_CHAIN_NAV" => "N",
                                "SET_PARENT_SECTION_TITLE" => "N",
                                "SET_SECTION_CHAIN_NAV" => "N",
                                "SHOW_DATE" => "N",
                                "SHOW_IMAGE" => "Y",
                                "SHOW_NAV" => "N",
                                "SORT_BY1" => "ACTIVE_FROM",
                                "SORT_BY2" => "",
                                "SORT_ORDER1" => "DESC",
                                "SORT_ORDER2" => ""
                            ),
                            false
                        ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/components-template/form-block/style.css");-->
    <div class="form-block">
        <div class="container">
            <? $APPLICATION->IncludeComponent(
                "slam:easyform",
                "form_horizontal",
                array(
                    "CATEGORY_EMAIL_PLACEHOLDER" => "E-mail",
                    "CATEGORY_EMAIL_TITLE" => "E-mail",
                    "CATEGORY_EMAIL_TYPE" => "email",
                    "CATEGORY_EMAIL_VALIDATION_ADDITIONALLY_MESSAGE" => "data-bv-emailaddress-message=\"E-mail введен некорректно\"",
                    "CATEGORY_EMAIL_VALIDATION_MESSAGE" => "Обязательное поле",
                    "CATEGORY_EMAIL_VALUE" => "",
                    "CATEGORY_MESSAGE_PLACEHOLDER" => "",
                    "CATEGORY_MESSAGE_TITLE" => "Сообщение",
                    "CATEGORY_MESSAGE_TYPE" => "textarea",
                    "CATEGORY_MESSAGE_VALIDATION_ADDITIONALLY_MESSAGE" => "",
                    "CATEGORY_MESSAGE_VALUE" => "",
                    "CATEGORY_PHONE_INPUTMASK" => "N",
                    "CATEGORY_PHONE_INPUTMASK_TEMP" => "",
                    "CATEGORY_PHONE_PLACEHOLDER" => "№ телефона",
                    "CATEGORY_PHONE_TITLE" => "№ телефона",
                    "CATEGORY_PHONE_TYPE" => "text",
                    "CATEGORY_PHONE_VALIDATION_ADDITIONALLY_MESSAGE" => "data-bv-regexp=\"true\" data-bv-regexp-regexp=\"^[ \\-\\+\\(\\)0-9]+\$\" data-bv-regexp-message=\"Телефон введен некорректно\"",
                    "CATEGORY_PHONE_VALUE" => "",
                    "CATEGORY_TITLE_PLACEHOLDER" => "Имя",
                    "CATEGORY_TITLE_TITLE" => "Имя",
                    "CATEGORY_TITLE_TYPE" => "text",
                    "CATEGORY_TITLE_VALIDATION_ADDITIONALLY_MESSAGE" => "",
                    "CATEGORY_TITLE_VALUE" => "",
                    "CATEGORY_URL_PLACEHOLDER" => "Адрес сайта",
                    "CATEGORY_URL_TITLE" => "Адрес сайта",
                    "CATEGORY_URL_TYPE" => "text",
                    "CATEGORY_URL_VALIDATION_ADDITIONALLY_MESSAGE" => "",
                    "CATEGORY_URL_VALUE" => "",
                    "COMPONENT_TEMPLATE" => "form_horizontal",
                    "CREATE_SEND_MAIL" => "",
                    "DISPLAY_FIELDS" => array(
                        0 => "TITLE",
                        1 => "EMAIL",
                        2 => "PHONE",
                        3 => "URL",
                        4 => "",
                    ),
                    "EMAIL_BCC" => "",
                    "EMAIL_FILE" => "N",
                    "EMAIL_SEND_FROM" => "N",
                    "EMAIL_TO" => "",
                    "ENABLE_SEND_MAIL" => "N",
                    "ERROR_TEXT" => "Произошла ошибка. Сообщение не отправлено.",
                    "EVENT_MESSAGE_ID" => "",
                    "FIELDS_ORDER" => "TITLE,EMAIL,PHONE,URL",
                    "FORM_AUTOCOMPLETE" => "Y",
                    "FORM_ID" => "FORM8",
                    "FORM_NAME" => "Отправьте заявку",
                    "FORM_SUBMIT_VALUE" => "Отправить",
                    "FORM_SUBMIT_VARNING" => "",
                    "HIDE_ASTERISK" => "Y",
                    "HIDE_FIELD_NAME" => "N",
                    "HIDE_FORMVALIDATION_TEXT" => "N",
                    "INCLUDE_BOOTSRAP_JS" => "N",
                    "MAIL_SUBJECT_ADMIN" => "#SITE_NAME#: Сообщение из формы обратной связи",
                    "OK_TEXT" => "Мы&nbsp;свяжемся с&nbsp;вами в&nbsp;течение 2х&nbsp;часов.",
                    "REQUIRED_FIELDS" => array(
                        0 => "TITLE",
                        1 => "EMAIL",
                        2 => "PHONE",
                        3 => "URL",
                    ),
                    "SEND_AJAX" => "Y",
                    "SHOW_MODAL" => "Y",
                    "TITLE_SHOW_MODAL" => "Ваше сообщение отправлено.",
                    "USE_BOOTSRAP_CSS" => "N",
                    "USE_BOOTSRAP_JS" => "N",
                    "USE_CAPTCHA" => "N",
                    "USE_FORMVALIDATION_JS" => "Y",
                    "USE_IBLOCK_WRITE" => "N",
                    "USE_JQUERY" => "N",
                    "USE_MODULE_VARNING" => "N",
                    "WIDTH_FORM" => "",
                    "_CALLBACKS" => "",
                    "CATEGORY_TITLE_VALIDATION_MESSAGE" => "Обязательное поле",
                    "CATEGORY_PHONE_VALIDATION_MESSAGE" => "Обязательное поле",
                    "CATEGORY_URL_VALIDATION_MESSAGE" => "Обязательное поле"
                ),
                false
            ); ?>
            <div class="animate-field hidden-md-down">
                <div class="el-line-big">
                    <div class="el-line-big__ball"><span class="lazy-img-wrap"> <img class="lazy"
                                                                                     src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mP8z8BQDwAEhQGAhKmMIQAAAABJRU5ErkJggg=="
                                                                                     data-src="<?= SITE_TEMPLATE_PATH ?>/images/method-ico-1.png"
                                                                                     alt="ball"></span></div>
                </div>
                <div class="els">
                    <div class="el"></div>
                    <div class="el"></div>
                    <div class="el"></div>
                    <div class="el"></div>
                    <div class="el"></div>
                    <div class="el"></div>
                    <div class="el"></div>
                    <div class="el"></div>
                </div>
            </div>
        </div>
    </div>
    <!--Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/components-template/wide-triple-block/style.css");-->
    <div class="wide-triple-block" id="speed">
        <div class="container">
            <h2 class="wide-triple-block__title">На&nbsp;что влияет скорость?</h2>

            <div class="wide-triple-block__text">Высокая скорость работы&nbsp;&mdash; это не&nbsp;просто требование
                ваших пользователей, это технологическая необходимость.
            </div>
            <div class="triple-block">
                <div class="triple-block__item">
                    <div class="tb-icon">
                        <div class="lazy-img-wrap"><span class="lazy-img"
                                                         data-bg="url(<?= SITE_TEMPLATE_PATH ?>/images/ic-effect.svg), linear-gradient(transparent, transparent)"></span>
                        </div>
                    </div>
                    <div class="tb-head">Эффективность рекламы</div>
                    <div class="tb-body">Переходя на&nbsp;ваш медленный сайт, пользователи могут быстро закрыть его. Как
                        следствие&nbsp;&mdash; вы&nbsp;просто сливаете свои рекламные бюджеты
                    </div>
                </div>
                <div class="triple-block__item">
                    <div class="tb-icon">
                        <div class="lazy-img-wrap"><span class="lazy-img"
                                                         data-bg="url(<?= SITE_TEMPLATE_PATH ?>/images/ic-deep.svg), linear-gradient(transparent, transparent)"></span>
                        </div>
                    </div>
                    <div class="tb-head">Глубина просмотра</div>
                    <div class="tb-body">Вероятность продажи на&nbsp;вашем сайте напрямую зависит от&nbsp;количества
                        просмотренных страниц и&nbsp;качества проведенного времени на&nbsp;сайте
                    </div>
                </div>
                <div class="triple-block__item">
                    <div class="tb-icon">
                        <div class="lazy-img-wrap"><span class="lazy-img"
                                                         data-bg="url(<?= SITE_TEMPLATE_PATH ?>/images/ic-index.svg), linear-gradient(transparent, transparent)"></span>
                        </div>
                    </div>
                    <div class="tb-head">Индексация сайта</div>
                    <div class="tb-body">И&nbsp;Google, и&nbsp;Яндекс постоянно заявляют, что сегодня скорость работы
                        особенно в&nbsp;мобильной выдаче напрямую влияют на&nbsp;ваши позиции в&nbsp;ранжировании.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/components-template/promo-block/style.css");-->
    <!--Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/components-template/promo-block2/style.css");-->
    <!--Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/components-template/animation/style.css");-->
    <!--Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/components-template/animation/script.min.js");-->
    <div class="promo-block2-wrap full-wrap" id="our-methods">
        <div class="promo-block2-wrap__bg">
            <div class="lazy-img-wrap">
                <span class="lazy-img"
                      data-bg="url(<?= SITE_TEMPLATE_PATH ?>/images/speed-bg.jpg), linear-gradient(transparent, transparent)"></span>
            </div>
        </div>
        <div class="container">
            <div class="parallax">
                <div class="promo-block2">
                    <h2 class="promo-block2__title">Как мы&nbsp;добиваемся таких результатов?</h2>

                    <div class="promo-block2__sub-title">Высокие показатели по&nbsp;скорости не&nbsp;могут быть
                        достигнуты только качественных кодом или мощным сервером. <br> Оптимизация сайта&nbsp;&mdash;
                        это совокупность всех факторов веб-разработки, недоработка любого из&nbsp;них обязательно
                        приведет к&nbsp;замедлению работы сайта
                    </div>
                    <div class="promo-block2__body">
                        <div class="box-plate">
                            <div class="box-plate__item">
                                <div class="title">Технологичная верстка</div>
                                <div class="descr">Мы&nbsp;используем собственный сборщик, отложенную подгрузку скрытых
                                    блоков, сжатие всех элементов и&nbsp;много другое. Наша верстка всегда адаптивная и&nbsp;имеет
                                    высокий отклик взаимодействия. Каждый блок нашего демо-сайта сверстан с&nbsp;учетом
                                    скорости загрузки.
                                </div>
                            </div>
                            <div class="box-plate__item">
                                <div class="title">Правильный код</div>
                                <div class="descr">Мы&nbsp;являемся экспертами в&nbsp;1С-Битрикс с&nbsp;опытом
                                    разработки сложных высоконагруженных проектов. Мы&nbsp;всегда проходим монитор
                                    качества и&nbsp;делаем код-ревью по&nbsp;внутренним чек-листам. Любой наш проект
                                    сделан без кастомизации ядра Битрикс.
                                </div>
                            </div>
                            <div class="box-plate__item">
                                <div class="title">Оптимизация изображений</div>
                                <div class="descr">Помимо стандартных Битрикс-инструментов мы&nbsp;используем
                                    собственный модуль сжатия изображений с&nbsp;конвертацией их&nbsp;в&nbsp;легкий
                                    webp-формат. Изображения товаров в&nbsp;хорошем качестве весят всего по&nbsp;5-10&nbsp;килобайт.
                                </div>
                            </div>
                            <div class="box-plate__item">
                                <div class="title">Подключение&nbsp;др. сервисов</div>
                                <div class="descr">Несмотря на&nbsp;заявляемую &laquo;асинхронность&raquo; загрузки, все
                                    внешние чаты, колл-трекеры, пиксели и&nbsp;метрики сильно влияют на&nbsp;скорость
                                    загрузки. Мы&nbsp;умеем решать такие задачи, используя разные варианты подгрузки
                                    внешних сервисов в&nbsp;обход.
                                </div>
                            </div>
                            <div class="box-plate__item">
                                <div class="title">Оптимизация запросов</div>
                                <div class="descr">Неверная архитектура проекта, игнорирование кеша, использование
                                    штатных инфоблоков или неверное их&nbsp;подключение создают большую нагрузку на&nbsp;БД
                                    сайта. Мы&nbsp;уверенно оптимизируем запросы и&nbsp;время на&nbsp;их&nbsp;отработку.
                                </div>
                            </div>
                            <div class="box-plate__item">
                                <div class="title">Настроенный сервер</div>
                                <div class="descr">Мы&nbsp;сотрудничаем с&nbsp;ведущими хостинг-провайдерами и&nbsp;постоянно
                                    меряем мощности хостингов именно под Битрикс. Кроме того, мы&nbsp;имеем в&nbsp;штате
                                    своего серверного администратора с&nbsp;битрикс-сертификатом &laquo;Системное
                                    администрирование&raquo;.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="animate-field hidden-md-down">
                        <div class="el"></div>
                        <div class="el"></div>
                        <div class="el"></div>
                        <div class="el"></div>
                        <div class="el"></div>
                        <div class="el"></div>
                        <div class="el"></div>
                        <div class="el"></div>
                        <div class="el"></div>
                        <div class="el"></div>
                        <div class="el"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/components-template/form2-block/style.css");-->
    <div class="form2-block">
        <div class="container">
            <h2 class="form2-block__title">Хотите разогнать свой сайт или создать новый?</h2>

            <div class="row">
                <div class="col-lg-7 col-md-12">
                    <!--Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/components-template/youtube/script.min.js");-->
                    <!--Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/components-template/youtube/style.css");-->
                    <div class="video-card" data-target="#videoPlay">
                        <div class="video-card__img">
                                    <span class="lazy-img-wrap">
                                        <img class="lazy-img"
                                             src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mP8z8BQDwAEhQGAhKmMIQAAAABJRU5ErkJggg=="
                                             data-src="./local/templates/html/images/youtube.jpg" alt="img">
                                    </span>
                            <figure>
                                <div class="youtube js-page-video" data-embed="9k64HGiMm5U">
                                    <div class="play-button">
                                        <div class="play-button__icon"></div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    <p>Посмотрите, как один из&nbsp;наших сайтов domotehnika.by загружается быстрее конкурентов почти в&nbsp;10&nbsp;раз.
                        Такой&nbsp;же результат и&nbsp;на&nbsp;мобильной выдаче.</p>
                </div>
                <div class="col-lg-5 col-md-12">
                    <? $APPLICATION->IncludeComponent(
                        "slam:easyform",
                        "form_botton",
                        array(
                            "CATEGORY_EMAIL_PLACEHOLDER" => "E-mail",
                            "CATEGORY_EMAIL_TITLE" => "E-mail",
                            "CATEGORY_EMAIL_TYPE" => "email",
                            "CATEGORY_EMAIL_VALIDATION_ADDITIONALLY_MESSAGE" => "data-bv-emailaddress-message=\"E-mail введен некорректно\"",
                            "CATEGORY_EMAIL_VALIDATION_MESSAGE" => "Обязательное поле",
                            "CATEGORY_EMAIL_VALUE" => "",
                            "CATEGORY_MESSAGE_PLACEHOLDER" => "",
                            "CATEGORY_MESSAGE_TITLE" => "Сообщение",
                            "CATEGORY_MESSAGE_TYPE" => "textarea",
                            "CATEGORY_MESSAGE_VALIDATION_ADDITIONALLY_MESSAGE" => "",
                            "CATEGORY_MESSAGE_VALUE" => "",
                            "CATEGORY_PHONE_INPUTMASK" => "Y",
                            "CATEGORY_PHONE_INPUTMASK_TEMP" => "",
                            "CATEGORY_PHONE_PLACEHOLDER" => "№ телефона",
                            "CATEGORY_PHONE_TITLE" => "№ телефона",
                            "CATEGORY_PHONE_TYPE" => "text",
                            "CATEGORY_PHONE_VALIDATION_ADDITIONALLY_MESSAGE" => "data-bv-regexp=\"true\" data-bv-regexp-regexp=\"^[ \\-\\+\\(\\)0-9]+\$\" data-bv-regexp-message=\"Телефон введен некорректно\"",
                            "CATEGORY_PHONE_VALUE" => "",
                            "CATEGORY_TITLE_PLACEHOLDER" => "Имя",
                            "CATEGORY_TITLE_TITLE" => "Имя",
                            "CATEGORY_TITLE_TYPE" => "text",
                            "CATEGORY_TITLE_VALIDATION_ADDITIONALLY_MESSAGE" => "",
                            "CATEGORY_TITLE_VALUE" => "",
                            "CATEGORY_URL_PLACEHOLDER" => "Адрес сайта",
                            "CATEGORY_URL_TITLE" => "Адрес сайта",
                            "CATEGORY_URL_TYPE" => "text",
                            "CATEGORY_URL_VALIDATION_ADDITIONALLY_MESSAGE" => "",
                            "CATEGORY_URL_VALUE" => "",
                            "COMPONENT_TEMPLATE" => "form_botton",
                            "CREATE_SEND_MAIL" => "",
                            "DISPLAY_FIELDS" => array(
                                0 => "TITLE",
                                1 => "EMAIL",
                                2 => "PHONE",
                                3 => "URL",
                                4 => "",
                            ),
                            "EMAIL_BCC" => "",
                            "EMAIL_FILE" => "N",
                            "EMAIL_SEND_FROM" => "N",
                            "EMAIL_TO" => "",
                            "ENABLE_SEND_MAIL" => "Y",
                            "ERROR_TEXT" => "Произошла ошибка. Сообщение не отправлено.",
                            "EVENT_MESSAGE_ID" => array(
                                0 => "358",
                            ),
                            "FIELDS_ORDER" => "TITLE,EMAIL,PHONE,URL",
                            "FORM_AUTOCOMPLETE" => "Y",
                            "FORM_ID" => "FORM_BOTTOM",
                            "FORM_NAME" => "Форма обратной связи 2",
                            "FORM_SUBMIT_VALUE" => "Отправить",
                            "FORM_SUBMIT_VARNING" => "",
                            "HIDE_ASTERISK" => "Y",
                            "HIDE_FIELD_NAME" => "N",
                            "HIDE_FORMVALIDATION_TEXT" => "N",
                            "INCLUDE_BOOTSRAP_JS" => "N",
                            "MAIL_SUBJECT_ADMIN" => "#SITE_NAME#: Сообщение из формы обратной связи",
                            "OK_TEXT" => "Мы&nbsp;свяжемся с&nbsp;вами в&nbsp;течение 2х&nbsp;часов.",
                            "REQUIRED_FIELDS" => array(
                                0 => "TITLE",
                                1 => "EMAIL",
                                2 => "PHONE",
                                3 => "URL",
                            ),
                            "SEND_AJAX" => "Y",
                            "SHOW_MODAL" => "Y",
                            "TITLE_SHOW_MODAL" => "Ваше сообщение отправлено.",
                            "USE_BOOTSRAP_CSS" => "N",
                            "USE_BOOTSRAP_JS" => "N",
                            "USE_CAPTCHA" => "N",
                            "USE_FORMVALIDATION_JS" => "Y",
                            "USE_IBLOCK_WRITE" => "N",
                            "USE_JQUERY" => "N",
                            "USE_MODULE_VARNING" => "N",
                            "WIDTH_FORM" => "",
                            "_CALLBACKS" => "",
                            "CATEGORY_TITLE_VALIDATION_MESSAGE" => "Обязательное поле",
                            "CATEGORY_PHONE_VALIDATION_MESSAGE" => "Обязательное поле",
                            "CATEGORY_URL_VALIDATION_MESSAGE" => "Обязательное поле",
                            "USE_INPUTMASK_JS" => "Y"
                        ),
                        false
                    ); ?>
                </div>
            </div>
        </div>
    </div>



<? require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'); ?>