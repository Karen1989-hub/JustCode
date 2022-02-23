@include('layout.head')
<body>
<div class="inner noBlack">

    @include('layout.aside')
    <div class="content">
        <div class="overlay overlay_phone"></div>
        <div class="overlay overlay_advice"></div>
        <div class="overlay overlay_menu"></div>
        <header class="header">
            <div class="header-top ">
                <div class="container">
                    <div class="header__wrap">
                        <div class="header__block _burger">
                            <div class="toggle">
                                <div class="toggle__btn"><span class="toggle__first"></span><span
                                            class="toggle__second"></span><span class="toggle__third"></span></div>
                                <div class="toggle__title">Меню</div>
                            </div>
                        </div>
                        <div class="header__block _contact">
                            <div class="h-phone">
                                <div class="h-phone__icon"></div>
                                <div class="h-phone__list">
                                    <div class="h-phone__title section__title">Звоните!</div>
                                    <div class="h-phone__item">
                                        <div class="h-phone__operator">Москва :</div>
                                        <a href="tel:
                                                                                                     +74991135035                                                                                                  "
                                           class="h-phone__link">
                                                    <span>
                                                                                                                    +7 (499) 113-50-35                                                                                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header__block _logo">
                            <div class="h-logo"><a href="../index.html" class="h-logo__link"></a></div>
                        </div>

                        <div class="header__block _advice">
                            <div class="h-mail">
                                <div class="h-mail__icon"></div>
                                <a href="mailto:info@imedia24.ru" class="h-mail__link">
                                    <span>info@imedia24.ru</span></a>
                            </div>
                            <a href="#advice" class="h-advice">
                                <div class="h-advice__icon"></div>
                                <div class="h-advice__link"><span>Получить консультацию</span></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div id="advice" class="popup _advice">
            <div id="comp_d436ad9b77cc655f80f3343068620b5a">
                <div class="popup__form">
                    <div class="section__title">Напишите нам</div>
                    <div class="section__pre">Оставьте свои контактные данные, и мы позвоним Вам в течении 1 часа и
                        проконсультируем Вас по вашему вопросу
                    </div>
                    <form class="form" name="SIMPLE_FORM_2" action="https://www.imedia24.ru/about/" method="POST"
                          enctype="multipart/form-data"><input type="hidden" name="bxajaxid"
                                                               id="bxajaxid_d436ad9b77cc655f80f3343068620b5a_8BACKi"
                                                               value="d436ad9b77cc655f80f3343068620b5a"/><input
                                type="hidden" name="AJAX_CALL" value="Y"/><input type="hidden" name="sessid" id="sessid"
                                                                                 value="a8bab331b699814b00127d018c97a84d"/><input
                                type="hidden" name="WEB_FORM_ID" value="2"/>
                        <div class="form__block "><input type="text" id="feed_6" class="input" autocomplete="name"
                                                         placeholder="" name="form_text_6" value=""><label for="feed_6"
                                                                                                           class="label">Имя</label>
                        </div>
                        <div class="form__block "><input type="email" id="feed_7" class="input email" data-valid="email"
                                                         autocomplete="email" placeholder="" name="form_email_7"
                                                         value=""><label for="feed_7" class="label">E-mail *</label>
                        </div>
                        <div class="form__block"><input type="text" id="feed_8" class="input" data-valid="phone"
                                                        autocomplete="tel" placeholder="" name="form_text_8"
                                                        value=""><label for="feed_8" class="label">Телефон *</label>
                        </div>
                        <div class="form__block "><textarea id="feed_9" class="input" placeholder="" rows="1"
                                                            name="form_textarea_9"></textarea><label for="feed_9"
                                                                                                     class="label">Сообщение</label>
                        </div>
                        <div class="form__block ">
                            <div class="checkbox-wrap"><label class="checkbox"><input data-valid="checkbox"
                                                                                      type="checkbox"
                                                                                      name="form_checkbox_SIMPLE_QUESTION_818[]"
                                                                                      class="checkbox__hidden"
                                                                                      checked="checked" value="90"><span
                                            class="checkbox__showed"></span><span class="checkbox__title">Я согласен на обработку личных данных в соответствии с <a
                                                href="../privacy-policy/index.html" target="_blank">политикой конфиденциальности</a></span></label>
                            </div>
                        </div>
                        <input type="hidden" name="form_text_84" value="/about/"><input type="hidden" name="captcha_sid"
                                                                                        value="0ab9a4fbb7220706f15a6ba28f2741a4"/>
                        <div class="g-recaptcha" data-sitekey="6LdqrqkUAAAAAIWCyorcd2Lf7ICsiwBSMrZKccY3"
                             data-size="invisible" data-badge="bottomleft"
                             data-callback="RecaptchaV3GoogleSubmitForm"></div>
                        <input id="captcha_feed" type="text" name="captcha_word" style="display:none" value="6Ldqr"
                               data-valid size="30" maxlength="50" value="" placeholder="Введите символы с картинки"
                               class="input"><br/>
                        <div class="form__btn">
                            <input type="submit" name="web_form_submit"
                                   class="btn btn-green" value="Отправить">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <main class="aboutus">
            <section class="banner banner_default">
                <div style="background-image: url('../local/templates/main/images/aboutusNew.png')"
                     class="banner__img animated fadeIn"></div>
                <div class="banner__info">
                    <h1 class="banner__title">О компании</h1>
                    <div class="banner__text">команда специалистов экстра-класса</div>
                </div>
                <div class="breadcrumb">
                    <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                    itemprop="item" href="../index.html"><span itemprop="name">Главная</span>
                                <meta itemprop="position" content="1"/>
                            </a></li>
                        <li class="active">О компании</li>
                        <li style="display: none" itemprop="itemListElement" itemscope
                            itemtype="http://schema.org/ListItem"><a itemprop="item" href="../contacts/index.html"><span
                                        itemprop="name">Звоните ☎ +7 (499) 113-50-35</span>
                                <meta itemprop="position" content="2"/>
                            </a></li>
                    </ol>
                </div>
            </section>

            <section class="aboutus-mission">
                <div class="container">
                    <div class="section__img wow bounceIn"></div>
                    <div class="section__pre"></div>
                    <h2 class="section__title">Наша миссия</h2>
                    <div class="section__text"><p>Предлагать комплексный продукт высокого качества</p>
                        <p>Что это значит?</p>
                        <ul>
                            <li>
                                Что нас невозможно найти по запросу: «создание сайтов недорого». Слепить элементарный
                                сайт человек в силах самостоятельно. Наша задача – помочь ему в том, с чем он не
                                справится своими силами: разработать проект выгодного перспективного продукта, грамотно
                                запустить его и сопровождать.
                            </li>
                            <li>
                                Что мы постоянно расширяем специализированные знания, участвуем в тематических
                                мероприятиях, получаем награды. То есть растем сами, и вместе с нами развиваются бизнесы
                                клиентов, т.к. это – главный показатель нашей работы.
                            </li>
                            <li>
                                Что мы не ограничиваемся одним продуктом и одной сферой. Мы начинаем с понимания целей и
                                задач клиента и заканчиваем запуском проекта, развитием, поддержкой и наполнением.
                                Причем речь может идти как о сайте, так и о мобильном приложении, CRM-системе,
                                корпоративном портале; о стартапе или текущем бизнесе; о предприятии энергетической
                                промышленности или творческой мастерской.
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <section class="aboutus-indicators bg-blue">
                <div class="container">
                    <div class="section__img wow bounceIn"></div>
                    <h2 class="section__title">Показатели в цифрах</h2>
                    <div class="row">
                        <div class="six columns">
                            <div class="item item_left">
                                <div class="item__info">
                                    <div class="item__text"><span>Лет на рынке</span><br><strong>создания
                                            веб-ресурсов</strong><br><strong>и интернет-продвижения</strong></div>
                                </div>
                                <div class="item__img"><span><i data-value="8">0</i>+</span></div>
                            </div>
                        </div>
                        <div class="six columns">
                            <div class="item item_right">
                                <div class="item__img"><span><i data-value="300">0</i>+</span></div>
                                <div class="item__info">
                                    <div class="item__text"><strong>Довольных
                                            клиентов </strong><br><span>по всему миру </span></div>
                                </div>
                            </div>
                        </div>
                        <div class="six columns">
                            <div class="item item_left">
                                <div class="item__info">
                                    <div class="item__text"><strong>Завершенных проектов:</strong><br>от
                                        сайтов-визиток </span><br><span>до CRM-систем</span></div>
                                </div>
                                <div class="item__img"><span><i data-value="500">0</i>+</span></div>
                            </div>
                        </div>
                        <div class="six columns">
                            <div class="item item_right">
                                <div class="item__img"><span><i data-value="50">0</i>%</span></div>
                                <div class="item__info">
                                    <div class="item__text"><strong>Клиентов доверяют нам </strong><br><strong>сопровождение </strong><span>своих ресурсов  </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="six columns">
                            <div class="item item_left">
                                <div class="item__info">
                                    <div class="item__text"><strong>Клиентов заказывают</strong><br><span>у нас проекты повторно</span><br><span>и рекомендуют друзьям </span>
                                    </div>
                                </div>
                                <div class="item__img"><span><i data-value="40">0</i>%</span></div>
                            </div>
                        </div>
                        <div class="six columns">
                            <div class="item item_right">
                                <div class="item__img"><span><i data-value="35">0</i>+</span></div>
                                <div class="item__info">
                                    <div class="item__text"><strong>Узких специалистов </strong><br>с опытом профильной
                                        работы </span><br><span></span><strong> от 10 лет</strong></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="aboutus-history">
                <div class="container">
                    <div class="section__img wow bounceIn"></div>
                    <h2 class="section__title">Наша история</h2>
                    <div class="section__text"><p>
                            В 2009 году мы начали работать небольшой командой. Все, на чем тогда держался наш бизнес –
                            большие амбиции, высокая квалификация каждого специалиста, желание трудиться и
                            профессионально развиваться. С самого начала мы выделили следующие приоритеты в работе:
                        <ul>
                            <li>Вкладываться в каждый проект по-максимуму. Чтобы результат работы был не просто
                                «хорошим», а реально измерялся числом новых клиентов и посетителей.
                            </li>
                            <li>Уделять пристальное внимание кадрам. Тратить силы и средства на их развитие, подбирать
                                узкоспециализированных, а не универсальных специалистов.
                            </li>
                            <li>Подробно анализировать каждый проект, чтобы постоянно получать бесценный опыт работы с
                                разными сферами бизнеса, масштабами компаний, регионами. А значит – формировать
                                эффективный в каждом конкретном случае набор инструментов, чтобы обеспечить клиенту
                                результат, за который не стыдно.
                            </li>
                        </ul>
                        </p>
                        <p>
                            Наше стремление к перфекционизму дало свои плоды: сейчас наша команда больше в 10 раз, а
                            число заказчиков давно перевалило за три сотни. Нам есть, чем гордиться: специализированные
                            награды, приглашение быть спикерами на тематических конференциях, дипломы и сертификаты, а
                            главное – успешные проекты наших клиентов!
                        </p></div>
                </div>
            </section>

            <section class="aboutus-geo bg-light-yellow">
                <div class="container">
                    <div class="section__img wow bounceIn"></div>
                    <h2 class="section__title">География деятельности</h2>
                    <div class="section__text">
                        <p>
                            Офисы нашей компании находятся в Санкт-Петербурге и Минске, а компании клиентов
                            рассредоточены по всему миру!
                        </p>
                        <p>
                            С каждым годом ареол нашей работы расширяется, а значит – также растут знания, опыт и
                            возможности, чтобы обеспечивать своим клиентам еще более высокие результаты.
                        </p></div>
                </div>
                <div class="aboutus-geo__map">
                    <div id="mapGeoYandex" class="aboutus-geo__map-inner"></div>
                    <div class="aboutus-geo__map-marker">
                        <div class="aboutus-geo__map-clients"><i></i><span>-  Офисы наших клиентов</span></div>
                        <div class="aboutus-geo__map-offices"><i></i><span>-  Офисы iMedia Solutions</span></div>
                    </div>
                </div>
            </section>

            <section class="aboutus-achieve">
                <div class="container">
                    <div class="section__img wow bounceIn"></div>
                    <h2 class="section__title">Наши достижения</h2>
                    <div class="aboutus-achieve__group">
                        <div class="row">
                            <div class="three columns" id="bx_651765591_116">
                                <div class="item">
                                    <div class="item__img wow fadeIn"><span
                                                style="background-image: url(&quot;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='30' height='42' viewBox='0 0 30 42'%3E%3Cdefs%3E%3Cstyle%3E .cls-1 %7B fill: %23ffbc1a; %7D %3C/style%3E%3C/defs%3E%3Cpath class='cls-1' d='M482,3141.94l-10.1-1.88L467,3131l-4.9,9.06-10.1,1.88,7.068,7.48-1.339,10.22,6.157-2.95v3.09h6.227v-3.09l6.157,2.95-1.339-10.22Zm-11.387,9.88L467,3150.1l-3.614,1.72,0.522-3.98-2.755-2.91,3.936-.74,1.911-3.53,1.91,3.53,3.937,0.74-2.756,2.91Zm-9.789,9.96h12.352v4.61H460.824v-4.61Zm-2.3,6.61h16.945V3173H458.527v-4.61Z' transform='translate%28-452 -3131%29'/%3E%3C/svg%3E%0A&quot;);"></span>
                                    </div>
                                    <div class="item__title">Золотой сертифицированный партнер &quot;1С-Битрикс&quot;
                                    </div>
                                    <div class="item__text">Одна из самых популярных систем управления сайтами на
                                        просторах бывшего СНГ признала, что нашим специалистам хватает квалификации,
                                        чтобы воплощать на этой платформе самые сложные масштабные проекты.
                                    </div>
                                    <div class="item__btn"><a
                                                href="../upload/iblock/dee/dee6116fc55fc622af71c5eff11f06de.jpg"
                                                rel="certificate" class="btn btn-grey js-certificate fancybox">Смотреть
                                            сертификаты</a></div>
                                </div>
                            </div>
                            <div class="three columns" id="bx_651765591_117">
                                <div class="item">
                                    <div class="item__img wow fadeIn" data-wow-delay="0.25s"><span
                                                style="background-image: url(&quot;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='42' height='31' viewBox='0 0 42 31'%3E%3Cdefs%3E%3Cstyle%3E .cls-1 %7B fill: %23ffbc1a; %7D %3C/style%3E%3C/defs%3E%3Cpath class='cls-1' d='M803.027,3158.95a3.487,3.487,0,1,0-3.486,3.51A3.5,3.5,0,0,0,803.027,3158.95Zm-7.365,8.19c-0.084.38,0.054,0.45,0.311,0.16l1.137-1.29c0.256-.29.535-0.22,0.624,0.16l0.463,1.97c0.089,0.38.22,0.37,0.293-.01l0.991-5.19c-0.026,0-.05.01-0.077,0.01a3.453,3.453,0,0,1-2.56-1.14Zm5.1,2.58,0.5-1.59a0.338,0.338,0,0,1,.645-0.12l1.11,1.42c0.239,0.3.377,0.24,0.307-.14l-1.317-7.24a3.483,3.483,0,0,1-2.312.94l0.771,6.7C800.515,3170.07,800.645,3170.09,800.763,3169.72Zm8.664-30.73H772.573a2.542,2.542,0,0,0-2.562,2.51v24.19a2.535,2.535,0,0,0,2.562,2.51h22.455l-0.152-.17a1.4,1.4,0,0,1-.222-1.24l0.176-.8H772.573a0.344,0.344,0,0,1-.366-0.3V3141.5a0.344,0.344,0,0,1,.366-0.3h36.854a0.345,0.345,0,0,1,.366.3v24.19a0.338,0.338,0,0,1-.366.3h-5.494l0.4,2.21h5.091a2.535,2.535,0,0,0,2.562-2.51V3141.5A2.542,2.542,0,0,0,809.427,3138.99Zm-2.227,25.35a1.471,1.471,0,0,0,1.464-1.48v-18.75a1.469,1.469,0,0,0-1.464-1.47H774.442a1.469,1.469,0,0,0-1.464,1.47v18.75a1.471,1.471,0,0,0,1.464,1.48h20.746l0.629-2.84a4.582,4.582,0,1,1,7.322.29l0.464,2.55h3.6Zm-30.5-18.14h27.573a0.37,0.37,0,0,1,0,.74H776.7A0.37,0.37,0,0,1,776.7,3146.2Zm0,5.43a0.365,0.365,0,1,1,0-.73h27.573a0.365,0.365,0,1,1,0,.73H776.7Z' transform='translate%28-770 -3139%29'/%3E%3C/svg%3E%0A&quot;);"></span>
                                    </div>
                                    <div class="item__title">Сертификаты по 4 направлениям продуктов</div>
                                    <div class="item__text">Квалификация специалистов iMedia Solutions подтверждена
                                        сертификатами по четырем направлениям: "Интеграция с 1С", "Битрикс24",
                                        "Корпоративный портал", "Композитный сайт".
                                    </div>
                                    <div class="item__btn"><a
                                                href="../upload/iblock/34b/34b8085fa1e9379527e16d22a2d4c270.jpg"
                                                rel="certificate" class="btn btn-grey js-certificate fancybox">Смотреть
                                            сертификаты</a><a
                                                href="../upload/iblock/1ae/1ae26f25b7a75569c5551bb06b147e7c.jpg"
                                                rel="certificate" class="fancybox" style="display:none;"></a><a
                                                href="../upload/iblock/bf6/bf63ee14f8d2d1eb633ab481e3f5e8e0.jpg"
                                                rel="certificate" class="fancybox" style="display:none;"></a><a
                                                href="../upload/iblock/4d1/4d1c2f7a9c3b99a7395dd6438d234fed.jpg"
                                                rel="certificate" class="fancybox" style="display:none;"></a><a
                                                href="../upload/iblock/58f/58f819568cb701e926868674020755c0.jpg"
                                                rel="certificate" class="fancybox" style="display:none;"></a></div>
                                </div>
                            </div>
                            <div class="three columns" id="bx_651765591_118">
                                <div class="item">
                                    <div class="item__img wow fadeIn" data-wow-delay="0.5s"><span
                                                style="background-image: url(&quot;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='26' height='47' viewBox='-284 397.9 26 47' style='enable-background:new -284 397.9 26 47;'%3E%3Cstyle type='text/css'%3E .st0%7Bfill:%23FFBC1A;%7D .st1%7Bfill:%23FFFFFF;%7D .st2%7Bfont-family:'Arial';%7D .st3%7Bfont-size:16px;%7D%0A%3C/style%3E%3Cpath class='st0' d='M-267.1,417.2l6.2-13.9l-5.6-5.4l-4.4,10.8L-267.1,417.2z M-270.6,404.5l2.7-6.6h-8.2l3,6.6 H-270.6L-270.6,404.5z M-267.8,418.8l-9.5-20.9l-5.6,5.4l7.7,15.5H-267.8z M-271,419.6c-7,0.2-12.5,6-12.3,13c0.2,7,6,12.5,13,12.3 c6.9-0.2,12.3-5.8,12.3-12.7C-258.1,425.1-263.9,419.5-271,419.6L-271,419.6z M-260.7,432.6c-0.4,0.8-1,1.4-1.9,1.6 c-0.5-1.7,0.5-3.5,2.2-4.1C-260.1,431-260.2,431.9-260.7,432.6L-260.7,432.6z M-261.7,426.8c1,1.5,0.6,3.5-0.7,4.6 C-263.5,429.9-263.1,427.9-261.7,426.8L-261.7,426.8z M-260.2,433.7c0,0.9-0.4,1.7-1.1,2.2c-0.6,0.6-1.5,1-2.3,0.9 C-263.5,435.1-262,433.7-260.2,433.7L-260.2,433.7z M-280.3,426.8c1.4,1.1,1.8,3.1,0.7,4.6C-280.9,430.3-281.2,428.3-280.3,426.8 L-280.3,426.8z M-281.6,430.2c1.7,0.6,2.7,2.3,2.2,4.1c-0.8-0.2-1.5-0.8-1.9-1.6C-281.8,431.9-281.9,431-281.6,430.2L-281.6,430.2z M-278.3,436.9c-0.9,0-1.7-0.3-2.3-0.9c-0.7-0.5-1.1-1.3-1.1-2.2C-280,433.7-278.5,435.1-278.3,436.9L-278.3,436.9z M-280.7,437.2 c1.7-0.6,3.6,0.2,4.3,1.9c-0.8,0.3-1.7,0.3-2.5-0.1C-279.8,438.6-280.4,438-280.7,437.2L-280.7,437.2z M-276.3,441.2 c-0.9,0-1.7-0.4-2.3-1.1c1.5-1.1,3.5-0.9,4.7,0.4C-274.6,441.1-275.4,441.3-276.3,441.2L-276.3,441.2z M-269.9,443.8 c-0.4-0.1-0.8-0.4-0.9-0.8c0.1-0.1,0.1-0.3,0-0.4c-0.1-0.1-0.3-0.1-0.4,0s-0.1,0.3,0,0.4c0,0,0,0,0,0c-0.2,0.4-0.5,0.7-0.9,0.8 c-0.4-0.6-0.2-1.4,0.4-1.8c0.6-0.4,1.4-0.2,1.8,0.4C-269.6,442.8-269.6,443.4-269.9,443.8L-269.9,443.8z M-268.9,442.5 c-0.5-1.2-1.8-1.7-2.9-1.2c-0.6,0.2-1,0.7-1.2,1.2c-0.8,0.3-1.8,0.2-2.5-0.3c2.9-1.5,6.3-1.5,9.2,0 C-267.1,442.6-268.1,442.7-268.9,442.5z M-265.7,441.2c-0.9,0.1-1.8-0.1-2.4-0.6c1.2-1.3,3.3-1.5,4.7-0.4 C-264,440.8-264.8,441.2-265.7,441.2z M-263.1,438.9c-0.8,0.4-1.7,0.5-2.5,0.1c0.7-1.6,2.6-2.5,4.3-1.9 C-261.6,438-262.2,438.6-263.1,438.9z'/%3E%3Ctext transform='matrix%281 0 0 1 -275.3602 436.8928%29' class='st1 st2 st3'%3E5%3C/text%3E%3C/svg%3E%0A&quot;);"></span>
                                    </div>
                                    <div class="item__title">Монитор качества</div>
                                    <div class="item__text">Являясь участниками программы, без опасений проходим все
                                        внутренние тесты на проверку качества и соответствия кода, настроек, дизайна,
                                        уровня производительности и безопасности. Каждая наша разработка соответствует
                                        всем стандартам 1С-Битрикс.
                                    </div>
                                    <div class="item__btn"><a
                                                href="../upload/iblock/45b/45b3898fd7036427995adb3d7c73c4e5.jpg"
                                                rel="certificate" class="btn btn-grey js-certificate fancybox">Смотреть
                                            сертификаты</a><a
                                                href="../upload/iblock/ba7/ba705c1cd6089f0a65a011e4207129df.jpg"
                                                rel="certificate" class="fancybox" style="display:none;"></a><a
                                                href="../upload/iblock/e35/e35f64d497d133b4d3f815c58e19139e.jpg"
                                                rel="certificate" class="fancybox" style="display:none;"></a></div>
                                </div>
                            </div>
                            <div class="three columns" id="bx_651765591_119">
                                <div class="item">
                                    <div class="item__img wow fadeIn" data-wow-delay="0.75s"><span
                                                style="background-image: url(&quot;data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACsAAAArCAMAAADWg4HyAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAACglBMVEX/vBr/////vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBr/vBoAAADNAVp8AAAA1HRSTlMAAAUPFRkcGBQOAiE/c6K7ytLX0Mi5ml81DFSR+vTCcSQBLGyAYGWvzv7cOjA0RmJ0Th4KA+qIJiDevUFd7LYHPjw957gdZqulhUIIv+/947Vq5DF34fJMQ8P592QaqfOBUrASt/yqN0+bVX2WC1GQzXUR1nzTJdnxM0iT4nrHBK2oE8nMCU3YguvtjFfRR2+EfyeO6TgfpN2jRJna5VgGLbIWxReddvtKOfb4wNSei2FJKDbmibHPxin16LrLs0vVn2hZaWOXEA1abXmSlUV7oX6+pmS5HTcAAAABYktHRNV+vDsTAAAACXBIWXMAAAsSAAALEgHS3X78AAAAB3RJTUUH4AoHCyY048gJSgAAAytJREFUOMuFlWdfE0EQhzekmADSpIWiCcRgkJ7Qq0a6gVCCCKKIgkjEAtKbgmLBAlhAUYhRRAVpCmLviL3dBzK5veTGmOC+uN2ZeX57s3P/nUPIdFgxWWzOCi7PGpsMepiANrYr7ewdHJ1WObu4urnzLbNWHp5OXgQ9vFevEZhnhT6+It+1YpHfOglB+NuJ1wcEBgWHhPLNsfwwqYxchBDhEZGGV/GirC3lqxvB0TGxwLR8NoTi4hNs0H/YxLCkDRwrtFG+KdngSk5xTU1Lz8g0YbnizQpJVrYyxzk3z5B/voqsRoH9FhlkC7cWUXUq3kahJduNtdtRyqTZnSqjv0yK0V27QaHLK7gGdk+00auopIq9t7hKLaHpfTLMMu1pn3M1ZvfLD6CSg7RfEYzZQ+BtIRitSa0VIHS4iA7UcfRsfQPtaWzCbLN3i+4Z1Qp2adOzbsDRzsLZRhQE6KaOIyBUa8NA0jLgOIq37ew6dlw/i8HpyrsZiH0CsCcxW3/KU6ifA0+DWI8MNQPFep3BbCURR85hZwHb1alTIDjaOcyeJwLJmQeqSURzUC8w45Mw26foJ2cZPFy4D7oAzIuXMJuuuowXAyBIxJplewYpXV6BrC0qBZbiKi7v0DUOXlSA4PVIFAzrMEwiI0oHLrmQJsCPUYI0cmCnY5X73+ggF9qbIKbko1tOwPYjGY2kD6crAFIh1Aw0MgrsOjLP22N3MHv3Hh0aL9RppxAmHKSXzMR9qgy+QA8xnTqWB8UzqUuiuXGKutpKIJ1pUuszQKa5sygxTf4As7MPwbZ8khXOQTWh0LEe6ir30e7sDOpuaudp56D60UQNRlkLtFBSjHfeBiRGOD42bPvE4HqaI6R7ibbF+EWeaSjU3Zhte+VfPUo4MzA4njXm/TyfSgBpX+S+HB561er4+k31P30y8O27993GvsdfVIj1imB9WKanUruOZqmtLPZUJASoTxkhMrjNsUuCZCa56GCH1BKNmkx9Cpx+8/8Azse23vxPOZ8nG3S9SaKa/zL3dVH0bcl8vtZN3xfKQaUbflSxl/lfVAs8fk4qf024/J6azuOanO0Pi7GCBfqfeA4AAAAASUVORK5CYII=&quot;);"></span>
                                    </div>
                                    <div class="item__title">Аккредитация ЕБРР</div>
                                    <div class="item__text">Наша компания получила аккредитацию в качестве консультанта
                                        Европейского банка реконструкции и развития. Программа – BAS, направление –
                                        Информационные технологии и маркетинг.
                                    </div>
                                    <div class="item__btn"><a
                                                href="../upload/iblock/262/262ca83395d3b19e15134d062f712320.jpg"
                                                rel="certificate" class="btn btn-grey js-certificate fancybox">Смотреть
                                            сертификаты</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-agile">
                <div class="container">
                    <div class="agile">
                        <div class="row">
                            <div class="six columns">
                                <div class="agile__img"><img src="../local/templates/main/images/agile.png" alt="agile">
                                </div>
                            </div>
                            <div class="six columns">
                                <div class="agile__info">
                                    <div class="section__title">Управление проектами с помощью Agile</div>
                                    <div class="section__text"><p>Agile – методология, которая одновременно обеспечивает
                                            быстрый результат, высокую гибкость, постоянное взаимодействие разработчика
                                            и клиента, командную работу и вместе с тем – самостоятельное принятие
                                            решений каждым специалистам, а также высокий темп работы с нацеленностью на
                                            достижение цели.</p>
                                        <p>Мы используем такие методики Agile как Scrum, Kanban, которые позволяют
                                            быстро представить проект и оценить его эффективность, а также работаем по
                                            Waterfall, при необходимости комбинируя методологии. В результате, процесс
                                            работы чёткий и отлаженный, каждая сторона в курсе всех нюансов и
                                            перспектив, доработки внедряются быстро, а на первом месте всегда стоят
                                            потребности клиента и грамотная разработка ПО, а не «бумажная» работа или
                                            обсуждение условий контракта.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-support">
                <div class="container">
                    <div class="support">
                        <div class="section__img"></div>
                        <div class="section__title">Техническая поддержка</div>
                        <div class="section__text"><p>Мы взаимодействуем с клиентом на каждой стадии разработки проекта:
                                любой шаг выносится на обсуждение, а конечное решение принимается с учётом максимальной
                                продуктивности и пожеланий заказчика. Техническая поддержка – обязательный этап нашей
                                работы после того, как проект уже запущен: мы отслеживаем грамотность, скорость и
                                непрерывность работы ПО. А при желании – дополняем продукт новыми опциями и меняем
                                существующие в зависимости от поведения пользователей.</p></div>
                        <div>
                            <div class="offer__btn">
                                <a href="../podderzhka-saitov/index.html" class="btn btn-primary">Подробнее</a></div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="persona aboutus-persona">
                <div class="container">
                    <div class="section__pre">Более 30 профессионалов своего дела будут работать с Вашим проектом</div>
                    <h2 class="section__title">Знакомьтесь с нашей командой</h2>
                    <div class="slider slider_persona">
                        <div class="persona__wrap">
                            <figure class="persona__item" id="bx_1373509569_18"><img
                                        src="../upload/resize_cache/iblock/203/420_515_2/img_7911.png" alt="Сергей">
                                <figcaption class="persona__info">
                                    <div class="persona__name">Сергей</div>
                                    <div class="persona__prof">Генеральный директор</div>
                                </figcaption>
                            </figure>
                            <figure class="persona__item" id="bx_1373509569_40"><img
                                        src="../upload/resize_cache/iblock/ac0/420_515_2/img_7636.png" alt="Константин">
                                <figcaption class="persona__info">
                                    <div class="persona__name">Константин</div>
                                    <div class="persona__prof">Исполнительный директор</div>
                                </figcaption>
                            </figure>
                            <figure class="persona__item" id="bx_1373509569_1927"><img
                                        src="../upload/resize_cache/iblock/f11/420_515_2/img_7381.png" alt="Диана">
                                <figcaption class="persona__info">
                                    <div class="persona__name">Диана</div>
                                    <div class="persona__prof">Руководитель отдела управления проектами</div>
                                </figcaption>
                            </figure>
                            <figure class="persona__item" id="bx_1373509569_1923"><img
                                        src="../upload/resize_cache/iblock/a4b/420_515_2/img_7188.png" alt="Алексей">
                                <figcaption class="persona__info">
                                    <div class="persona__name">Алексей</div>
                                    <div class="persona__prof">Директор по развитию</div>
                                </figcaption>
                            </figure>
                            <figure class="persona__item" id="bx_1373509569_1938"><img
                                        src="../upload/resize_cache/iblock/30d/420_515_2/img_7588.png" alt="Евгений">
                                <figcaption class="persona__info">
                                    <div class="persona__name">Евгений</div>
                                    <div class="persona__prof">Арт-директор</div>
                                </figcaption>
                            </figure>
                            <figure class="persona__item" id="bx_1373509569_1931"><img
                                        src="../upload/resize_cache/iblock/3be/420_515_2/img_7350.png" alt="Виктория">
                                <figcaption class="persona__info">
                                    <div class="persona__name">Виктория</div>
                                    <div class="persona__prof">HR-директор</div>
                                </figcaption>
                            </figure>
                            <figure class="persona__item" id="bx_1373509569_1920"><img
                                        src="../upload/resize_cache/iblock/3a8/420_515_2/img_0479.png" alt="Егор">
                                <figcaption class="persona__info">
                                    <div class="persona__name">Егор</div>
                                    <div class="persona__prof">Project менеджер</div>
                                </figcaption>
                            </figure>
                            <figure class="persona__item" id="bx_1373509569_1930"><img
                                        src="../upload/resize_cache/iblock/c85/420_515_2/img_8055.png" alt="Алексей">
                                <figcaption class="persona__info">
                                    <div class="persona__name">Алексей</div>
                                    <div class="persona__prof">Frontend разработчик</div>
                                </figcaption>
                            </figure>
                            <figure class="persona__item" id="bx_1373509569_1929"><img
                                        src="../upload/resize_cache/iblock/246/420_515_2/img_8118.png" alt="Елена">
                                <figcaption class="persona__info">
                                    <div class="persona__name">Елена</div>
                                    <div class="persona__prof">Sales менеджер</div>
                                </figcaption>
                            </figure>
                            <figure class="persona__item" id="bx_1373509569_1924"><img
                                        src="../upload/resize_cache/iblock/743/420_515_2/img_7697.png" alt="Сергей">
                                <figcaption class="persona__info">
                                    <div class="persona__name">Сергей</div>
                                    <div class="persona__prof">Bitrix разработчик</div>
                                </figcaption>
                            </figure>
                            <figure class="persona__item" id="bx_1373509569_1934"><img
                                        src="../upload/resize_cache/iblock/73d/420_515_2/img_0533.png" alt="Валерий">
                                <figcaption class="persona__info">
                                    <div class="persona__name">Валерий</div>
                                    <div class="persona__prof">Laravel разработчик</div>
                                </figcaption>
                            </figure>
                            <figure class="persona__item" id="bx_1373509569_1925"><img
                                        src="../upload/resize_cache/iblock/45f/420_515_2/img_7212.png" alt="Марина">
                                <figcaption class="persona__info">
                                    <div class="persona__name">Марина</div>
                                    <div class="persona__prof">Frontend разработчик</div>
                                </figcaption>
                            </figure>
                            <figure class="persona__item" id="bx_1373509569_1943"><img
                                        src="../upload/resize_cache/iblock/511/420_515_2/img_7243.png" alt="Денис">
                                <figcaption class="persona__info">
                                    <div class="persona__name">Денис</div>
                                    <div class="persona__prof">Project менеджер</div>
                                </figcaption>
                            </figure>
                            <figure class="persona__item" id="bx_1373509569_1942"><img
                                        src="../upload/resize_cache/iblock/026/420_515_2/img_0420.png" alt="Вячеслав">
                                <figcaption class="persona__info">
                                    <div class="persona__name">Вячеслав</div>
                                    <div class="persona__prof">Laravel разработчик</div>
                                </figcaption>
                            </figure>
                            <figure class="persona__item" id="bx_1373509569_1921"><img
                                        src="../upload/resize_cache/iblock/473/420_515_2/img_7150.png" alt="Анастасия">
                                <figcaption class="persona__info">
                                    <div class="persona__name">Анастасия</div>
                                    <div class="persona__prof">Bitrix разработчик</div>
                                </figcaption>
                            </figure>
                            <figure class="persona__item" id="bx_1373509569_286"><img
                                        src="../upload/resize_cache/iblock/ff9/420_515_2/img_0372.png" alt="Вадим">
                                <figcaption class="persona__info">
                                    <div class="persona__name">Вадим</div>
                                    <div class="persona__prof">Backend разработчик</div>
                                </figcaption>
                            </figure>
                            <figure class="persona__item" id="bx_1373509569_1922"><img
                                        src="../upload/resize_cache/iblock/69b/420_515_2/img_0340.png" alt="Виктор">
                                <figcaption class="persona__info">
                                    <div class="persona__name">Виктор</div>
                                    <div class="persona__prof">Bitrix разработчик</div>
                                </figcaption>
                            </figure>
                            <figure class="persona__item" id="bx_1373509569_1936"><img
                                        src="../upload/resize_cache/iblock/f07/420_515_2/img_7823.png" alt="Татьяна">
                                <figcaption class="persona__info">
                                    <div class="persona__name">Татьяна</div>
                                    <div class="persona__prof">QA специалист</div>
                                </figcaption>
                            </figure>
                            <figure class="persona__item" id="bx_1373509569_1933"><img
                                        src="../upload/resize_cache/iblock/4f9/420_515_2/img_7505.png" alt="Роман">
                                <figcaption class="persona__info">
                                    <div class="persona__name">Роман</div>
                                    <div class="persona__prof">Sales менеджер</div>
                                </figcaption>
                            </figure>
                            <figure class="persona__item" id="bx_1373509569_1932"><img
                                        src="../upload/resize_cache/iblock/4bf/420_515_2/img_8027.png" alt="Сергей">
                                <figcaption class="persona__info">
                                    <div class="persona__name">Сергей</div>
                                    <div class="persona__prof">Frontend разработчик</div>
                                </figcaption>
                            </figure>
                            <figure class="persona__item" id="bx_1373509569_1937"><img
                                        src="../upload/resize_cache/iblock/327/420_515_2/img_7287.png" alt="Анна">
                                <figcaption class="persona__info">
                                    <div class="persona__name">Анна</div>
                                    <div class="persona__prof">Дизайнер</div>
                                </figcaption>
                            </figure>
                            <figure class="persona__item" id="bx_1373509569_1928"><img
                                        src="../upload/resize_cache/iblock/e86/420_515_2/img_7102.png" alt="Руслан">
                                <figcaption class="persona__info">
                                    <div class="persona__name">Руслан</div>
                                    <div class="persona__prof">Project менеджер</div>
                                </figcaption>
                            </figure>
                            <figure class="persona__item" id="bx_1373509569_1939"><img
                                        src="../upload/resize_cache/iblock/9df/420_515_2/img_0441.png" alt="Илья">
                                <figcaption class="persona__info">
                                    <div class="persona__name">Илья</div>
                                    <div class="persona__prof">Bitrix разработчик</div>
                                </figcaption>
                            </figure>
                            <figure class="persona__item" id="bx_1373509569_1926"><img
                                        src="../upload/resize_cache/iblock/c34/420_515_2/img_7436.png" alt="Валерия">
                                <figcaption class="persona__info">
                                    <div class="persona__name">Валерия</div>
                                    <div class="persona__prof">Project менеджер</div>
                                </figcaption>
                            </figure>
                            <figure class="persona__item" id="bx_1373509569_1940"><img
                                        src="../upload/resize_cache/iblock/04b/420_515_2/img_0513.png" alt="Леонид">
                                <figcaption class="persona__info">
                                    <div class="persona__name">Леонид</div>
                                    <div class="persona__prof">Bitrix разработчик</div>
                                </figcaption>
                            </figure>
                            <figure class="persona__item" id="bx_1373509569_1941"><img
                                        src="../upload/resize_cache/iblock/eac/420_515_2/img_7545.png" alt="Ян">
                                <figcaption class="persona__info">
                                    <div class="persona__name">Ян</div>
                                    <div class="persona__prof">Дизайнер</div>
                                </figcaption>
                            </figure>
                            <figure class="persona__item" id="bx_1373509569_1944"><img
                                        src="../upload/resize_cache/iblock/153/420_515_2/img_7755.png" alt="Александр">
                                <figcaption class="persona__info">
                                    <div class="persona__name">Александр</div>
                                    <div class="persona__prof">Backend разработчик</div>
                                </figcaption>
                            </figure>
                            <figure class="persona__item" id="bx_1373509569_1945"><img
                                        src="../upload/resize_cache/iblock/4df/420_515_2/img_7878.png" alt="Евгений">
                                <figcaption class="persona__info">
                                    <div class="persona__name">Евгений</div>
                                    <div class="persona__prof">QA специалист</div>
                                </figcaption>
                            </figure>
                            <figure class="persona__item" id="bx_1373509569_1946"><img
                                        src="../upload/resize_cache/iblock/60c/420_515_2/img_7113.png" alt="Эдуард">
                                <figcaption class="persona__info">
                                    <div class="persona__name">Эдуард</div>
                                    <div class="persona__prof">Frontend разработчик</div>
                                </figcaption>
                            </figure>
                            <figure class="persona__item" id="bx_1373509569_1935"><img
                                        src="../upload/resize_cache/iblock/08f/420_515_2/img_7981.png" alt="Виталий">
                                <figcaption class="persona__info">
                                    <div class="persona__name">Виталий</div>
                                    <div class="persona__prof">Frontend разработчик</div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </section>
            <section class="video-section">
                <div class="container">
                    <div class="video">
                        <a class="video__link" href="https://youtu.be/MajttfoeGZ8">
                            <picture>
                                <source srcset="https://i.ytimg.com/vi_webp/MajttfoeGZ8/maxresdefault.webp"
                                        type="image/webp">
                                <img class="video__media" src="../../i.ytimg.com/vi/MajttfoeGZ8/maxresdefault.jpg"
                                     alt="iMedia Solutions - краткая видео-презентация компании">
                            </picture>
                        </a>
                        <button class="video__button" type="button" aria-label="Запустить видео">
                            <svg width="68" height="48" viewBox="0 0 68 48">
                                <path class="video__button-shape"
                                      d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z"></path>
                                <path class="video__button-icon" d="M 45,24 27,14 27,34"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </section>
            <section class="aboutus-clients">
                <div class="container">
                    <div class="section__img wow bounceIn"></div>
                    <div class="section__pre">Вы тоже можете появиться здесь</div>
                    <h2 class="section__title">Наши клиенты</h2>
                    <div class="client__wrap">
                        <div class="client__item" id="bx_3485106786_309">
                            <div class="client__item-wrap">
                                <div class="client__img greyimg"><img
                                            src="../upload/iblock/75e/75ec22f949949c0fb22c2509b7594bbe.png"
                                            alt="ООО &quot;Редакция журнала &quot;РЖД-Партнер&quot;"></div>
                                <div class="client__info">
                                    <div class="client__title">ООО &quot;Редакция журнала &quot;РЖД-Партнер&quot;</div>
                                    <div class="client__text">Деловой журнал Российских железных дорог, издаваемый с
                                        1998 года
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="client__item" id="bx_3485106786_1093">
                            <div class="client__item-wrap">
                                <div class="client__img greyimg"><img
                                            src="../upload/resize_cache/iblock/c0f/220_220_1/zarina.jpg" alt="Zarina">
                                </div>
                                <div class="client__info">
                                    <div class="client__title">Zarina</div>
                                    <div class="client__text">Бренд открывает секрет настоящей женственности, создавая
                                        модную, стильную и женственную одежду
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="client__item" id="bx_3485106786_310">
                            <div class="client__item-wrap">
                                <div class="client__img greyimg"><img
                                            src="../upload/iblock/3f5/3f52f55a489b0947932ff06a2348c19e.png"
                                            alt="SIA &quot;EK Trade&quot;"></div>
                                <div class="client__info">
                                    <div class="client__title">SIA &quot;EK Trade&quot;</div>
                                    <div class="client__text">Компания, занимающаяся оптовой торговлей твёрдым, жидким и
                                        газообразным топливом, владеющая сетью автозаправочных станций в Латвии
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="client__item" id="bx_3485106786_308">
                            <div class="client__item-wrap">
                                <div class="client__img greyimg"><img
                                            src="../upload/iblock/ccf/ccf7a9d75d3fe958a971ba3878445a4b.png"
                                            alt="MYLLYN PARAS OY KONSERNI"></div>
                                <div class="client__info">
                                    <div class="client__title">MYLLYN PARAS OY KONSERNI</div>
                                    <div class="client__text">Финская компания, производитель каш и хлопьев под брендами
                                        &quot;1928&quot;, &quot;Тигр&quot;, &quot;Био-Био&quot; и &quot;Angry Birds&quot;
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="client__item" id="bx_3485106786_1085">
                            <div class="client__item-wrap">
                                <div class="client__img greyimg"><img
                                            src="../upload/resize_cache/iblock/cbf/220_220_1/melon-fashion-group.png"
                                            alt="АО &quot;Мэлон Фэшн Груп&quot;"></div>
                                <div class="client__info">
                                    <div class="client__title">АО &quot;Мэлон Фэшн Груп&quot;</div>
                                    <div class="client__text">Российский ретейлер модного бизнеса, производитель женской
                                        и мужской одежды
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="client__item" id="bx_3485106786_1090">
                            <div class="client__item-wrap">
                                <div class="client__img greyimg"><img
                                            src="../upload/resize_cache/iblock/bec/220_220_1/4901045_300x300.jpg"
                                            alt="АО «ПРИН»"></div>
                                <div class="client__info">
                                    <div class="client__title">АО «ПРИН»</div>
                                    <div class="client__text">Один из лидеров рынка спутниковых навигационных и
                                        геодезических систем в России. Была основана в 1990 году
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="client__item" id="bx_3485106786_316">
                            <div class="client__item-wrap">
                                <div class="client__img greyimg"><img
                                            src="../upload/iblock/ca6/ca619eacbf44247035352c94a9b59c1b.png"
                                            alt="ГПО &quot;Белэнерго&quot;"></div>
                                <div class="client__info">
                                    <div class="client__title">ГПО &quot;Белэнерго&quot;</div>
                                    <div class="client__text">Государственная энергетическая компания, осуществляющая
                                        управление хозяйственной деятельностью электроэнергетического комплекса РБ
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="client__item" id="bx_3485106786_1045">
                            <div class="client__item-wrap">
                                <div class="client__img greyimg"><img src="../upload/iblock/6ea/logotip-slavkaliy2.png"
                                                                      alt="ИООО &quot;Славкалий&quot;"></div>
                                <div class="client__info">
                                    <div class="client__title">ИООО &quot;Славкалий&quot;</div>
                                    <div class="client__text">Инвестиционный проект между Республикой Беларусь и
                                        компанией GCM&nbsp;&nbsp;GLOBAL ENERGY PLC по строительству
                                        горно-обогатительного комплекса&nbsp;&nbsp;мощностью от 1,1 до 2,0 млн. тонн
                                        хлорида калия
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="client__item" id="bx_3485106786_311">
                            <div class="client__item-wrap">
                                <div class="client__img greyimg"><img
                                            src="../upload/iblock/b4b/b4bf1657a35d0d981717fc63a607bad9.png"
                                            alt="ООО «Торговый дом Тиана» "></div>
                                <div class="client__info">
                                    <div class="client__title">ООО «Торговый дом Тиана»</div>
                                    <div class="client__text">Один из лидеров среди производителей косметики в России и
                                        странах СНГ, имеет сеть монобрендовых магазинов «Teana»
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="client__item" id="bx_3485106786_1043">
                            <div class="client__item-wrap">
                                <div class="client__img greyimg"><img src="../upload/iblock/3d1/belgazprombank.png"
                                                                      alt="ОАО «Белгазпромбанк»"></div>
                                <div class="client__info">
                                    <div class="client__title">ОАО «Белгазпромбанк»</div>
                                    <div class="client__text">Белорусский коммерческий банк, основными акционерами
                                        которого являются «Газпром» и «Газпромбанк»
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="client__btn wow lightSpeedIn"><a href="../order/index.html" class="btn btn-green">Стать
                            нашим клиентом</a></div>
                </div>
            </section>
            <section class="aboutus-opinion" id="reviews">
                <div class="container">
                    <div class="section__pre">Нам доверяют и благодарят</div>
                    <h2 class="section__title">Отзывы клиентов</h2>
                    <div class="aboutus-opinion__group">
                        <div class="item" id="bx_3099439860_1911" itemscope itemtype="http://schema.org/Review">
			<span itemprop="itemReviewed" itemscope itemtype="http://schema.org/Organization">
				<!--noindex--><a rel="nofollow" itemprop="url" href="../index.html"></a><!--/noindex-->
				<meta itemprop="name" content="iMedia Solutions">
				<meta itemprop="telephone" content="">
				<meta itemprop="telephone" content="+74991135035">
				<meta itemprop="address" content="г. Москва, проспект Мира,<br> дом 70, офис 66">
			</span>
                            <!--noindex--><a rel="nofollow" itemprop="url" href="index.html#reviews"></a><!--/noindex-->
                            <meta itemprop="datePublished" content="2021-03-16">
                            <div class="item__wrap">
                                <div class="item__name" itemprop="author">ООО &quot;Комус&quot;</div>
                                <div class="item__post">Департамент бизнес-технологий ООО &quot;Комус&quot;</div>
                                <div class="item__text" itemprop="description">Нам бы хотелось отметить
                                    высокопрофессиональную работу сотрудников и внимательный подход к требованиям нашей
                                    компании. Весь процесс в iMedia Solutions нацелен на разработку качественного
                                    продукта. Также сотрудники компании всегда консультируют и дают грамотные
                                    рекомендации для улучшения работы в целом.
                                </div><!--noindex-->
                                <div class="item__view"><a target="_blank" rel="nofollow"
                                                           href="../upload/iblock/c84/komus.pdf"><span>Смотреть - </span><strong>Отзыв.PDF</strong></a>
                                </div><!--/noindex--></div>
                        </div>
                        <div class="item" id="bx_3099439860_1367" itemscope itemtype="http://schema.org/Review">
			<span itemprop="itemReviewed" itemscope itemtype="http://schema.org/Organization">
				<!--noindex--><a rel="nofollow" itemprop="url" href="../index.html"></a><!--/noindex-->
				<meta itemprop="name" content="iMedia Solutions">
				<meta itemprop="telephone" content="">
				<meta itemprop="telephone" content="+74991135035">
				<meta itemprop="address" content="г. Москва, проспект Мира,<br> дом 70, офис 66">
			</span>
                            <!--noindex--><a rel="nofollow" itemprop="url" href="index.html#reviews"></a><!--/noindex-->
                            <meta itemprop="datePublished" content="2018-04-03">
                            <div class="item__wrap">
                                <div class="item__name" itemprop="author">Тарасов Илья</div>
                                <div class="item__post">Руководитель е-коммерс направления АО &quot;Мэлон Фэшн Групп&quot;</div>
                                <div class="item__text" itemprop="description">За время работы над нашими проектами
                                    Zarina, Love Republic, befree команда специалистов показала себя только с лучшей
                                    стороны. Рекомендуем компанию &quot;Аймедиа Солюшнс&quot; как надежного и
                                    профессионального партнера.
                                </div><!--noindex-->
                                <div class="item__view"><a target="_blank" rel="nofollow"
                                                           href="../upload/iblock/379/otzyv.pdf"><span>Смотреть - </span><strong>Отзыв.PDF</strong></a>
                                </div><!--/noindex--></div>
                        </div>
                        <div class="item" id="bx_3099439860_282" itemscope itemtype="http://schema.org/Review">
			<span itemprop="itemReviewed" itemscope itemtype="http://schema.org/Organization">
				<!--noindex--><a rel="nofollow" itemprop="url" href="../index.html"></a><!--/noindex-->
				<meta itemprop="name" content="iMedia Solutions">
				<meta itemprop="telephone" content="">
				<meta itemprop="telephone" content="+74991135035">
				<meta itemprop="address" content="г. Москва, проспект Мира,<br> дом 70, офис 66">
			</span>
                            <!--noindex--><a rel="nofollow" itemprop="url" href="index.html#reviews"></a><!--/noindex-->
                            <meta itemprop="datePublished" content="2017-02-23">
                            <div class="item__wrap">
                                <div class="item__name" itemprop="author">Жужукало А.С.</div>
                                <div class="item__post">Генеральный директор журнала &quot;РЖД-Партнер&quot;</div>
                                <div class="item__text" itemprop="description">&quot;РЖД-Партнер&quot; выражает
                                    благодарность &quot;Аймедиа Солюшнс&quot;. Работа по проекту была большая и сложная,
                                    однако специалисты компании справились с ней отлично. Изменения затронули внешний
                                    вид и функционал нашего сайта. Спасибо за качественно выполненную работу.
                                </div><!--noindex-->
                                <div class="item__view"><a target="_blank" rel="nofollow"
                                                           href="../upload/iblock/406/4064cea44f821b37d291d8f3ef16a1ad.pdf"><span>Смотреть - </span><strong>Отзыв.PDF</strong></a>
                                </div><!--/noindex--></div>
                        </div>
                        <div class="item" id="bx_3099439860_1124" itemscope itemtype="http://schema.org/Review">
			<span itemprop="itemReviewed" itemscope itemtype="http://schema.org/Organization">
				<!--noindex--><a rel="nofollow" itemprop="url" href="../index.html"></a><!--/noindex-->
				<meta itemprop="name" content="iMedia Solutions">
				<meta itemprop="telephone" content="">
				<meta itemprop="telephone" content="+74991135035">
				<meta itemprop="address" content="г. Москва, проспект Мира,<br> дом 70, офис 66">
			</span>
                            <!--noindex--><a rel="nofollow" itemprop="url" href="index.html#reviews"></a><!--/noindex-->
                            <meta itemprop="datePublished" content="2017-11-23">
                            <div class="item__wrap">
                                <div class="item__name" itemprop="author">Идоядов С.А.</div>
                                <div class="item__post">Генеральный директор ООО &quot;Академ Консалт&quot;</div>
                                <div class="item__text" itemprop="description">Компания &quot;Академ Консалт&quot;
                                    выражает искреннюю признательность коллективу iMedia Solutions за разработку и
                                    создание сайта. Наш сайт отличается ярким дизайном, удобным для использования
                                    интерфейсом и широким спектром интерактивных возможностей.
                                </div><!--noindex-->
                                <div class="item__view"><a target="_blank" rel="nofollow"
                                                           href="../upload/iblock/399/blagodarnost-aymedia.pdf"><span>Смотреть - </span><strong>Отзыв.PDF</strong></a>
                                </div><!--/noindex--></div>
                        </div>
                        <div class="item" id="bx_3099439860_284" itemscope itemtype="http://schema.org/Review">
			<span itemprop="itemReviewed" itemscope itemtype="http://schema.org/Organization">
				<!--noindex--><a rel="nofollow" itemprop="url" href="../index.html"></a><!--/noindex-->
				<meta itemprop="name" content="iMedia Solutions">
				<meta itemprop="telephone" content="">
				<meta itemprop="telephone" content="+74991135035">
				<meta itemprop="address" content="г. Москва, проспект Мира,<br> дом 70, офис 66">
			</span>
                            <!--noindex--><a rel="nofollow" itemprop="url" href="index.html#reviews"></a><!--/noindex-->
                            <meta itemprop="datePublished" content="2017-02-23">
                            <div class="item__wrap">
                                <div class="item__name" itemprop="author">Нормунд Лацис</div>
                                <div class="item__post">Руководитель 4metri</div>
                                <div class="item__text" itemprop="description">&quot;Компания “4 metri” благодарит
                                    команду “iMedia Solutions” за наше &quot;новое лицо&quot; в сети интернет. У нас
                                    было много предложений, но хотелось быть уникальными и именно это предложила
                                    компания “iMedia Solutions”.
                                </div><!--noindex-->
                                <div class="item__view"><a target="_blank" rel="nofollow"
                                                           href="../upload/iblock/962/962e699444c0d59dea31978fc95f66f2.pdf"><span>Смотреть - </span><strong>Отзыв.PDF</strong></a>
                                </div><!--/noindex--></div>
                        </div>
                        <div class="item" id="bx_3099439860_283" itemscope itemtype="http://schema.org/Review">
			<span itemprop="itemReviewed" itemscope itemtype="http://schema.org/Organization">
				<!--noindex--><a rel="nofollow" itemprop="url" href="../index.html"></a><!--/noindex-->
				<meta itemprop="name" content="iMedia Solutions">
				<meta itemprop="telephone" content="">
				<meta itemprop="telephone" content="+74991135035">
				<meta itemprop="address" content="г. Москва, проспект Мира,<br> дом 70, офис 66">
			</span>
                            <!--noindex--><a rel="nofollow" itemprop="url" href="index.html#reviews"></a><!--/noindex-->
                            <meta itemprop="datePublished" content="2017-02-23">
                            <div class="item__wrap">
                                <div class="item__name" itemprop="author">Мартиросов Р. Г.</div>
                                <div class="item__post">Генеральный директор ООО &quot;Кидкер трейдер&quot;</div>
                                <div class="item__text" itemprop="description">&quot;Кидкэр трейдинг&quot; выражает Вам
                                    своё уважение и благодарность, и настоящим сообщает, что в рамках нашего
                                    конструктивного сотрудничества, iMedia Solutions, своевременно, в полном объеме, и
                                    что немаловажно, с гибким и творческим подходом выполнило все принятые на себя
                                    обязательства.
                                </div><!--noindex-->
                                <div class="item__view"><a target="_blank" rel="nofollow"
                                                           href="../upload/iblock/774/774d7cd422aa7bb85216ab16a46ba94e.pdf"><span>Смотреть - </span><strong>Отзыв.PDF</strong></a>
                                </div><!--/noindex--></div>
                        </div>
                        <div class="item" id="bx_3099439860_1102" itemscope itemtype="http://schema.org/Review">
			<span itemprop="itemReviewed" itemscope itemtype="http://schema.org/Organization">
				<!--noindex--><a rel="nofollow" itemprop="url" href="../index.html"></a><!--/noindex-->
				<meta itemprop="name" content="iMedia Solutions">
				<meta itemprop="telephone" content="">
				<meta itemprop="telephone" content="+74991135035">
				<meta itemprop="address" content="г. Москва, проспект Мира,<br> дом 70, офис 66">
			</span>
                            <!--noindex--><a rel="nofollow" itemprop="url" href="index.html#reviews"></a><!--/noindex-->
                            <meta itemprop="datePublished" content="2017-11-20">
                            <div class="item__wrap">
                                <div class="item__name" itemprop="author">А.В. Миргородский</div>
                                <div class="item__post">Индивидуальный предприниматель</div>
                                <div class="item__text" itemprop="description">Вот и настал момент, когда все работы
                                    выполнены, а претензий по работе нет. Все работы выполнены в срок и без нареканий,
                                    что безусловно только радует. Индивидуальный подход - визитная карточка iMedia
                                    Solutions.
                                </div><!--noindex-->
                                <div class="item__view"><a target="_blank" rel="nofollow"
                                                           href="../upload/iblock/2c5/mirgor.pdf"><span>Смотреть - </span><strong>Отзыв.PDF</strong></a>
                                </div><!--/noindex--></div>
                        </div>
                        <div class="item" id="bx_3099439860_748" itemscope itemtype="http://schema.org/Review">
			<span itemprop="itemReviewed" itemscope itemtype="http://schema.org/Organization">
				<!--noindex--><a rel="nofollow" itemprop="url" href="../index.html"></a><!--/noindex-->
				<meta itemprop="name" content="iMedia Solutions">
				<meta itemprop="telephone" content="">
				<meta itemprop="telephone" content="+74991135035">
				<meta itemprop="address" content="г. Москва, проспект Мира,<br> дом 70, офис 66">
			</span>
                            <!--noindex--><a rel="nofollow" itemprop="url" href="index.html#reviews"></a><!--/noindex-->
                            <meta itemprop="datePublished" content="2017-04-19">
                            <div class="item__wrap">
                                <div class="item__name" itemprop="author">Праневич Д.М.</div>
                                <div class="item__post">Директор ООО &quot;Компания А8&quot;</div>
                                <div class="item__text" itemprop="description">Выражаем свою искреннюю благодарность за
                                    отличную работу, которую проделала Ваша компания по созданию и запуску нашего сайта
                                    с нуля.<br/>
                                    Наш сайт получился технически удобным, ярким и современным визуально.
                                </div><!--noindex-->
                                <div class="item__view"><a target="_blank" rel="nofollow"
                                                           href="../upload/iblock/e38/e387676324eafd782250e9d7c8c5d164.pdf"><span>Смотреть - </span><strong>Отзыв.PDF</strong></a>
                                </div><!--/noindex--></div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer class="footer">
            <div id="back-top" class="f-back-top"></div>
            <div class="f-form bg-grey">
                <div id="comp_3a16ee6ac9047a10b660563e277d1ddd">
                    <form class="form _feed" name="SIMPLE_FORM_1" action="https://www.imedia24.ru/about/" method="POST"
                          enctype="multipart/form-data"><input type="hidden" name="bxajaxid"
                                                               id="bxajaxid_3a16ee6ac9047a10b660563e277d1ddd_Ar8Szp"
                                                               value="3a16ee6ac9047a10b660563e277d1ddd"/><input
                                type="hidden" name="AJAX_CALL" value="Y"/><input type="hidden" name="sessid"
                                                                                 id="sessid_1"
                                                                                 value="a8bab331b699814b00127d018c97a84d"/><input
                                type="hidden" name="WEB_FORM_ID" value="1"/>
                        <div class="section__pre">Вы готовы начать работу или получить консультацию?</div>
                        <div class="section__title">Напишите нам</div>
                        <div class="form__block "><input type="text" id="feed_1" class="input" data-valid
                                                         autocomplete="name" placeholder="" name="form_text_1" value=""><label
                                    for="feed_1" class="label">Имя *</label></div>
                        <div class="form__block "><input type="text" id="feed_2" class="input" data-valid
                                                         autocomplete="organization" placeholder="" name="form_text_2"
                                                         value=""><label for="feed_2" class="label">Компания *</label>
                        </div>
                        <div class="form__block "><input type="email" id="feed_3" class="input email" data-valid="email"
                                                         autocomplete="email" placeholder="" name="form_email_3"
                                                         value=""><label for="feed_3" class="label">E-mail *</label>
                        </div>
                        <div class="form__block"><input type="text" id="feed_4" class="input" data-valid="phone"
                                                        autocomplete="tel" placeholder="" name="form_text_4"
                                                        value=""><label for="feed_4" class="label">Телефон *</label>
                        </div>
                        <div class="form__block "><textarea id="feed_5" class="input" data-valid placeholder="" rows="1"
                                                            name="form_textarea_5"></textarea><label for="feed_5"
                                                                                                     class="label">Сообщение
                                *</label></div>
                        <div class="form__block ">
                            <div class="checkbox-wrap"><label class="checkbox"><input data-valid="checkbox"
                                                                                      type="checkbox"
                                                                                      name="form_checkbox_SIMPLE_QUESTION_956[]"
                                                                                      class="checkbox__hidden"
                                                                                      checked="checked" value="91"><span
                                            class="checkbox__showed"></span><span class="checkbox__title">Я согласен на обработку личных данных в соответствии с <a
                                                href="../privacy-policy/index.html" target="_blank">политикой конфиденциальности</a></span></label>
                            </div>
                        </div>
                        <input type="hidden" name="form_text_83" value="/about/"><input type="hidden" name="captcha_sid"
                                                                                        value="094361c7a3b3d59a0653e345badb7f10"/>
                        <div class="g-recaptcha" data-sitekey="6LdqrqkUAAAAAIWCyorcd2Lf7ICsiwBSMrZKccY3"
                             data-size="invisible" data-badge="bottomleft"
                             data-callback="RecaptchaV3GoogleSubmitForm"></div>
                        <input id="captcha_feed" type="text" name="captcha_word" style="display:none" value="6Ldqr"
                               data-valid size="30" maxlength="50" value="" placeholder="Введите символы с картинки"
                               class="input"><br/>
                        <div class="form__btn">
                            <input type="submit" name="web_form_submit"
                                   class="btn btn-green" value="Отправить">
                        </div>
                    </form>
                </div>
            </div>
            <div class="f-map">
                <div id="mapYandex" class="map"></div>
            </div>
        </footer>

    </div>
