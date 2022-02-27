<div class="menu">
    <ul class="menu__main">
        <li><a href="{{route('about')}}">О компании</a></li>
        <li><a href="{{route('client')}}">Клиенты</a></li>
        <li>
            <a href="{{route('services')}}" class="drop">Услуги</a>
            <div class="menu__arrow"></div>
            <div class="menu__sub">
                <ul>
                    <li>
                        <a href="{{route('sozdanie-saitov')}}" class="nested">Сайты под ключ</a>
                        <div class="submenu__arrow"></div>
                        <div class="menu__sub menu__sub_nested">
                            <ul>
                                <li><a href="{{route('korporativnyi-site')}}">Корпоративные сайты</a></li>
                                <li><a href="{{route('internet-magazin')}}">Интернет-магазины</a></li>
                                <li><a href="{{route('landing-page')}}">Одностраничные сайты</a></li>
                                <li><a href="{{route('design')}}">Дизайн веб-сайтов</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="{{route('mobilnye-prilozheniya')}}" class="nested">Разработка мобильных приложений</a>
                        <div class="submenu__arrow"></div>
                        <div class="menu__sub menu__sub_nested">
                            <ul>
                                <li><a href="{{route('androidPage')}}">Android приложения</a></li>
                                <li><a href="{{route('iosPage')}}">iOS приложения</a></li>
                                <li><a href="{{route('reactNativePage')}}">React Native приложения</a></li>
                                <li><a href="prototip/index.html">Прототипирование</a></li>
                                <li><a href="app-design/index.html">Дизайн приложений</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="{{route('serm')}}" class="nested">Управление репутацией</a>
                        <div class="submenu__arrow"></div>
                        <div class="menu__sub menu__sub_nested">
                            <ul>
                                <li><a href="kompleksnoe-upravlenie-reputatsiey/index.html">Комплексное управление репутацией</a></li>
                                <li><a href="smrm/index.html">Репутация в социальных сетях</a></li>
                                <li><a href="yandex-maps/index.html">Отзывы на Яндекс.Картах</a></li>
                                <li><a href="yandex-market/index.html">Отзывы на Яндекс.Маркет</a></li>
                                <li><a href="yandex-uslugi/index.html">Отзывы на Яндекс.Услуги</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="{{route('prodvizhenie-saitov')}}">Продвижение сайтов</a></li>
                    <li><a href="{{route('razrabotka-firmennogo-stilya')}}">Разработка фирменного стиля</a></li>
                    <li><a href="{{route('sozdanie-logotipa')}}">Создание логотипа</a></li>
                    <li><a href="{{route('custom-software')}}">Программное обеспечение</a></li>
                </ul>
            </div>
        </li>
        <li><a href="{{route('portfolio')}}">Проекты</a></li>
        <li><a href="{{route('contacts')}}">Контакты</a></li>
    </ul>
</div>
