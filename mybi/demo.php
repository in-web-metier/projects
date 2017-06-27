<!DOCTYPE html>
<html manifest="cache.appcache">

<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TN4CG9X');</script>
    <!-- End Google Tag Manager -->

    <?php include "blocks/head.php"; ?>
    <meta name="robots" content="all">
    <?php include "blocks/meta.php"; ?>
    <title>myBI — бизнес-аналитика и визуализация данных</title>
    <?php include "blocks/css.php"; ?>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-60139107-2', 'auto');
        ga('require', 'mybi');

        ga(function(tracker) {
            function guid() {
                function s4() {
                    return Math.floor((1 + Math.random()) * 0x10000).toString(16).substring(1);
                }

                result = '';

                for(i=0; i<8; i++)
                    result += s4();

                return result;
            }

            ga('set', 'dimension1', tracker.get('clientId'));
            ga('set', 'dimension4', guid());

            ga('send', 'pageview');
        });
    </script>
    <script src="js/mybi.js"></script>
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TN4CG9X"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<section class="offer demo">
    <div class="header">
        <div class="container">
            <div class="leftblock cols">
                <a href="/"><img src="img/logo.png" width="75"></a>
                <div class="line"></div>
                <p class="small">бизнес-аналитика и визуализация данных</p>
            </div>
            <div class="cols" data-scrollreveal="move 0px 3s after 1.1s">
                <p class="phone">8 495 066 26 15</p>
                <div class="vertline"></div>
                <p><a href="#callpopup" class="bluelink fancybox" onclick="ga('send', 'event', 'Button', 'Перезвоните мне, верх страницы');">Перезвоните мне</a></p>
                <p style="padding-left: 24px;"><a href="#nav1" class="bluelink nav" onclick="ga('send', 'event', 'Button', 'Попробовать демо');">Демо отчеты</a></p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="content">
            <h1>Демонстрационные отчеты MyBI</h1>
        </div>
    </div>
</section>

