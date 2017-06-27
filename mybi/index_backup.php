<!DOCTYPE html>
<html manifest="cache.appcache">

<head>
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
            ga('set', 'dimension1', tracker.get('clientId'));
            ga('send', 'pageview');
        });
    </script>
    <script src="js/mybi.js"></script>

    <script type="text/javascript">(window.Image ? (new Image()) :
    document.createElement('img')).src = location.protocol +
    '//vk.com/rtrg?r=P9feGiGhTm2uSvO0SVGjmwW0k1zrCmKDEX7vEgGwc*M1eCrhFTAyRel5t5hxo*mmnWp6zcdZgHhBGK8XKwYolg8nT2FeZGFPiLFi9obBd/WjEBgDhMdJxT5aF6W9hLUM5alxDBn7U*4oSABzdmOwhs8wG5tbhyAP7JksjxMha64-&pixel_id=1000093796';</script>

    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
    n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
    document,'script','https://connect.facebook.net/en_US/fbevents.js');

    fbq('init', '140985023096096'); // Insert your pixel ID here.
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=140985023096096&ev=PageView&noscript=1"
    /></noscript>
    <!-- DO NOT MODIFY -->
    <!-- End Facebook Pixel Code -->
</head>

<body>
<?php include "blocks/metrika.php"; ?>

<section class="offer">
    <div class="header">
        <div class="container">
            <div class="leftblock cols">
                <a href="/"><img src="/img/logo.png" width="75"></a>
                <div class="line"></div>
                <p class="small">бизнес-аналитика и визуализация данных</p>
            </div>
            <div class="cols" data-scrollreveal="move 0px 3s after 1.1s">
                <p class="phone">8 495 066 26 15</p>
                <div class="vertline"></div>
                <p><a href="#callpopup" class="bluelink fancybox" onclick="ga('send', 'event', 'Button', 'Перезвоните мне, верх страницы');">Перезвоните мне</a></p>
                <p style="padding-left: 24px;"><a href="/study/" class="bluelink fancybox">Мастер-класс</a></p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="content">
            <h1>Автоматизация<br/> управленческой<br/> отчетности</h1>
            <p class="big htext">Внедрим простую и эффективную<br/> систему поддержки решений<br/> в бизнесе<br/> на базе MS PowerBI</p>
            <div class="squaretext">
                <h2>За 30 мин<br/> покажем</h2>
                <p>систему<br/> в действии<br/> и ответим на<br/> вопросы</p>
            </div>
            <div class="video">
                <h2>Бесплатный вебинар<br/> 4 апреля</h2>
                <a href="#webinarpopup" class="button fancybox" onclick="ga('send', 'event', 'Button', 'Регистрация на вебинар');">Регистрация</a>
            </div>
            <!--<a href="https://www.youtube.com/watch?v=RzH71cNmaXc" class="video fancyvideo" onclick="ga('send', 'event', 'Button', 'Просмотр видео');"><img src="img/play.png" width="85"></a>!-->
        </div>
    </div>

    <div class="bg"></div>
</section>

<section class="master-class" id="master-class">
    <div class="container">
        <h2>17 марта мастер-класс Power BI Быстрый старт!</h2>
        <div class="butblock" style="margin-top: 50px;"><a class="button" href="/study/">Узнать больше</a></div>
    </div>
</section>

<!-- ////////////////////// !-->