</div>
<script type="text/javascript" data-skip-moving="true">(function (w, d, n) {
        var cl = "bx-core";
        var ht = d.documentElement;
        var htc = ht ? ht.className : undefined;
        if (htc === undefined || htc.indexOf(cl) !== -1) {
            return;
        }
        var ua = n.userAgent;
        if (/(iPad;)|(iPhone;)/i.test(ua)) {
            cl += " bx-ios";
        } else if (/Android/i.test(ua)) {
            cl += " bx-android";
        }
        cl += (/(ipad|iphone|android|mobile|touch)/i.test(ua) ? " bx-touch" : " bx-no-touch");
        cl += w.devicePixelRatio && w.devicePixelRatio >= 2 ? " bx-retina" : " bx-no-retina";
        var ieVersion = -1;
        if (/AppleWebKit/.test(ua)) {
            cl += " bx-chrome";
        } else if ((ieVersion = getIeVersion()) > 0) {
            cl += " bx-ie bx-ie" + ieVersion;
            if (ieVersion > 7 && ieVersion < 10 && !isDoctype()) {
                cl += " bx-quirks";
            }
        } else if (/Opera/.test(ua)) {
            cl += " bx-opera";
        } else if (/Gecko/.test(ua)) {
            cl += " bx-firefox";
        }
        if (/Macintosh/i.test(ua)) {
            cl += " bx-mac";
        }
        ht.className = htc ? htc + " " + cl : cl;

        function isDoctype() {
            if (d.compatMode) {
                return d.compatMode == "CSS1Compat";
            }
            return d.documentElement && d.documentElement.clientHeight;
        }

        function getIeVersion() {
            if (/Opera/i.test(ua) || /Webkit/i.test(ua) || /Firefox/i.test(ua) || /Chrome/i.test(ua)) {
                return -1;
            }
            var rv = -1;
            if (!!(w.MSStream) && !(w.ActiveXObject) && ("ActiveXObject" in w)) {
                rv = 11;
            } else if (!!d.documentMode && d.documentMode >= 10) {
                rv = 10;
            } else if (!!d.documentMode && d.documentMode >= 9) {
                rv = 9;
            } else if (d.attachEvent && !/Opera/.test(ua)) {
                rv = 8;
            }
            if (rv == -1 || rv == 8) {
                var re;
                if (n.appName == "Microsoft Internet Explorer") {
                    re = new RegExp("MSIE ([0-9]+[\.0-9]*)");
                    if (re.exec(ua) != null) {
                        rv = parseFloat(RegExp.$1);
                    }
                } else if (n.appName == "Netscape") {
                    rv = 11;
                    re = new RegExp("Trident/.*rv:([0-9]+[\.0-9]*)");
                    if (re.exec(ua) != null) {
                        rv = parseFloat(RegExp.$1);
                    }
                }
            }
            return rv;
        }
    })(window, document, navigator);</script>