<section class="business demo">
    <div class="container demo">

        <ul class="nav cols">
        <li class="two-col one active" id="nav1" onclick="ga('send', 'event', 'Button', 'Бизнес-аналитика слайд Маркетинг');"><p>Маркетинг</p><div></div></li>
            <li class="two-col two" id="nav2" onclick="ga('send', 'event', 'Button', 'Бизнес-аналитика слайд Клиенты');"><p>Клиенты</p><div></div></li>

            <li class="two-col three" id="nav3" onclick="ga('send', 'event', 'Button', 'Бизнес-аналитика слайд Продажи');"><p>Продажи</p><div></div></li>
            <li class="two-col four" id="nav4" onclick="ga('send', 'event', 'Button', 'Бизнес-аналитика слайд Финансы');"><p>Финансы</p><div></div></li>

            <li class="two-col six" id="nav5" onclick="ga('send', 'event', 'Button', 'Бизнес-аналитика слайд Прочее');"><p>Прочее</p><div></div></li>
            <div class="adaptivegradient"></div>
        </ul>

        <div class="slider-container">
            <div class="arrows">
                <div class="prev" onclick="ga('send', 'event', 'Button', 'Бизнес-аналитика Предыдущий слайд');"></div>
                <div class="next active" onclick="ga('send', 'event', 'Button', 'Бизнес-аналитика Следующий слайд');"></div>
            </div>
            <div class="slider ten-col">
                <div class="wrapper">
                    <div class="slide slide-first-monitor slide-monitor">
                        <div class="slide-demo">
                            <div class="slide-demo_top">
                                <div class="slide-demo_top-left">
                                    <div class="demo-report">
                                        REPORTS FRAME
                                    </div>
                                </div>
                                <div class="slide-demo_top-right">
                                    <span class="demo-report_title">Видео обзор отчета</span>
                                    <div class="demo-report_video">VIDEO</div>
                                    <span class="demo-report_desc">
                                        Описание описание описание описание описание Описание описание описание описание описание описание описание описание описание описание Описание описание описание описание описание
                                    </span>
                                </div>
                            </div>
                            <div class="slide-demo_bottom">
                                <span class="slide-demo_bottom-desc">
                                    Приведенные выше отчеты реализованы на PowerBI и являются лишь примерами того, как можно организовать отчетность для своих задач.
                                </span>
                                <div class="report_discuss">
                                    <span>Вам нужна отчетность?</span>
                                    <a href="#projectpopup" class="button fancybox" onclick="ga('send', 'event', 'Button', '5 шагов, кнопка Обсудить проект');">Обсудить проект</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide slide-second-monitor slide-monitor">
                        <div class="slide-demo">
                            <div class="slide-demo_top">
                                <div class="slide-demo_top-left">
                                    <div class="demo-report">
                                        REPORTS FRAME
                                    </div>
                                </div>
                                <div class="slide-demo_top-right">
                                    <span class="demo-report_title">Видео обзор отчета</span>
                                    <div class="demo-report_video">VIDEO</div>
                                    <span class="demo-report_desc">
                                        Описание описание описание описание описание Описание описание описание описание описание описание описание описание описание описание Описание описание описание описание описание
                                    </span>
                                </div>
                            </div>
                            <div class="slide-demo_bottom">
                                <span class="slide-demo_bottom-desc">
                                    Приведенные выше отчеты реализованы на PowerBI и являются лишь примерами того, как можно организовать отчетность для своих задач.
                                </span>
                                <div class="report_discuss">
                                    <span>Вам нужна отчетность?</span>
                                    <a href="#projectpopup" class="button fancybox" onclick="ga('send', 'event', 'Button', '5 шагов, кнопка Обсудить проект');">Обсудить проект</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="slide slide-three-monitor slide-monitor">
                        <div class="slide-demo">
                            <div class="slide-demo_top">
                                <div class="slide-demo_top-left">
                                    <div class="demo-report">
                                        REPORTS FRAME
                                    </div>
                                </div>
                                <div class="slide-demo_top-right">
                                    <span class="demo-report_title">Видео обзор отчета</span>
                                    <div class="demo-report_video">VIDEO</div>
                                    <span class="demo-report_desc">
                                        Описание описание описание описание описание Описание описание описание описание описание описание описание описание описание описание Описание описание описание описание описание
                                    </span>
                                </div>
                            </div>
                            <div class="slide-demo_bottom">
                                <span class="slide-demo_bottom-desc">
                                    Приведенные выше отчеты реализованы на PowerBI и являются лишь примерами того, как можно организовать отчетность для своих задач.
                                </span>
                                <div class="report_discuss">
                                    <span>Вам нужна отчетность?</span>
                                    <a href="#projectpopup" class="button fancybox" onclick="ga('send', 'event', 'Button', '5 шагов, кнопка Обсудить проект');">Обсудить проект</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide slide-four-monitor slide-monitor">
                        <div class="slide-demo">
                            <div class="slide-demo_top">
                                <div class="slide-demo_top-left">
                                    <div class="demo-report">
                                        REPORTS FRAME
                                    </div>
                                </div>
                                <div class="slide-demo_top-right">
                                    <span class="demo-report_title">Видео обзор отчета</span>
                                    <div class="demo-report_video">VIDEO</div>
                                    <span class="demo-report_desc">
                                        Описание описание описание описание описание Описание описание описание описание описание описание описание описание описание описание Описание описание описание описание описание
                                    </span>
                                </div>
                            </div>
                            <div class="slide-demo_bottom">
                                <span class="slide-demo_bottom-desc">
                                    Приведенные выше отчеты реализованы на PowerBI и являются лишь примерами того, как можно организовать отчетность для своих задач.
                                </span>
                                <div class="report_discuss">
                                    <span>Вам нужна отчетность?</span>
                                    <a href="#projectpopup" class="button fancybox" onclick="ga('send', 'event', 'Button', '5 шагов, кнопка Обсудить проект');">Обсудить проект</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="slide slide-five-monitor slide-monitor">
                        <div class="slide-demo">
                            <div class="slide-demo_top">
                                <div class="slide-demo_top-left">
                                    <div class="demo-report">
                                        REPORTS FRAME
                                    </div>
                                </div>
                                <div class="slide-demo_top-right">
                                    <span class="demo-report_title">Видео обзор отчета</span>
                                    <div class="demo-report_video">VIDEO</div>
                                    <span class="demo-report_desc">
                                        Описание описание описание описание описание Описание описание описание описание описание описание описание описание описание описание Описание описание описание описание описание
                                    </span>
                                </div>
                            </div>
                            <div class="slide-demo_bottom">
                                <span class="slide-demo_bottom-desc">
                                    Приведенные выше отчеты реализованы на PowerBI и являются лишь примерами того, как можно организовать отчетность для своих задач.
                                </span>
                                <div class="report_discuss">
                                    <span>Вам нужна отчетность?</span>
                                    <a href="#projectpopup" class="button fancybox" onclick="ga('send', 'event', 'Button', 'Форма Обсуждение проекта, кнопка отправки');">Обсудить проект</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dotsnav dotsnav2">
                <img src="img/leftarr.png" width="63" id="dleftarr" onclick="ga('send', 'event', 'Button', 'Бизнес-аналитика, навигация снизу, Предыдущий слайд');"/>
                <div class="dot active" id="ddot1" onclick="ga('send', 'event', 'Button', 'Бизнес-аналитика, навигация снизу, слайд Маркетинг');"></div>
                <div class="dot" id="ddot2" onclick="ga('send', 'event', 'Button', 'Бизнес-аналитика, навигация снизу, слайд Клиенты');"></div>
                <div class="dot" id="ddot3" onclick="ga('send', 'event', 'Button', 'Бизнес-аналитика, навигация снизу, слайд Продажи');"></div>
                <div class="dot" id="ddot4" onclick="ga('send', 'event', 'Button', 'Бизнес-аналитика, навигация снизу, слайд Финансы');"></div>

                <div class="dot" id="ddot5" onclick="ga('send', 'event', 'Button', 'Бизнес-аналитика, навигация снизу, слайд Прочее');"></div>
                <img src="img/rightarr.png" width="60" id="drightarr" onclick="ga('send', 'event', 'Button', 'Бизнес-аналитика, навигация снизу, Следующий слайд');"/>
            </div>
        </div>

    </div>
</section>


<!-- ////////////////////// !-->
<?php include "blocks/forms.php"; ?>
<?php include "blocks/scripts.php"; ?>
</body>
</html>
