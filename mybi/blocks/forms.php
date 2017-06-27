<form class="popup ajax" id="popup" action="send.php" method="post">
    <div class="container">
        <p>Обратная связь</p>
        <h1>Заявка на пилотный проект</h1>
        <div class="cols">
            <div class="four-col">
                <p class="label">Ваше имя</p>
                <input placeholder="Сорокин Александр" type="name" name="name" title="ваше имя"/>
            </div>
            <div class="four-col">
                <p class="label">E-mail</p>
                <input placeholder="hello@sorokins.me" type="email" name="email" title="e-mail"/>
            </div>
            <div class="four-col">
                <p class="label">Телефон</p>
                <input placeholder="8 (900) 000-00-00" type="tel" name="tel" title="телефон"/>
            </div>
            <div class="eight-col">
                <p class="label">Комментарий</p>
                <textarea placeholder="Текст сообщения" name="comment" title="комментарий"></textarea>
            </div>
            <div class="four-col">
                <div class="squaretext">
                    <p class="small">Заполнение этой формы гарантирует конфиденциальность ваших данных и ни к чему не обязывает</p>
                </div>
            </div>
        </div>
        <a class="button" onclick="ga('send', 'event', 'Button', 'Форма Пилотный проект, кнопка отправки');">Отправить</a>
        <input type="hidden" name="form_name" value="Заявка с сайта">
    </div>
</form>

<form class="popup ajax" id="callpopup" action="send.php" method="post">
    <div class="container">
        <p>Обратная связь</p>
        <h1>Перезвоните мне</h1>
        <div class="cols">
            <div class="four-col">
                <p class="label">Ваше имя</p>
                <input placeholder="Сорокин Александр" type="name" name="name" title="ваше имя"/>
            </div>
            <div class="four-col">
                <p class="label">Телефон</p>
                <input placeholder="8 (900) 000-00-00" type="tel" name="tel" title="телефон"/>
            </div>
            <div class="four-col">
                <div class="squaretext">
                    <p class="small">Заполнение этой формы гарантирует конфиденциальность ваших данных и ни к чему не обязывает</p>
                </div>
            </div>
        </div>
        <div class="form-agree">
            <input class="checkbox-agree" id="agree-callpopup" type="checkbox" name="check" value="check1">
            <label for="agree-callpopup">Я принимаю условия</label>
        </div>
        <a class="button disabled" onclick="ga('send', 'event', 'Button', 'Форма Перезвоните мне, кнопка отправки');">Отправить</a>
        <input type="hidden" name="form_name" value="Заказ звонка">
    </div>
</form>

<form class="popup webinar" id="webinarpopup" action="send.php" method="post">
    <div class="container">
        <p>Обратная связь</p>
        <h1>Регистрация на вебинар</h1>
        <div class="cols">
            <div class="four-col">
                <p class="label">Ваше имя</p>
                <input placeholder="Сорокин Александр" type="name" name="name" title="ваше имя"/>
            </div>
            <div class="four-col">
                <p class="label">E-mail</p>
                <input placeholder="hello@sorokins.me" type="email" name="email" title="e-mail"/>
            </div>
            <div class="four-col">
                <p class="label">Телефон</p>
                <input placeholder="8 (900) 000-00-00" type="tel" name="tel" title="телефон"/>
            </div>
            <div class="twelve-col">
                <div class="squaretext">
                    <p class="small">Заполнение этой формы гарантирует конфиденциальность ваших данных и ни к чему не обязывает</p>
                </div>
            </div>
        </div>
        <div class="form-agree">
            <input class="checkbox-agree" id="agree-webinarpopup" type="checkbox">
            <label for="agree-webinarpopup">Я принимаю условия</label>
        </div>
        <a class="button disabled" onclick="ga('send', 'event', 'Button', 'Форма Регистрация на вебинар, кнопка отправки');">Отправить</a>
        <input type="hidden" name="form_name" value="Регистрация на вебинар">
    </div>
</form>

<form class="popup webinar" id="seminarpopup" action="send.php" method="post">
    <div class="container">
        <p>Обратная связь</p>
        <h1>Регистрация на семинар</h1>
        <div class="cols">
            <div class="four-col">
                <p class="label">Ваше имя</p>
                <input placeholder="Сорокин Александр" type="name" name="name" title="ваше имя"/>
            </div>
            <div class="four-col">
                <p class="label">E-mail</p>
                <input placeholder="hello@sorokins.me" type="email" name="email" title="e-mail"/>
            </div>
            <div class="four-col">
                <p class="label">Телефон</p>
                <input placeholder="8 (900) 000-00-00" type="tel" name="tel" title="телефон"/>
            </div>
            <div class="twelve-col">
                <div class="squaretext">
                    <p class="small">Заполнение этой формы гарантирует конфиденциальность ваших данных и ни к чему не обязывает</p>
                </div>
            </div>
        </div>
        <a class="button" onclick="ga('send', 'event', 'Button', 'Форма Регистрация на семинар, кнопка отправки');">Отправить</a>
        <input type="hidden" name="form_name" value="Регистрация на семинар">
    </div>
