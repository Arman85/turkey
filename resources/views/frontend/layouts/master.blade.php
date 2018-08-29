
<!DOCTYPE html>
<html lang="en" data-ng-app="website">
  <head>

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter49991245 = new Ya.Metrika2({
                        id:49991245,
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true,
                        webvisor:true
                    });
                } catch(e) { }
            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/tag.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks2");
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/49991245" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>6 городов Турции за 7 дней | Великолепный век</title>
    <link rel="icon" href="mt-demo/66300/66367/mt-content/uploads/2018/01/favicon1.png" type="image/png" />


    <link rel="canonical" href="index.html" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="mt-includes/css/assets.min.css"/>
    <link rel="stylesheet" href="mt-demo/66300/66367/mt-content/themes/mt-1320/css/styles.css"/>
    <link rel="stylesheet" href="css/mystyles.css">
    <link rel="stylesheet" href="{{ asset('css/jquery.sweet-modal.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lightbox.min.css') }}">
    <style>
      @import url(//fonts.googleapis.com/css?family=Mr+Dafoe:regular|Poppins:300,300italic,regular,italic,500,500italic,600,600italic,700,700italic|Raleway:regular,100,100italic,200,200italic,300,300italic,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic|Roboto:300,300italic,regular,italic,500,500italic,700,700italic&subset=latin,latin-ext);
    </style>
    <link rel="stylesheet" href="mt-demo/66300/66367/mt-content/assets/styles.css" id="moto-website-style"/>
    <style>
      .etSep{
        margin: 0 15px 15px 15px;
      }
      @media (max-width: 991.98px) {
        div.eTimer div.etUnit div.etNumber{
          width: 25px;
          padding: 0;
        }

        div.etSep{
          margin: 0 0 15px 0;
        }
      }
    </style>
  </head>
  <body class="moto-background">
    <div class="page">
      @yield('content')  
    </div>
    
    <!-- include scripts -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="mt-includes/js/website.assets.min.js" type="text/javascript" data-cfasync="false"></script>
      <script type="text/javascript" data-cfasync="false">
          var websiteConfig = websiteConfig || {};
          websiteConfig.address = 'https://template66367.motopreview.com/';
          websiteConfig.addressHash = '1d080d3abd5b75ef0f9b52376d317ccb';
          websiteConfig.apiUrl = '/api.php';
          websiteConfig.preferredLocale = 'en_US';
          websiteConfig.preferredLanguage = websiteConfig.preferredLocale.substring(0, 2);
                  websiteConfig.back_to_top_button = {"topOffset":300,"animationTime":500,"type":"theme"};
                  websiteConfig.popup_preferences = {"loading_error_message":"The content could not be loaded."};
          websiteConfig.lazy_loading = {"enabled":true};
          websiteConfig.cookie_notification = {"enabled":false,"content":"<p class=\"moto-text_normal\">This website uses cookies to ensure you get the best experience on our website.<\/p>","content_hash":"6200d081e0d72ab7f5a8fe78d961c3ec"};
          angular.module('website.plugins', []);
      </script>
      <script src="mt-includes/js/website.min.js" type="text/javascript" data-cfasync="false"></script>

      <script src="{{ asset('js/jquery.sweet-modal.min.js') }}"></script> 
      <script src="{{ asset('js/lightbox.min.js') }}"></script>
      <script src="js/myscript.js"></script> 
      <script>
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });

        $('form').on('submit', function(e){
          data = $(this).serialize();
          console.log(data);
          url = $(this).attr('action');
          $.ajax({
            url: url,
            type: 'post',
            data: data,
            success: function(data){
              $.sweetModal({
                content: "Наш менеджер свяжется с Вами в течении 3х минут.",
                icon: $.sweetModal.ICON_SUCCESS
              });
            }
          });
          e.preventDefault();
        });
      </script>  
      <script src="https://e-timer.ru/js/etimer.js"></script>
      <script type="text/javascript">
        jQuery(document).ready(function() {
          jQuery(".eTimer").eTimer({
            etType: 0, etDate: "09.10.2018.0.0", etTitleText: "", etTitleSize: 20, etShowSign: 1, etSep: ":", etFontFamily: "Trebuchet MS", etTextColor: "#a3a3a3", etPaddingTB: 15, etPaddingLR: 15, etBackground: "transparent", etBorderSize: 0, etBorderRadius: 2, etBorderColor: "white", etShadow: " 0px 0px 10px 0px rgba(51, 51, 51, 0.01)", etLastUnit: 4, etNumberFontFamily: "Impact", etNumberSize: 35, etNumberColor: "#f6b230", etNumberPaddingTB: 0, etNumberPaddingLR: 8, etNumberBackground: "transparent", etNumberBorderSize: 0, etNumberBorderRadius: 5, etNumberBorderColor: "white", etNumberShadow: "inset 0px 0px 10px 0px rgba(0, 0, 0, 0.5)"
          });

          jQuery(".eTimer2").eTimer({
            etType: 0, etDate: "23.10.2018.0.0", etTitleText: "", etTitleSize: 20, etShowSign: 1, etSep: ":", etFontFamily: "Trebuchet MS", etTextColor: "#a3a3a3", etPaddingTB: 15, etPaddingLR: 15, etBackground: "transparent", etBorderSize: 0, etBorderRadius: 2, etBorderColor: "white", etShadow: " 0px 0px 10px 0px rgba(51, 51, 51, 0.01)", etLastUnit: 4, etNumberFontFamily: "Impact", etNumberSize: 35, etNumberColor: "#f6b230", etNumberPaddingTB: 0, etNumberPaddingLR: 8, etNumberBackground: "transparent", etNumberBorderSize: 0, etNumberBorderRadius: 5, etNumberBorderColor: "white", etNumberShadow: "inset 0px 0px 10px 0px rgba(0, 0, 0, 0.5)"
          });
        });
      </script>

      <script>
        lightbox.option({
          'resizeDuration': 200,
          'wrapAround': true
        })
    </script>
    <!-- RedConnect -->
    <script id="rhlpscrtg" type="text/javascript" charset="utf-8" async="async"
    src="https://web.redhelper.ru/service/main.js?c=mtris2"></script>
    <div style="display: none"><a class="rc-copyright" 
    href="http://redconnect.ru">Сервис звонка с сайта RedConnect</a></div>
    <!--/RedConnect -->
  </body>
</html>