<section class="automate" id="automate">
    <div class="container">
        <div class="slide1 active">
            <div class="content six-col">
                <h1>Управляйте<br/> бизнесом<br/> на основе данных</h1>
                <p class="big htext">Сравнивайте фактические значения<br/> с плановыми и принимайте решения,<br/> основанные на цифрах.<br/><br/><span class="hiddenbr"></span>Ключевые показатели эффективности<br/> Вашего бизнеса выведены в удобные<br/> панели мониторинга и доступны<br/> с любого устройства.</p>
                <div class="butblock"><a class="button nav" href="#automate" id="trybutton" onclick="ga('send', 'event', 'Button', 'Попробовать демо');">Попробовать</a><div class="line"></div></div>
            </div>
        </div>
        <div class="slide2">
            <h1>Демо вход в систему</h1>
            <p class="big htext">Вам необходимо оставить свои данные, перед тем как<br/> протестировать систему</p>
            <form class="cols hiddensend" method="post" action="send.php">
                <div class="two-col"></div>
                <div class="four-col">
                    <p class="label">Ваше имя</p>
                    <input placeholder="Сорокин Александр" type="name" name="name" title="ваше имя"/>
                </div>
                <div class="four-col">
                    <p class="label">E-mail</p>
                    <input placeholder="mailname@mail.com" type="email" name="email" title="e-mail"/>
                </div>
                <div class="two-col"></div>
                <div class="buttonblock">
                    <a class="button empty cancel" onclick="ga('send', 'event', 'Button', 'Отмена демо');">Отмена</a>
                    <a class="button" id="demoenter" onclick="ga('send', 'event', 'Button', 'Вход в демо');">Вход</a>
                </div>
                <input type="hidden" name="form_name" value="Вход в демо">
            </form>
        </div>
    </div>
    <div class="mac-container"><img src="img/macphone.png" class="slide1 active"></div>
    <div class="slide3">
        <div class="button" id="closedemo" onclick="ga('send', 'event', 'Button', 'Закрыть демо');">
            <p>Закрыть</p>
            <img src="img/consultclose.png" width="15">
        </div>
        <iframe src=""></iframe>
    </div>
</section>

<!-- ////////////////////// !-->

<section class="skvoz">
    <div class="container">
        <h1>Сквозная аналитика</h1>
        <p class="big htext">Данные из разных систем связаны друг с другом<br/> и находятся в едином пространстве </p>
        <div>
            <div class="ipad">
                <img src="img/items.png" width="512">
                <div>
                    <div><img src="img/ipad2.png" width="649"></div>
                    <div><img src="img/ipad3.png" width="649"></div>
                </div>
            </div>
            <div class="squaretext">
                <h2>Отчет за<br/> миллисекунды</h2>
                <p>Забудьте про десятки<br/> отчетов и таблицы Excel.<br/> Формируйте нужные<br/> отчеты за миллисекунды.</p>
            </div>
        </div>
        <hr/>
    </div>
</section>

<!-- ////////////////////// !-->

<section class="analyticblocks">
    <div class="container">
        <div class="cols">
            <div class="animation"><img src="img/animation.gif"></div>
            <div class="five-col">
                <h2 class="marginh">Аналитика<br/> без аналитиков</h2>
                <p>Интуитивно понятный интерфейс позволит<br/> Вам самостоятельно исследовать данные<br/> в произвольных направлениях, не прибегая<br/> к помощи IT и аналитиков.</p>
            </div>
        </div>
        <div class="cols right">
            <div><img src="img/iphone.png"></div>
            <div class="five-col">
                <h2>Интеллектуальная<br/> система мониторинга</h2>
                <p>Высокая конкуренция требует моментальной<br/> реакции на изменение показателей.<br/> Робот-помощник мгновенно уведомит Вас<br/> об изменениях на почту или смартфон,<br/> если что-то пошло не так.</p>
            </div>
        </div>
    </div>
</section>

<!-- ////////////////////// !-->
<div class="popupiframe">
    <div class="button closedemo" onclick="ga('send', 'event', 'Button', 'Закрыть демо в слайдере');">
        <p>Закрыть</p>
        <img src="img/consultclose.png" width="15">
    </div>
    <iframe src=""></iframe>
</div>

