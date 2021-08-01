<?php

/* @var $this yii\web\View */

$this->title = 'Коллегия адвокатов Эталон Сыктывкар. Адвокаты по уголовным, гражданским, административным делам';

?>
<div class="container">

    <!--МЕНЮ НАВИГАЦИИ -->

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">ЭТАЛОН</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class=""><a href="#home">
                            Главная</a></li>
                    <li><a href="#aboutus">
                            О нас</a></li>
                    <li><a href="#jobs">
                            Наши адвокаты</a></li>
                    <li><a href="#call">
                            Обратная связь</a></li>
                    <li><a href="#contact">
                            Контакты</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class='headerwrap row' id="home">
        <div class="info col-md-12 col-sm-12">
            <br><br><br>
            <h1>Коллегия адвокатов <span>"Эталон"</span></h1>
            юридическая помощь и защита граждан
            <br><br><br>
            <a class='btn' href="#call">
                <button class="btn btn-primary">Связаться с нами</button>
            </a>
        </div>
    </div>

    <!-- Почему мы? -->
    <div class="why row" id="aboutus"><br><br><br>
        <div class="why-item col-md-2 col-sm-6"><img src='img/icons/law_trial.svg'>
            Большой опыт работы
        </div>
        <div class="why-item col-md-2 col-sm-6"><img src='img/icons/profession_lawyer.svg'>
            Квалифицирован-ные специалисты
        </div>
        <div class="why-item col-md-2 col-sm-6"><img src='img/icons/law_contract.svg'>
            Широкий спектр услуг
        </div>
        <div class="why-item col-md-2 col-sm-6"><img src='img/icons/law_question.svg'>
            Индивидуальный подход
        </div>
        <div class="why-item col-md-2 col-sm-6"><img src='img/icons/law_protection.svg'>
            Полная конфеденциальность
        </div>
        <div class="why-item col-md-2 col-sm-6"><img src='img/icons/coins.svg'>
            Консультация <b>от 500 рублей</b></div>
    </div>

    <!-- Услуги -->
    <div class="services row" id=''>

        <div class="col-md-12 col-xs-12">

            <div class="col-md-4 col-xs-12"><img id='icon'
                                                 src="img/%D0%B3%D1%80%D0%B0%D0%B6%D0%B4%D0%B0%D0%BD%D1%81%D0%BA%D0%B8%D0%B5_%D0%B4%D0%B5%D0%BB%D0%B0.png">
            </div>
            <div class="col-md-8 col-xs-12">
                Гражданские дела в арбитраже и судах общей юрисдикции
                <ul>
                    <li> Разрешение имущественных споров;</li>
                    <li>Споров о правах наследования, признании права собственности;</li>
                    <li>Дела о защите прав потребителей;</li>
                    <li>О защите чести, достоинства, деловой репутации и многое другое.</li>
                </ul>
            </div>
        </div>

        <div class="col-md-12 col-xs-12">
            <div class="col-md-8 col-xs-12">
                Защита по уголовным делам
                <ul>
                    <li> преступления против жизни и здоровья;</li>
                    <li> преступления против конституционных прав человека, гражданина и собственности;</li>
                    <li> преступления в сфере экономической деятельности;</li>
                    <li> преступления против общественной безопасности и общественного порядка;</li>
                    <li> экологические преступления и другие.</li>
                </ul>
            </div>
            <div class="col-md-4 col-xs-12"><img id='icon'
                                                 src="img/%D1%83%D0%B3%D0%BE%D0%BB%D0%BE%D0%B2%D0%BD%D1%8B%D0%B5_%D0%B4%D0%B5%D0%BB%D0%B0.png">
            </div>
        </div>

        <div class="col-md-12 col-xs-12">
            <div class="col-md-4 col-xs-12"><img id='icon'
                                                 src="img/%D0%B0%D0%B4%D0%BC%D0%B8%D0%BD%D0%B8%D1%81%D1%82%D1%80%D0%B0%D1%82%D0%B8%D0%B2%D0%BD%D0%BE%D0%B5_%D0%BF%D1%80%D0%B0%D0%B2%D0%BE%D0%BD%D0%B0%D1%80%D1%83%D1%88%D0%B5%D0%BD%D0%B8%D0%B5.png">
            </div>
            <div class="col-md-8 col-xs-12">
                Защита по делам об административных правонарушений всех категорий
                <ul>
                    <li>Нарушения норм охраны труда, наносящие вред здоровью ;</li>
                    <li>Посягательство на собственность;</li>
                    <li>Наносящие вред природе, памятникам истории и культуры;</li>
                    <li>Совершенные на транспорте;</li>
                    <li>Совершенные в области торговли и финансов;</li>
                    <li>Посягательство на общественный порядок и другие.</li>
                </ul>
            </div>
        </div>

        <div class="col-md-12 col-xs-12">

            <div class="col-md-8 col-xs-12">Консультации<br>
                Консультации по всем правовым вопросам от 500 рублей.
            </div>
            <div class="col-md-4 col-xs-12"><img id='icon'
                                                 src='img/%D0%BA%D0%BE%D0%BD%D1%81%D1%83%D0%BB%D1%8C%D1%82%D0%B0%D1%86%D0%B8%D0%B8.png'>
            </div>
        </div>
    </div>

    <!-- Достижения -->
    <div class="progress row"> <!--добавить анимацию строк-->
        <div class="col-md-4 col-xs-12"><br><br>
            Мы работаем с
            <span>1998</span><br> года
        </div>
        <div class="col-md-4 col-xs-12"><br><br>
            Более
            <span>2000</span> клиентов
        </div>
        <div class="col-md-4 col-xs-12"><br>
            Опыт юридической работы адвокатов в среднем
            <span>15</span><br> лет
        </div>
    </div>

    <div class='jobs row' id="jobs"><br><br><br>
        <h2> Наши адвокаты:</h2>
        <br>
        <div class="person col-md-4 col-xs-12">
            <span>Тоболев <br>Вячеслав Евгеньевич</span>
            работает с момента образования коллегии адвокатов, внушительный опыт работы
            <a href="tel:+79042707935">+7(904)270-79-35</a></div>

        <div class="person col-md-4 col-xs-12">
            <b>Максаков <br>Геннадий Сергеевич</b>
            значительный опыт работы с делами исполнительного производства
            <a href="tel:+79129636096">+7(912)963-60-96</a></div>

        <div class="person col-md-4 col-xs-12">
            <b>Федотов <br>Станислав Геннадьевич</b>
            большой опыт работы в <br> сфере уголовного судопроизводства
            <a href="tel:+79505655888">+7(950)565-58-88</a></div>

        <div class="person col-md-4 col-xs-12"><br>
            <b>Фирсов <br>Алексей Юрьевич</b>
            многолетний стаж работы<br> по уголовным делам
            <a href="tel:+79129659728">+7(912)965-97-28</a></div>

        <div class="person col-md-4 col-xs-12"><br>
            <b>Маймистов <br>Максим Юрьевич</b>
            большой опыт работы с гражданскими,<br> трудовыми спорами
            <a href="tel:+79128658336">+7(912)865-83-36</a></div>

    </div>

    <!-- Обратная связь -->

    <div class="call row" id="call">
        <div class="col-md-8 col-xs-12"><h2> Обратная связь</h2>
            <!-- Форма обратной связи -->
            <p id='min'> Напишите нам и мы обязательно свяжемся с Вами в ближайщее время!</p>
            <form action="php/mail.php" method="post">
                <div class="form-group">
                    <label for="name">Ваше имя:</label>
                    <input type="name" name="name" class="form-control" id="name" placeholder="Введите свое имя">
                </div>
                <div class="form-group">
                    <label for="email1">E-mail:</label>
                    <input type="email" name="email" class="form-control" id="email1"
                           placeholder="Введите свой электронный адрес">
                </div>
                <div class="form-group">
                    <label for="phone">Номер телефона:</label>
                    <input type="phone" name="phone" class="form-control" id="phone"
                           placeholder="Ввдедите свой номер телефона">
                </div>
                <div class="form-group">
                    <label for="message">Сообщение:</label>
                    <textarea class="form-control" name="message" rows="3"
                              placeholder="Опишите кратко свой вопрос"></textarea>
                </div>
                <button type="submit" class="btn btn-info" id='send'> Отправить сообщение</button>

            </form>
        </div>
    </div>

    <!-- Контакты -->

    <div class="contacts row" id="contact">
        <h2>Контакты</h2>
        <div class="col-md-6">
            Телефон:
            <p>8 (8212) <b>44-72-92</b></p>
            Адрес:
            <p> 167000, г. Сыктывкар, ул. Первомайская, д.115, 2 этаж, офис 24</p>
            Режим работы:
            <table>
                <tr>
                    <td><p> понедельник-пятница</p></td>
                    <td><p>09:00-18:00</p></td>
                </tr>
                <tr>
                    <td><p>суббота</p></td>
                    <td><p>09:00-13:00</p></td>
                </tr>
                <tr>
                    <td><p>воскресенье</p></td>
                    <td><p>выходной</p></td>
                </tr>
            </table>
        </div>
        <div class="col-md-6">
            <script type="text/javascript" charset="utf-8" async
                    src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A34ba10f4c6055ee089c7f0ae585a692d726eff0b493ec9198f5bc1ce661683b4&amp;width=600&amp;height=450&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>
    </div>

    <div class='footer col-12'> &copy Коллегия адвокатов "Эталон" , <?= date('Y') ?></div>
</div>