<link href="../bitrix/cache/css/s1/main/kernel_main/kernel_main6383.css" type="text/css" rel="stylesheet"/>
<link href="../bitrix/cache/css/s1/main/template_85516d83c3b701ff914a79fa7d536582/template_85516d83c3b701ff914a79fa7d536582d1b0.css"
      type="text/css" data-template-style="true" rel="stylesheet"/>

<!-- ROISTAT BEGIN -->
<!-- ROISTAT END -->

<!-- BEGIN JIVOSITE INTEGRATION WITH ROISTAT -->
<!-- END JIVOSITE INTEGRATION WITH ROISTAT -->

<!-- BEGIN JIVOSITE CODE {literal} -->
<!-- {/literal} END JIVOSITE CODE -->
<script>(function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({'gtm.start': new Date().getTime(), event: 'gtm.js'});
        var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src = '../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-TZRSV57');</script>
<script type="text/javascript">if (!window.BX) window.BX = {
        message: function (mess) {
            if (typeof mess == 'object') for (var i in mess) BX.message[i] = mess[i];
            return true;
        }
    };</script>
<script type="text/javascript">(window.BX || top.BX).message({
        'JS_CORE_LOADING': 'Загрузка...',
        'JS_CORE_NO_DATA': '- Нет данных -',
        'JS_CORE_WINDOW_CLOSE': 'Закрыть',
        'JS_CORE_WINDOW_EXPAND': 'Развернуть',
        'JS_CORE_WINDOW_NARROW': 'Свернуть в окно',
        'JS_CORE_WINDOW_SAVE': 'Сохранить',
        'JS_CORE_WINDOW_CANCEL': 'Отменить',
        'JS_CORE_WINDOW_CONTINUE': 'Продолжить',
        'JS_CORE_H': 'ч',
        'JS_CORE_M': 'м',
        'JS_CORE_S': 'с',
        'JSADM_AI_HIDE_EXTRA': 'Скрыть лишние',
        'JSADM_AI_ALL_NOTIF': 'Показать все',
        'JSADM_AUTH_REQ': 'Требуется авторизация!',
        'JS_CORE_WINDOW_AUTH': 'Войти',
        'JS_CORE_IMAGE_FULL': 'Полный размер'
    });</script>
