"use strict";

var RecaptchaV3Google = RecaptchaV3Google || {};
RecaptchaV3Google.form_submit;
RecaptchaV3Google.items = new Array();
RecaptchaV3Google.runSubmit = false;

(function() {
    var elemId = 'recaptchV3Script';
    if (document.getElementById(elemId)) {
        return;
    }

    var recaptchV3Script = document.createElement('script');
    recaptchV3Script.id = elemId;
    recaptchV3Script.async = true;
    recaptchV3Script.defer = true;
    recaptchV3Script.src = '../www.google.com/recaptcha/api53fa.js?onload=onloadRecaptchaV3Google&amp;render=explicit';
    document.head.appendChild(recaptchV3Script);
}());

RecaptchaV3Google.render = function() {
    if(window.grecaptcha){
        var elements = document.querySelectorAll('div.g-recaptcha');
        var widget;
        RecaptchaV3Google.items = [];
        for (var i = 0; i < elements.length; i++) {
            if(elements[i].innerHTML === "") {
                widget = grecaptcha.render(elements[i], {
                    'sitekey' : elements[i].getAttribute("data-sitekey"),
                    'theme' : elements[i].getAttribute("data-theme"),
                    'size' : elements[i].getAttribute("data-size"),
                    'callback' : elements[i].getAttribute("data-callback"),
                    'badge' : elements[i].getAttribute("data-badge")
                });
                elements[i].setAttribute("data-widget", widget);
                RecaptchaV3Google.items.push(widget);
            } else {
                widget =  elements[i].getAttribute("data-widget");
                RecaptchaV3Google.items.push(parseInt(widget));
            }
        }
    }

};

RecaptchaV3Google.reset = function() {
    if(window.grecaptcha){
        RecaptchaV3Google.render();
        for (var i = 0; i < RecaptchaV3Google.items.length; i++) {
            grecaptcha.reset(RecaptchaV3Google.items[i]);
        }

    }
};

function RecaptchaV3GoogleSubmitForm(token) {
    if(RecaptchaV3Google.form_submit !== undefined && RecaptchaV3Google.runSubmit){
        var x = document.createElement("INPUT"); // create token input
        x.setAttribute("type", "hidden");
        x.name = "g-recaptcha-response";
        x.value = token;
        RecaptchaV3Google.form_submit.appendChild(x);  // append current form
        var elements = RecaptchaV3Google.form_submit.elements;
        for (var i = 0; i < elements.length; i++) {
            if(elements[i].getAttribute("type") === "submit")  {
                var submit_hidden = document.createElement("INPUT"); // create submit input hidden
                submit_hidden.setAttribute("type", "hidden");
                submit_hidden.name = elements[i].name;
                submit_hidden.value = elements[i].value;
                RecaptchaV3Google.form_submit.appendChild(submit_hidden);  // append current form
            }
        }
        document.createElement('form').submit.call(RecaptchaV3Google.form_submit); // submit form
    }
};

function onloadRecaptchaV3Google() {
    RecaptchaV3Google.render();
    // If invisible recaptcha on the page
    if (document.addEventListener) {
        document.addEventListener('submit',function(e){
            if(e.target && e.target.tagName === "FORM"){
                var g_recaptcha = e.target.querySelectorAll('div.g-recaptcha');
                if(g_recaptcha[0] !== undefined && g_recaptcha[0].getAttribute("data-size") === "invisible"){
                    var widget_id = g_recaptcha[0].getAttribute("data-widget");
                    grecaptcha.execute(widget_id);
                    RecaptchaV3Google.form_submit = e.target;
                    e.preventDefault();
                }
            }
        }, false);
    } else {
        document.attachEvent("onsubmit", function(e){
            var target = e.target || e.srcElement;
            if(e.target && e.target.tagName === "FORM"){
                var widget_id = e.target.getAttribute("data-widget");
                grecaptcha.execute(widget_id);
                RecaptchaV3Google.form_submit = target;
                e.returnValue = false;
            }
        });
    }
    // hide grecaptcha-badge, if multi invisible recaptcha
    var badges = document.querySelectorAll('.grecaptcha-badge');
    for (var i = 1; i < badges.length; i++) {
        badges[i].style.display="none";
    }
};