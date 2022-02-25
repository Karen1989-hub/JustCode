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
<link href="{{asset('css/main/kernel_main/kernel_main6383.css')}}" type="text/css" rel="stylesheet"/>
<link href="{{asset('css/main/popup.min4292.css')}}" type="text/css" rel="stylesheet"/>
<link href="{{asset('css/main/template_85516d83c3b701ff914a79fa7d536582/template_85516d83c3b701ff914a79fa7d536582d1b0.css')}}"
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
        j.src = '../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
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
        'SERVER_TIME': '1640713179',
        'USER_TZ_OFFSET': '0',
        'USER_TZ_AUTO': 'Y',
        'bitrix_sessid': 'a8bab331b699814b00127d018c97a84d'
    });</script>
<script type="text/javascript" src="{{asset('js/kernel_main4f08.js')}}"></script>
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


{{--<script type="text/javascript" src="{{asset('js/main/core/core.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{asset('js/main/core/core_ajax.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{asset('js/main/json/json2.min.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{asset('js/main/core/core_ls.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{asset('js/main/session.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{asset('js/main/core/core_window.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{asset('js/main/core/core_popup.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{asset('js/main/core/core_date.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{asset('js/main/utils.js')}}"></script>--}}

{{--<script type="text/javascript" src="{{asset('js/vendor/jquery-2.1.1.min.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{asset('js/vendor/video.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{asset('js/vendor/wow.min.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{asset('js/vendor/jquery.fancybox.pack.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{asset('js/vendor/slick.min.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{asset('js/vendor/jquery.easydropdown.min.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{asset('js/vendor/vivus.min.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{asset('js/vendor/imagesloaded.pkgd.min.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{asset('js/vendor/masonry.pkgd.min.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{asset('js/main.js')}}"></script>--}}


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
            request.open("POST/index.html", "bitrix/tools/conversion/ajax_counter.html", true);
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

</body>
</html>