<section class="business">
    <div class="container">
        <h1>Бизнес-аналитика<br/> для всех</h1>
        <p class="big htext">Мы решаем любые задачи по сбору<br/> и представлению бизнес-данных</p>

        <ul class="nav cols">
            <li class="two-col one active" id="nav1" onclick="ga('send', 'event', 'Button', 'Бизнес-аналитика слайд Финансы');"><p>Финансы</p><div></div></li>
            <li class="two-col two" id="nav2" onclick="ga('send', 'event', 'Button', 'Бизнес-аналитика слайд Маркетинг');"><p>Маркетинг</p><div></div></li>
            <li class="two-col three" id="nav3" onclick="ga('send', 'event', 'Button', 'Бизнес-аналитика слайд Продажи');"><p>Продажи</p><div></div></li>
            <li class="two-col four" id="nav4" onclick="ga('send', 'event', 'Button', 'Бизнес-аналитика слайд Кадры');"><p>Клиенты</p><div></div></li>
            <li class="two-col five" id="nav5" onclick="ga('send', 'event', 'Button', 'Бизнес-аналитика слайд Производство');"><p>Производство</p><div></div></li>
            <li class="two-col six" id="nav6" onclick="ga('send', 'event', 'Button', 'Бизнес-аналитика слайд Прочее');"><p>Прочее</p><div></div></li>
            <div class="adaptivegradient"></div>
        </ul>

        <div class="slider-container">
            <div class="arrows">
                <div class="prev" onclick="ga('send', 'event', 'Button', 'Бизнес-аналитика Предыдущий слайд');"></div>
                <div class="next active" onclick="ga('send', 'event', 'Button', 'Бизнес-аналитика Следующий слайд');"></div>
            </div>
            <div class="slider ten-col">
                <div class="wrapper">
                    <div class="slide">
                        <div class="content six-col">
                            <div class="slidecontent">
                                <h2>Финансы</h2>
                                <p>Консолидируем финансовую отчетность любого количества компаний холдинга. Баланс, P&L, Cash-Flow и план-факт анализ в реальном времени и максимально понятных формах.</p>
                                <a class="button showsliderdemoenter">Посмотреть пример</a>
                            </div>
                            <div class="slider-demo-enter">
                                <h2>Демо вход в систему</h2>
                                <p class="big htext">Вам необходимо оставить свои данные, перед тем как протестировать систему</p>
                                <form class="cols hiddensend demoform" method="post" action="send.php">
                                    <div class="three-col">
                                        <p class="label">Ваше имя</p>
                                        <input placeholder="Сорокин Александр" type="name" name="name" title="ваше имя"/>
                                    </div>
                                    <div class="three-col">
                                        <p class="label">E-mail</p>
                                        <input placeholder="mailname@mail.com" type="email" name="email" title="e-mail"/>
                                    </div>
                                    <div class="buttonblock">
                                        <a class="button empty cancel" onclick="ga('send', 'event', 'Button', 'Отмена демо');">Отмена</a>
                                        <a href="https://app.powerbi.com/view?r=eyJrIjoiMWU4Y2I3ZmMtODNhNy00NmYwLWIyYzMtYmJjMDkwNjAyZDFhIiwidCI6IjA1YjY1OTU3LTM5NTktNDgwMC04ODhkLWViZjJkYmQ3YzMwMiIsImMiOjl9" class="button" id="demoenter2" onclick="ga('send', 'event', 'Button', 'Вход в демо');">Вход</a>
                                    </div>
                                    <input type="hidden" name="form_name" value="Вход в демо">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="content six-col">
                            <div class="slidecontent">
                                <h2>Маркетинг</h2>
                                <p>Создадим омниканальную воронку для анализа всех маркетинговых активностей. Отслеживание онлайн и офлайн рекламы от каждого вложенного рубля до рентабельности и LTV. </p>
                                <a class="button showsliderdemoenter">Посмотреть пример</a>
                            </div>
                            <div class="slider-demo-enter">
                                <h2>Демо вход в систему</h2>
                                <p class="big htext">Вам необходимо оставить свои данные, перед тем как протестировать систему</p>
                                <form class="cols hiddensend demoform" method="post" action="send.php">
                                    <div class="three-col">
                                        <p class="label">Ваше имя</p>
                                        <input placeholder="Сорокин Александр" type="name" name="name" title="ваше имя"/>
                                    </div>
                                    <div class="three-col">
                                        <p class="label">E-mail</p>
                                        <input placeholder="mailname@mail.com" type="email" name="email" title="e-mail"/>
                                    </div>
                                    <div class="buttonblock">
                                        <a class="button empty cancel" onclick="ga('send', 'event', 'Button', 'Отмена демо');">Отмена</a>
                                        <a href="https://app.powerbi.com/view?r=eyJrIjoiZTFkMDQ4NDYtNDIwMS00NzI3LTg1NWItNGMxZTJkZjNjNzJhIiwidCI6IjA1YjY1OTU3LTM5NTktNDgwMC04ODhkLWViZjJkYmQ3YzMwMiIsImMiOjl9" class="button" id="demoenter2" onclick="ga('send', 'event', 'Button', 'Вход в демо');">Вход</a>
                                    </div>
                                    <input type="hidden" name="form_name" value="Вход в демо">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="content six-col">
                            <div class="slidecontent">
                                <h2>Продажи</h2>
                                <p>Сделаем Ваши продажи прозрачными и управляемыми. Быстрый доступ к результатам в разрезе офисов, менеджеров, направлений, продуктов и источников клиентов. </p>
                                <a class="button showsliderdemoenter">Посмотреть пример</a>
                            </div>
                            <div class="slider-demo-enter">
                                <h2>Демо вход в систему</h2>
                                <p class="big htext">Вам необходимо оставить свои данные, перед тем как протестировать систему</p>
                                <form class="cols hiddensend demoform" method="post" action="send.php">
                                    <div class="three-col">
                                        <p class="label">Ваше имя</p>
                                        <input placeholder="Сорокин Александр" type="name" name="name" title="ваше имя"/>
                                    </div>
                                    <div class="three-col">
                                        <p class="label">E-mail</p>
                                        <input placeholder="mailname@mail.com" type="email" name="email" title="e-mail"/>
                                    </div>
                                    <div class="buttonblock">
                                        <a class="button empty cancel" onclick="ga('send', 'event', 'Button', 'Отмена демо');">Отмена</a>
                                        <a href="https://app.powerbi.com/view?r=eyJrIjoiNWViZDQ0N2YtNWNjYS00NGJmLThiNmItMzJhNTNlYWQ2Y2RiIiwidCI6IjA1YjY1OTU3LTM5NTktNDgwMC04ODhkLWViZjJkYmQ3YzMwMiIsImMiOjl9" class="button" id="demoenter2" onclick="ga('send', 'event', 'Button', 'Вход в демо');">Вход</a>
                                    </div>
                                    <input type="hidden" name="form_name" value="Вход в демо">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="content six-col">
                            <div class="slidecontent">
                                <h2>Клиенты</h2>
                                <p>Визуализируем структуру клиентской базы. Проведем когортный анализ и прогнозирование поведения клиентов. Подсчет цикла жизни и ценности клиентских групп. </p>
                                <a class="button showsliderdemoenter">Посмотреть пример</a>
                            </div>
                            <div class="slider-demo-enter">
                                <h2>Демо вход в систему</h2>
                                <p class="big htext">Вам необходимо оставить свои данные, перед тем как протестировать систему</p>
                                <form class="cols hiddensend demoform" method="post" action="send.php">
                                    <div class="three-col">
                                        <p class="label">Ваше имя</p>
                                        <input placeholder="Сорокин Александр" type="name" name="name" title="ваше имя"/>
                                    </div>
                                    <div class="three-col">
                                        <p class="label">E-mail</p>
                                        <input placeholder="mailname@mail.com" type="email" name="email" title="e-mail"/>
                                    </div>
                                    <div class="buttonblock">
                                        <a class="button empty cancel" onclick="ga('send', 'event', 'Button', 'Отмена демо');">Отмена</a>
                                        <a href="https://app.powerbi.com/view?r=eyJrIjoiMzJkY2YzZWItZDNmZi00MWM3LWFlMDMtNmIzODJhMmUwYWUzIiwidCI6IjA1YjY1OTU3LTM5NTktNDgwMC04ODhkLWViZjJkYmQ3YzMwMiIsImMiOjl9" class="button" id="demoenter2" onclick="ga('send', 'event', 'Button', 'Вход в демо');">Вход</a>
                                    </div>
                                    <input type="hidden" name="form_name" value="Вход в демо">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="content six-col">
                            <div class="slidecontent">
                                <h2>Производство</h2>
                                <p>Настроим простое отслеживание результатов производства, качества, себестоимости, оборота активов и загрузки персонала.</p>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="content six-col">
                            <div class="slidecontent">
                                <h2>Прочее</h2>
                                <p>Настроим сбор и визуализацию любых показателей Бизнеса для простого отслеживания, анализа и прогнозирования.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dotsnav dotsnav2">
                <img src="img/leftarr.png" width="63" id="dleftarr" onclick="ga('send', 'event', 'Button', 'Бизнес-аналитика, навигация снизу, Предыдущий слайд');"/>
                <div class="dot active" id="ddot1" onclick="ga('send', 'event', 'Button', 'Бизнес-аналитика, навигация снизу, слайд Финансы');"></div>
                <div class="dot" id="ddot2" onclick="ga('send', 'event', 'Button', 'Бизнес-аналитика, навигация снизу, слайд Маркетинг');"></div>
                <div class="dot" id="ddot3" onclick="ga('send', 'event', 'Button', 'Бизнес-аналитика, навигация снизу, слайд Продажи');"></div>
                <div class="dot" id="ddot4" onclick="ga('send', 'event', 'Button', 'Бизнес-аналитика, навигация снизу, слайд Кадры');"></div>
                <div class="dot" id="ddot5" onclick="ga('send', 'event', 'Button', 'Бизнес-аналитика, навигация снизу, слайд Производство');"></div>
                <div class="dot" id="ddot6" onclick="ga('send', 'event', 'Button', 'Бизнес-аналитика, навигация снизу, слайд Прочее');"></div>
                <img src="img/rightarr.png" width="60" id="drightarr" onclick="ga('send', 'event', 'Button', 'Бизнес-аналитика, навигация снизу, Следующий слайд');"/>
            </div>
        </div>

    </div>