<script type="text/javascript">(window.BX || top.BX).message({
        'LANGUAGE_ID': 'ru',
        'FORMAT_DATE': 'DD.MM.YYYY',
        'FORMAT_DATETIME': 'DD.MM.YYYY HH:MI:SS',
        'COOKIE_PREFIX': 'BITRIX_SM',
        'SERVER_TZ_OFFSET': '10800',
        'SITE_ID': 's1',
        'SITE_DIR': '/',
        'USER_ID': '',
        'SERVER_TIME': '1640713180',
        'USER_TZ_OFFSET': '0',
        'USER_TZ_AUTO': 'Y',
        'bitrix_sessid': 'a8bab331b699814b00127d018c97a84d'
    });</script>
<script type="text/javascript"
        src="../bitrix/cache/js/s1/main/kernel_main/kernel_main4f08.js?1636725317278162"></script>
<script type="text/javascript" src="{{asset('js/kernel_imedia.recaptchaaff8.js')}}"></script>
<script type="text/javascript"
        src="https://maps.google.com/maps/api/js?key=AIzaSyBY3O_FUhfm1y_JhP5ltui16cYuIUWsV_M"></script>
<script type="text/javascript"
        src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=a571d561-8942-4427-be55-5624beee87ff"></script>

<script type="text/javascript">
    BX.setJSList([
        {{asset('js/main/core/core_ajax.js')}},
        {{asset('js/main/json/json2.min.js')}},
        {{asset('js/main/core/core_ls.js')}},
        {{asset('js/main/session.js')}},
        {{asset('js/main/core/core_window.js')}},
        {{asset('js/main/core/core_popup.js')}},
        {{asset('js/main/core/core_date.js')}},
        {{asset('js/main/utils.js')}},
        {{asset('js/vendor/jquery-2.1.1.min.js')}},
        {{asset('js/vendor/video.js')}},
        {{asset('js/vendor/wow.min.js')}},
        {{asset('js/vendor/jquery.fancybox.pack.js')}},
        {{asset('js/vendor/slick.min.js')}},
        {{asset('js/vendor/jquery.easydropdown.min.js')}},
        {{asset('js/vendor/vivus.min.js')}},
        {{asset('js/vendor/imagesloaded.pkgd.min.js')}},
        {{asset('js/vendor/masonry.pkgd.min.js')}},
        {{asset('js/main.js')}}
    ]);