</form>

<form class="popup ajax" id="projectpopup" action="send.php" method="post">
    <div class="container">
        <p>Обратная связь</p>
        <h1>Заявка на обсуждение проекта</h1>
        <div class="cols">
            <div class="four-col">
                <p class="label">Ваше имя</p>
                <input placeholder="Сорокин Александр" type="name" name="name" title="ваше имя"/>
            </div>
            <div class="four-col">
                <p class="label">E-mail</p>
                <input placeholder="hello@sorokins.me" type="email" name="email" title="e-mail"/>
            </div>
            <div class="four-col">
                <p class="label">Телефон</p>
                <input placeholder="8 (900) 000-00-00" type="tel" name="tel" title="телефон"/>
            </div>
            <div class="eight-col">
                <p class="label">Комментарий</p>
                <textarea placeholder="Текст сообщения" name="comment" title="комментарий"></textarea>
            </div>
            <div class="four-col">
                <div class="squaretext">
                    <p class="small">Заполнение этой формы гарантирует конфиденциальность ваших данных и ни к чему не обязывает</p>
                </div>
            </div>
        </div>
        <div class="form-agree">
            <input class="checkbox-agree" id="agree-projectpopup" type="checkbox">
            <label for="agree-projectpopup">Я принимаю условия</label>
        </div>
        <a class="button disabled" onclick="ga('send', 'event', 'Button', 'Форма Обсуждение проекта, кнопка отправки');">Отправить</a>
        <input type="hidden" name="form_name" value="Заявка с сайта">
    </div>
</form>

<form class="popup ajax" id="connectpopup" action="/send.php" method="post">
    <div class="container">
        <div class="left-form-connect">
            <h1>Сервис автоматизации<br> бизнес-аналитики</h1>
            <p>Бесплатное тестирование</p>
            <div class="squaretext">
                <p class="small">Заполнение этой формы гарантирует конфиденциальность ваших данных и ни к чему не обязывает</p>
            </div>
        </div>
        <div class="right-form-connect cols">
<!--            <div class="four-col">-->
<!--                <h2>Регистрация<br> на вебинар</h2>-->
<!--            </div>-->
            <div class="four-col">
                <p class="label">Ваше имя</p>
                <input placeholder="Сорокин Александр" type="name" name="name" title="ваше имя"/>
            </div>
            <div class="four-col">
                <p class="label">E-mail</p>
                <input placeholder="hello@sorokins.me" type="email" name="email" title="e-mail"/>
            </div>
            <a class="button" id="to-interview" onclick="ga('send', 'event', 'Button', 'Сервис автоматизации бизнес-аналитики, кнопка отправки');">Отправить</a>
            <input type="hidden" name="form_name" value="Регистрация в сервисе">
        </div>
    </div>
</form>

<form class="popup ajax" id="connectpopup2" action="send.php" method="post">
    <div class="container">
        <div class="left-form-connect">
            <h1>Сервис автоматизации<br> бизнес-аналитики</h1>
            <p>Бесплатное тестирование</p>
            <div class="squaretext">
                <p class="small">Заполнение этой формы гарантирует конфиденциальность ваших данных и ни к чему не обязывает</p>
            </div>
        </div>
        <div class="right-form-connect cols">
            <div class="four-col">
                <h2>Регистрация<br> на вебинар</h2>
            </div>
            <div class="four-col">
                <p class="label">Ваше имя</p>
                <input placeholder="Сорокин Александр" type="name" name="name" title="ваше имя"/>
            </div>
            <div class="four-col">
                <p class="label">E-mail</p>
                <input placeholder="hello@sorokins.me" type="email" name="email" title="e-mail"/>
            </div>
            <a class="button" id="to-full-video" onclick="ga('send', 'event', 'Button', 'Сервис автоматизации бизнес-аналитики, кнопка отправки');">Отправить</a>
            <input type="hidden" name="form_name" value="Отправить">
        </div>
    </div>
</form>

<form class="popup" id="success">
    <p class="big">Спасибо, мы свяжемся с Вами<br/> в ближайшее время!</p>
</form>

<form class="popup" id="webinarsuccess">
    <p class="big">Спасибо, за регистрацию! За день до мероприятия<br/> мы отправим Вам ссылку для входа.<br/><br/> Вебинар пройдет при любой погоде!</p>
</form>

<form class="popup" id="seminarsuccess">
    <p class="big">Спасибо, за регистрацию!</p>
</form>

<form class="popup" id="checkemail">
    <p class="big">Спасибо, за регистрацию!<br/><br/> На Ваш почтовый ящик была отправлена ссылка для входа в сервис.<br/> Перейдите по ней для активации аккаунта.</p>
</form>