</section>

<!-- ////////////////////// !-->
<div class="stepspadding">
    <div class="container"><h1>5 шагов<br/> к внедрению системы</h1></div>
</div>
<div class="stepscontainer">

<section class="steps">
    <div class="container">
        <h1>5 шагов<br/> к внедрению системы</h1>
        <div class="cols">
            <div class="two-col numbers">
                <div id="stepnav1" class="active" onclick="ga('send', 'event', 'Button', '5 шагов, шаг 1');"><p>01</p></div>
                <div id="stepnav2" onclick="ga('send', 'event', 'Button', '5 шагов, шаг 2');"><p>02</p></div>
                <div id="stepnav3" onclick="ga('send', 'event', 'Button', '5 шагов, шаг 3');"><p>03</p></div>
                <div id="stepnav4" onclick="ga('send', 'event', 'Button', '5 шагов, шаг 4');"><p>04</p></div>
                <div id="stepnav5" onclick="ga('send', 'event', 'Button', '5 шагов, шаг 5');"><p>05</p></div>
                <div class="adaptivegradient"></div>
            </div>
            <div class="five-col">
                <img src="img/step1.png" class="slide1img" width="262">
                <img src="img/step2.png" class="slide2img" width="282">
                <img src="img/step3.png" class="slide3img" width="262">
                <img src="img/step4.png" class="slide4img" width="262">
                <img src="img/step5.png" class="slide5img" width="262">
            </div>
            <div class="five-col slide slide1">
                <h2>Обсуждение проекта</h2>
                <p>Обсуждаем систему и ее применение в Вашей компании.</p>
                <p>Проводим интервью с заинтересованными лицами,<br/>проводим аудит данных Вашей компании, формируем<br/>требования и техническое задание.</p>
                <p>Определяем срок и стоимость проекта.</p>
                <a href="#projectpopup" class="button fancybox" onclick="ga('send', 'event', 'Button', '5 шагов, кнопка Обсудить проект');">Обсудить проект</a>
            </div>
            <div class="five-col slide slide2">
                <h2>Автоматизируем сбор<br/> данных из разных систем</h2>
                <p>Используем собственные коннекторы для подключения к любым источникам данных (1С, CRM, ERP, Google Analytics, Яндекс.Директ, Excel, Google Docs и.т.д.)</p>
                <p>Разворачиваем базу данных в облаке или на Вашем сервере, в которую собираем все нужные для текущего и будущего анализа данные.</p>
                <p>Настраиваем периодичность автоматического обновления данных.</p>
            </div>
            <div class="five-col slide slide3">
                <h2>Обработаем, объединим<br/> и проверим качество данных</h2>
                <p>Ключевая задача: выбрать поля по которым увязывать нескольких систем между собой. Таком образом выстраивается система сквозной аналитики.</p>
                <p>Помимо этого, мы выявляем и исправляем следующие ошибки в данных:</p>
                <p>Определяем срок и стоимость проекта.</p>
                <ul>
                    <li><p>Пропущенные поля</p></li>
                    <li><p>Пропущенные записи</p></li>
                    <li><p>Дубли записей</p></li>
                    <li><p>Соответствие области допустимых значений</p></li>
                    <li><p>И другие</p></li>
                </ul>
            </div>
            <div class="five-col slide slide4">
                <h2>Создадим интерактивные<br/> панели управления компанией</h2>
                <p>Ключевая задача: предоставить топ-менеджементу компании возможность моментально получать ответы на интересующие вопросы о деятельности компании, выраженные в цифрах, показателях, графиках и диаграммах.</p>
                <p>Все ключевые показатели эффективности деятельности компании будут доступны с любого устройства и в любой точке мира.</p>
            </div>
            <div class="five-col slide slide5">
                <h2>Осуществим обучение, техническую<br/> и аналитическую поддержку</h2>
                <p>Система позволяет исследовать данные самостоятельно и в произовльном направлении без помощи аналитика и IT. Выбирая показатели, срезы и типы визуализаций, вы за секунды получаете ответы на интересующие Вас вопросы.</p>
                <p>Гарантию работы системы обеспечивает SLA (Соглашение об уровне обслеживания).</p>
                <p>Мы также предлагаем профессиональную поддержку нашей аналитической службы, если в этом есть необходимость.</p>
            </div>
        </div>
        <div class="dotsnav">
                <img src="img/leftarr.png" width="63" id="leftarr" onclick="ga('send', 'event', 'Button', '5 шагов, навигация снизу, Предыдущий слайд');"/>
                <div class="dot active" id="dot1" onclick="ga('send', 'event', 'Button', '5 шагов, навигация снизу, шаг 1');"></div>
                <div class="dot" id="dot2" onclick="ga('send', 'event', 'Button', '5 шагов, навигация снизу, шаг 2');"></div>
                <div class="dot" id="dot3" onclick="ga('send', 'event', 'Button', '5 шагов, навигация снизу, шаг 3');"></div>
                <div class="dot" id="dot4" onclick="ga('send', 'event', 'Button', '5 шагов, навигация снизу, шаг 4');"></div>
                <div class="dot" id="dot5" onclick="ga('send', 'event', 'Button', '5 шагов, навигация снизу, шаг 5');"></div>
                <img src="img/rightarr.png" width="60" id="rightarr" onclick="ga('send', 'event', 'Button', '5 шагов, навигация снизу, Следующий слайд');"/>
            </div>
    </div>