</script>

<script type="text/javascript">
    (function () {
        "use strict";

        var counter = function () {
            var cookie = (function (name) {
                var parts = ("; " + document.cookie).split("; " + name + "=");
                if (parts.length == 2) {
                    try {
                        return JSON.parse(decodeURIComponent(parts.pop().split(";").shift()));
                    } catch (e) {
                    }
                }
            })("BITRIX_CONVERSION_CONTEXT_s1");

            if (cookie && cookie.EXPIRE >= BX.message("SERVER_TIME") && cookie.UNIQUE && cookie.UNIQUE.length > 0) {
                for (var i = 0; i < cookie.UNIQUE.length; i++) {
                    if (cookie.UNIQUE[i] == "conversion_visit_day")
                        return;
                }
            }

            var request = new XMLHttpRequest();
            request.open("POST/index.html", "../bitrix/tools/conversion/ajax_counter.html", true);
            request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            request.send(
                "SITE_ID=" + encodeURIComponent("s1") +
                "&sessid=" + encodeURIComponent(BX.bitrix_sessid()) +
                "&HTTP_REFERER=" + encodeURIComponent(document.referrer)
            );
        };

        if (window.frameRequestStart === true)
            BX.addCustomEvent("onFrameDataReceived", counter);
        else
            BX.ready(counter);
    })();
