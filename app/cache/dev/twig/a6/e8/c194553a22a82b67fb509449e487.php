<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_a6e8c194553a22a82b67fb509449e487 extends Twig_Template
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
        return array (  70 => 26,  26 => 3,  87 => 20,  25 => 4,  21 => 2,  94 => 22,  92 => 21,  68 => 14,  64 => 12,  56 => 9,  50 => 15,  41 => 9,  24 => 2,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  156 => 66,  142 => 59,  133 => 55,  123 => 47,  117 => 44,  112 => 42,  86 => 28,  66 => 25,  62 => 24,  49 => 19,  19 => 1,  98 => 40,  88 => 6,  80 => 19,  78 => 40,  44 => 10,  36 => 7,  32 => 6,  27 => 4,  22 => 2,  57 => 14,  43 => 8,  40 => 8,  146 => 59,  141 => 57,  138 => 57,  131 => 42,  121 => 46,  109 => 61,  107 => 56,  93 => 9,  91 => 35,  85 => 19,  75 => 28,  71 => 34,  65 => 31,  37 => 11,  35 => 4,  30 => 5,  23 => 1,  158 => 67,  155 => 46,  151 => 63,  148 => 41,  143 => 58,  140 => 46,  136 => 56,  134 => 43,  130 => 39,  124 => 9,  115 => 43,  110 => 34,  105 => 40,  101 => 24,  97 => 30,  89 => 20,  83 => 30,  79 => 29,  74 => 23,  69 => 25,  63 => 19,  59 => 17,  54 => 21,  52 => 15,  45 => 17,  34 => 4,  72 => 16,  67 => 18,  60 => 29,  55 => 13,  51 => 12,  46 => 14,  42 => 12,  39 => 6,  33 => 5,  31 => 5,  28 => 3,);
    }
}