</section>

<div class="stepsscrolling" id="stepsscroll1"></div>
<div class="stepsscrolling" id="stepsscroll2"></div>
<div class="stepsscrolling" id="stepsscroll3"></div>
<div class="stepsscrolling" id="stepsscroll4"></div>
<div class="stepsscrolling" id="stepsscroll5"></div>
<div class="stepsscrolling" id="stepsscroll6"></div>

</div>

<!-- ////////////////////// !-->

<section class="system">
    <div class="container">
        <h1>Техносистема Microsoft</h1>
        <p class="big htext">Система построена на технологиях Microsoft и собственных<br/> разработках. Для хранения и обработки данных используются<br/> технологии Microsoft SQL Server. Для визуализации<br/> данных - система Microsoft Power BI.</p>

        <div class="cols">
            <div>
                <div class="squaretext top">
                    <p><span>Облачные</span><br/> системы</p>
                    <div class="imgcont"><img src="img/1.svg"/></div>
                    <div class="arrow"><div class="arrow-circle"></div><div class="arrow-line"></div><div class="arrow-end"></div></div>
                </div>
                <div class="squaretext">
                    <p><span>Внутренние</span><br/> системы</p>
                    <div class="imgcont"><img src="img/2.svg"/></div>
                    <div class="arrow"><div class="arrow-circle"></div><div class="arrow-line"></div><div class="arrow-end"></div></div>
                </div>
            </div>
            <div>
                <div class="squaretext black">
                    <p>Azure</p>
                    <div class="imgcont"><img src="img/3.svg"/></div>
                    <div class="arrow"><div class="arrow-circle"></div><div class="arrow-line"></div><div class="arrow-end"></div></div>
                    <div class="arrow vertical"><div class="arrow-circle"></div><div class="arrow-line"></div><div class="arrow-end"></div></div>
                </div>
                <div class="squaretext">
                    <p><span>Power BI</span><br/> Desktop</p>
                    <div class="imgcont"><img src="img/4.svg"/></div>
                    <div class="arrow"><div class="arrow-circle"></div><div class="arrow-line"></div><div class="arrow-end"></div></div>
                </div>
            </div>
            <div>
                <div>
                    <div class="squaretext blue">
                        <div class="middlecontent">
                        <img src="img/5.svg"/>
                        <p>Power BI</p>
                        </div>
                        <div class="arrow"><div class="arrow-circle"></div><div class="arrow-line"></div><div class="arrow-end"></div></div>
                        <div class="arrow"><div class="arrow-circle"></div><div class="arrow-line"></div><div class="arrow-end"></div></div>
                    </div>
                </div>
            </div>
            <div>
                <div class="squaretext apps">
                    <p><span>Приложения</span><br/> для  iOS, Android,<br/>Windows Phone</p>
                    <div class="imgcont"><img src="img/6.svg"/></div>
                </div>
                <div class="squaretext">
                    <p><span>Браузер</span></p>
                    <div class="imgcont"><img src="img/7.svg"/></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ////////////////////// !-->