</script>


<script type="text/javascript" src="{{asset('js/template_560f43fa06c5c964d38be082e06ef3245a50.js')}}"></script>

<script type="text/javascript" src="{{asset('js/html5shiv.min.js')}}"></script>
<script type="text/javascript">
    function _processform_8BACKi() {
        var obForm = top.BX('bxajaxid_d436ad9b77cc655f80f3343068620b5a_8BACKi').form;
        top.BX.bind(obForm, 'submit', function () {
            BX.ajax.submitComponentForm(this, 'comp_d436ad9b77cc655f80f3343068620b5a', true)
        });
        top.BX.removeCustomEvent('onAjaxSuccess', _processform_8BACKi);
    }

    if (top.BX('bxajaxid_d436ad9b77cc655f80f3343068620b5a_8BACKi'))
        _processform_8BACKi();
    else
        top.BX.addCustomEvent('onAjaxSuccess', _processform_8BACKi);
</script>
<script type="text/javascript">
    function _processform_Ar8Szp() {
        var obForm = top.BX('bxajaxid_3a16ee6ac9047a10b660563e277d1ddd_Ar8Szp').form;
        top.BX.bind(obForm, 'submit', function () {
            BX.ajax.submitComponentForm(this, 'comp_3a16ee6ac9047a10b660563e277d1ddd', true)
        });
        top.BX.removeCustomEvent('onAjaxSuccess', _processform_Ar8Szp);
    }

    if (top.BX('bxajaxid_3a16ee6ac9047a10b660563e277d1ddd_Ar8Szp'))
        _processform_Ar8Szp();
    else
        top.BX.addCustomEvent('onAjaxSuccess', _processform_Ar8Szp);
