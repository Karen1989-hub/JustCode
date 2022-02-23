<aside class="sidebar">
    <div class="s-block _top">

        <div class="s-logo" style="width: 100%;height: 150px;overflow: hidden;margin: 0 auto;">
            <a href="{{route('home')}}"><img src="{{asset('images/logo.png')}}" alt="" style="
    width: 115%;
    height: 115%;
    object-fit: cover;
    position: relative;
    top: -15px;
    left: -26px;
"></a>
        </div>

        @include('layout.menu')

    </div>
    <div class="s-discover">
        <div class="s-discover__wrap">
            <div class="s-discover__logo">
                <a href="order/index.html" class="s-discover__circle">
                    <div class="s-discover__border"></div>
                    <div class="svg-animate">
                        <svg id="wallet" xmlns="http://www.w3.org/2000/svg" width="44" height="44"
                             viewbox="0 0 44 44">
                            <path d="M31.069,23.915c-2.376,0-4.302,1.927-4.302,4.305c0,2.378,1.926,4.305,4.302,4.305h12.905v-8.609H31.069z M31.069,29.654                  c-0.792,0-1.434-0.642-1.434-1.435s0.642-1.435,1.434-1.435c0.792,0,1.434,0.642,1.434,1.435S31.861,29.654,31.069,29.654z"></path>
                            <path d="M31.069,21.045h7.17V16.74c0-2.374-1.93-4.304-4.302-4.304H1.434C0.642,12.436,0,13.078,0,13.87v28.698                  c0,0.792,0.642,1.435,1.434,1.435h32.503c2.372,0,4.302-1.931,4.302-4.305v-4.305h-7.17c-3.954,0-7.17-3.218-7.17-7.174                  C23.899,24.263,27.115,21.045,31.069,21.045z"></path>
                            <path d="M39.673,12.436h-0.014c0.904,1.201,1.448,2.688,1.448,4.304v4.305h2.868V16.74C43.974,14.366,42.045,12.436,39.673,12.436z"></path>
                            <path d="M41.107,35.394v4.305c0,1.616-0.543,3.104-1.448,4.305h0.014c2.372,0,4.302-1.931,4.302-4.305v-4.305H41.107z"></path>
                            <path d="M23.479,0.42c-0.56-0.561-1.468-0.561-2.028,0l-1.26,1.261l7.879,7.884h4.548L23.479,0.42z"></path>
                            <path d="M14.875,0.42c-0.56-0.561-1.467-0.561-2.028,0l-9.14,9.146h20.307L14.875,0.42z"></path>
                        </svg>
                    </div>
                </a>
            </div>
            <p class="s-discover__text"><a href="order/index.html">Отправить заявку<br>на расчет проекта</a></p>
            <div class="s-discover__btn"><a href="order/index.html" class="btn btn-primary">Узнать стоимость</a>
            </div>
        </div>
    </div>
    <div class="s-block _bottom">
        <div class="s-sitemap"><a href="sitemap/index.html">Карта сайта</a></div>
        <div class="s-adress">г. Ереван, Сасунтси Давид,<br> 13/1 офис 6</div>
        <div class="s-copyright">© 2018-2022 justcodedigital.com</div>
    </div>
</aside>