<section class="invest">
    <div class="container">
        <div class="content">
            <h1>186% возврат <br/> инвестиций<br/> от вложений<br/> в систему</h1>
            <p class="big htext">и другие цифры по данным<br/> исследовательской<br/> компании IDC</p>
        </div>
    </div>
</section>

<!-- ////////////////////// !-->

<section class="numbers">
    <div class="container">
        <div class="squaretext black">
            <h1>96<span>%</span></h1>
            <p>Средний уровень удовлетворенности<br/> от внедрения решений бизнес-аналитики<br/> и визуализации данных</p>
        </div>
        <div class="squaretext empty">
            <h1>23<span>%</span></h1>
            <p>Увеличения<br/> потока денежных<br/> средств</p>
        </div>
        <div class="squaretext">
            <h1>20<span>%</span></h1>
            <p>Сокращение<br/> операционных<br/> затрат</p>
        </div>
        <div class="squaretext blue">
            <h1>34<span>%</span></h1>
            <p>Увеличение<br/> производительности<br/> сотрудников</p>
        </div>
        <div class="squaretext">
            <h1>16<span>%</span></h1>
            <p>Увеличение<br/> оборота</p>
        </div>
        <div class="squaretext empty">
            <h1>186<span>%</span></h1>
            <p>Возврат<br/> инвестиций</p>
        </div>
    </div>