</script>
<script>
    function ReplacePhone() {
        this.currentAttempts = 0;
        this.maxAttempts = 200;
        this.phones = [];

        this.clearPhone = function (phone) {
            return phone.replace(/\D+/g, "");
        };

        this.setPhones = function (phones) {
            var self = this;

            phones.forEach(function (item, key) {
                var cleanPhones = [];

                var cleanPhone = self.clearPhone(item.phone);
                if (cleanPhone.length > 10) {
                    var minPhone = cleanPhone.substr(1);

                    self.phones.push({'phone': "8" + minPhone, 'class': item.class});
                    self.phones.push({'phone': "7" + minPhone, 'class': item.class});
                    self.phones.push({'phone': minPhone, 'class': item.class});
                } else {
                    self.phones.push({'phone': cleanPhone, 'class': item.class});
                }
            });
        };

        this.searchPhone = function (phone) {
            for (var i = 0; i < this.phones.length; i++) {
                if (this.phones[i]['phone'] === phone) {
                    return this.phones[i];
                }
            }
            return false;
        };

        this.start = function () {
            var attempts = 1;
            for (var i = 0; i < attempts; i++) {
                this.foreachChildren('body');
            }
            this.setClassForPhonesOnHref();
        };

        this.foreachChildren = function (elem) {
            var children;
            if (typeof elem == 'string') {
                children = document.querySelector(elem).children;
            } else {
                children = elem.children;
            }

            if (children.length > 0) {
                for (var i = 0; i < children.length; i++) {
                    if (children[i].tagName != "SCRIPT") {
                        this.foreachChildren(children[i]);
                    }
                }
            }

            if (elem.tagName !== "BODY") {
                this.findPhonesOnElement(elem);
            }
        };

        this.findPhonesOnElement = function (elem = 'body') {
            var myArray;
            var html = elem.outerHTML;
            var regex = /(roistat-phone[^>]*?)?>[^<>]*?((\+?\d+[\s\-\.]?)?((\(\d+\)|\d+)[\s\-\.]?)?(\d[\s\-\.]?){6,7}\d)[^<>]*?</gm;
            while ((myArray = regex.exec(html)) != null) {
                this.replaceContent(elem, myArray);
            }
        };

        this.replaceContent = function (elem, myArray) {
            var hasRoistatClass = myArray[1];
            var number = myArray[2];
            var clearNumber = number.replace(/\D+/g, "");
            var search = this.searchPhone(clearNumber);
            var hasClass;
            if (elem.classList) {
                hasClass = elem.classList.contains(search['class']);
            } else {
                hasClass = new RegExp('(^| )' + search['class'] + '( |$)', 'gi').test(elem.className);
            }
            if (search && !hasClass && !hasRoistatClass && !elem.innerHTML.match('<script>')) {
                if (this.currentAttempts++ > this.maxAttempts) {
                    return false; // Скорее всего мы вошли в вечный цикл
                }
                if (elem.innerHTML.trim() == number) {
                    if (elem.classList) {
                        elem.classList.add(search['class']);
                    } else {
                        elem.className += ' ' + search['class'];
                    }
                } else {
                    elem.innerHTML = elem.innerHTML.replace(number, '<span class="' + search['class'] + '">' + number + '</span>');
                    this.findPhonesOnElement(elem); // Еще раз проверяем элемент на наличие других номеров
                }
            }
        };

        this.setClassForPhonesOnHref = function () {
            var self = this;
            var elements = document.querySelectorAll('[href^="tel:"]');
            elements.forEach(function (elem, key) {
                var phone = self.clearPhone(elem.getAttribute('href'));
                var search = self.searchPhone(phone);
                if (search && !elem.classList.contains(search['class'])) {
                    elem.classList.add(search['class'] + '-tel');
                }
            });
        };
    }

    var phoneReplacer = new ReplacePhone();
    phoneReplacer.setPhones([
        {'phone': '7 (499) 350-35-69', 'class': 'roistat-phone1'}
    ]);
    phoneReplacer.start();
