<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_0010675645170168b02bc39c99b8eafd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script type=\"text/javascript\">/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  79 => 29,  75 => 28,  66 => 25,  42 => 12,  26 => 3,  24 => 2,  46 => 14,  25 => 6,  19 => 1,  274 => 110,  271 => 109,  269 => 108,  266 => 107,  262 => 98,  259 => 97,  252 => 9,  249 => 8,  243 => 6,  231 => 112,  229 => 107,  219 => 99,  217 => 97,  209 => 92,  196 => 81,  190 => 79,  184 => 76,  180 => 75,  176 => 74,  172 => 73,  168 => 71,  162 => 68,  158 => 67,  154 => 66,  150 => 65,  146 => 64,  142 => 63,  138 => 61,  136 => 60,  114 => 40,  109 => 38,  105 => 37,  100 => 36,  95 => 34,  91 => 35,  87 => 32,  83 => 30,  78 => 30,  73 => 28,  69 => 27,  65 => 26,  61 => 18,  57 => 24,  50 => 15,  35 => 8,  23 => 1,  63 => 18,  60 => 17,  55 => 19,  41 => 8,  38 => 9,  33 => 4,  30 => 5,  101 => 28,  94 => 26,  84 => 21,  80 => 20,  76 => 19,  70 => 26,  67 => 17,  62 => 24,  56 => 13,  52 => 23,  48 => 11,  44 => 10,  40 => 8,  37 => 11,  32 => 6,  29 => 7,);
    }
}