</section>

<!-- ////////////////////// !-->

<section class="ourclients">
    <div class="container">
        <h1>Некоторые<br/> наши клиенты</h1>
        <div class="clients">
            <!--<div><img src="img/client1.png" width="142"><div></div></div>!-->
            <div><img src="img/client2.png" width="101"><div></div></div>
            <div><img src="img/client3.png" width="125"><div></div></div>
            <div><img src="img/client4.png" width="108"><div></div></div>
            <div><img src="img/client6.png" width="142"><div></div></div>
            <div><img src="img/client7.png" width="190"><div></div></div>
        </div>
    </div>
</section>

<!-- ////////////////////// !-->

<section class="finish">
    <div class="container cols">
        <div class="seven-col">
            <h1>За 3 дня сделаем<br/> пилотный проект<br/> на основе Ваших данных!</h1>
            <p class="big htext">Давайте управлять<br/> эффективно!</p>
        </div>
        <div class="five-col">
            <form action="send.php" class="hiddensend" method="post">
                <h2>Обратная связь</h2>
                <p class="label">Ваше имя</p>
                <input placeholder="Сорокин Александр" name="name" type="name" title="ваше имя">
                <p class="label">E-mail</p>
                <input placeholder="hello@sorokins.me" name="email" type="email" title="e-mail">
                <a class="button" onclick="ga('send', 'event', 'Button', 'Форма Пилотный проект, кнопка Далее');">Далее</a>
                <input type="hidden" name="form_name" value="Заявка с сайта">
            </form>
        </div>
    </div>