</script>
<script>
    (function (w, d, s, h, id) {
        w.roistatProjectId = id;
        w.roistatHost = h;
        var p = d.location.protocol == "https:" ? "https://" : "http://";
        var u = /^.*roistat_visit=[^;]+(.*)?$/.test(d.cookie) ? "/dist/module.js" : "/api/site/1.0/" + id + "/init";
        var js = d.createElement(s);
        js.charset = "UTF-8";
        js.async = 1;
        js.src = p + h + u;
        var js2 = d.getElementsByTagName(s)[0];
        js2.parentNode.insertBefore(js, js2);
    })(window, document, 'script', 'cloud.roistat.com', '05e029af19c9b3cea24aa737f6e6c3e4');
</script>
<script>
    (function () {

        var onLoadCallbackOldCallback = window.jivo_onLoadCallback;
        var onIntroductionOldCallback = window.jivo_onIntroduction;
        var onChangeStateOldCallback = window.jivo_onChangeState;
        var isLeadByOfflineMessageSent = false;

        var getDefaultContactData = function () {
            var contactInfo = jivo_api.getContactInfo();
            var jivoContent = document.getElementById('jcont');

            if (contactInfo.name === undefined) {
                contactInfo.name = contactInfo.client_name;
            }

            if (jivoContent !== undefined) {
                if (contactInfo.phone === null) {
                    contactInfo.phone = jivoContent.querySelectorAll('input[name="tel"]')[0].value;
                }
                if (contactInfo.email === null) {
                    contactInfo.email = jivoContent.querySelectorAll('input[name="email"]')[0].value;
                }
                if (contactInfo.name === null) {
                    var nodeName = jivoContent.querySelectorAll('input[name="name"]');

                    if (!nodeName.length) {
                        nodeName = jivoContent.querySelectorAll('input[name="text"]');
                    }

                    if (nodeName.length) {
                        contactInfo.name = nodeName[0].value;
                    }
                }
            }

            return contactInfo;
        };

        var getDefaultLeadData = function () {
            var data = {
                leadName: 'Обращение с JivoSite',
                fields: {
                    'ASSIGNED_BY_ID': 148,
                    'UF_CRM_1469795389': 'Jivosite',
                    'SOURCE_ID': 19
                }
            };
            var contactData = getDefaultContactData();

            for (var attrNameContactData in contactData) {
                if (contactData.hasOwnProperty(attrNameContactData)) {
                    data[attrNameContactData] = contactData[attrNameContactData];
                }
            }

            return data;
        };

        var sendLead = function (data) {
            console.log('data', data);

            if (data.phone || data.email) {
                roistatGoal.reach(data);
            }
        };

        var ourOnLoadCallback = function () {
            jivo_api.setCustomData([
                {
                    content: 'Roistat: ' + roistatGetCookie('roistat_visit')
                }
            ]);

            if (jivo_config.chat_mode === 'offline') {
                console.log('operator is offline');
            } else {
                console.log('Operator is online');
            }
            ['keyup', 'input'].forEach(function (evt) {
                document.addEventListener(evt, function (e) {
                    var key = e.which || e.keyCode;
                    if (e.target.tagName === 'TEXTAREA' && e.target.classList.contains('inputField_2G') &&
                        jivo_config.chat_mode === 'offline' && key === 13) {
                        console.log('keypress on jivo!!');
                        setTimeout(function () {
                            sendLeadByOfflineMessage();
                        }, 300);
                    }
                }, true);
            });
        };

        var ourOnIntroduction = function () {
            var data = getDefaultLeadData();
            sendLead(data);
        };

        var sendLeadByOfflineMessage = function () {
            if (!isLeadByOfflineMessageSent) {
                var data = getDefaultLeadData();

                var jivoContent = document.getElementById('jcont');
                if (jivoContent !== undefined) {
                    var texarea = jivoContent.getElementsByTagName('textarea')[0];
                    var text = texarea.value;

                    if (texarea.disabled || !text) {
                        var clientMessages = jivoContent.querySelectorAll('.__client_1w');

                        if (clientMessages.length) {
                            var last = clientMessages[clientMessages.length - 1];
                            text = last.childNodes[last.childNodes.length - 1].innerText;
                        }
                    }
                    data.text = text;
                }
                sendLead(data);
                isLeadByOfflineMessageSent = true;
            }
        };

        window.jivo_onLoadCallback = function () {
            if (onLoadCallbackOldCallback) {
                onLoadCallbackOldCallback();
            }
            ourOnLoadCallback();
        };

        window.jivo_onIntroduction = function () {

            if (onIntroductionOldCallback) {
                onIntroductionOldCallback();
            }
            ourOnIntroduction();
        };

        window.jivo_onChangeState = function (state) {
            if (onChangeStateOldCallback) {
                onChangeStateOldCallback();
            }
            if (state === 'offline/success') {
                sendLeadByOfflineMessage();
            }
        };
        window.jivo_onOfflineFormSubmit = function (state) {
            console.log('offline form submit!');
            sendLeadByOfflineMessage();
        };

        function sendOfflineOnClick(e) {
            var target = e.target;
            if (jivo_config.chat_mode == 'offline' &&
                target.tagName == 'JDIV' && target.className == 'sendButton_1o') {
                setTimeout(function () {
                    sendLeadByOfflineMessage();
                }, 400);
            }
        }

        document.addEventListener('click', function (e) {
            sendOfflineOnClick(e);
        }, true);
        document.addEventListener('touchstart', function (e) {
            sendOfflineOnClick(e);
        }, true);
    })();
</script>
<script type='text/javascript'>
    (function () {
        var widget_id = 'aiwtmhprdT';
        var d = document;
        var w = window;

        function l() {
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = '//code.jivosite.com/script/widget/' + widget_id;
            var ss = document.getElementsByTagName('script')[0];
            ss.parentNode.insertBefore(s, ss);
        }

        if (d.readyState == 'complete') {
            l();
        } else {
            if (w.attachEvent) {
                w.attachEvent('onload', l);
            } else {
                w.addEventListener('load', l, false);
            }
        }
    })();</script>
</body>

<!-- Mirrored from www.imedia24.ru/about/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Dec 2021 17:40:25 GMT -->
</html>