</section>

<!-- ////////////////////// !-->

<footer>
    <div class="container cols">
        <div class="first">
            <img src="img/logofooter.png" width="75">
            <p class="five-col">бизнес-аналитика и визуализация данных</p>
        </div>
        <div class="three-col">
            <a href="myBI_Presentation.pdf" target="_blank" class="squaretext" onclick="ga('send', 'event', 'Button', 'Скачать презентацию');">
                <p>Корпоративная<br/> презентация</p>
                <p class="bluelink">Скачать</p>
                <img src="img/doc.svg" class="doc">
            </a>
        </div>
        <div class="four-col">
            <div class="squaretext empty">
                <p>Следите за нами<br/> в социальных сетях</p>
                <div class="social">
                    <a href="https://www.facebook.com/groups/1048552471883246/" target="_blank"><img src="img/fb.svg" onclick="ga('send', 'event', 'Button', 'Соцсети, Фейсбук');"></a>
                    <a href="https://vk.com/power_bi" target="_blank"><img src="img/vk.svg" onclick="ga('send', 'event', 'Button', 'Соцсети, ВК');"></a>
                    <!--<a href="#"><img src="img/twi.svg" onclick="ga('send', 'event', 'Button', 'Соцсети, Твиттер');"></a>!-->
                </div>
            </div>
        </div>
        <div class="five-col cols contacts">
            <div>
                <p class="phone">8 495 066 26 15</p>
                <p><a href="#callpopup" class="bluelink fancybox" onclick="ga('send', 'event', 'Button', 'Перезвоните мне, подвал');">Перезвоните мне</a></p>
            </div>
            <div>
                <p class="email" onclick="ga('send', 'event', 'Button', 'E-mail в подвале');">info@mybi.ru</p>
            </div>
        </div>
    </div>
</footer>

<!-- ////////////////////// !-->

<?php include "blocks/forms.php"; ?>

<div class="errorblock">
    <p><span class="errors">Телефон</span></p>
    <p class="ok" onclick="ga('send', 'event', 'Button', 'Скрыть ошибку формы');">Окей</p>
</div>

<div class="consult">
    <div class="squaretext">
        <h2>Бесплатная<br/> консультация</h2>
        <p class="phone">8 495 066 26 15</p>
        <p><a href="#callpopup" class="bluelink fancybox" onclick="ga('send', 'event', 'Button', 'Перезвоните мне, плавающий блок');">Перезвоните мне</a></p>
    </div>
    <div class="consultbutton" onclick="ga('send', 'event', 'Button', 'Плавающий блок');">
        <img src="img/phone.png" width="21"/>
        <p>Нужна консультация?</p>
        <div class="cols" onclick="ga('send', 'event', 'Button', 'Скрыть плавающий блок');">
            <p>Закрыть</p>
            <img src="img/consultclose.png" width="15">
        </div>
    </div>
</div>

<!-- ////////////////////// !-->

<?php include "blocks/scripts.php"; ?>
</body>
</html>
