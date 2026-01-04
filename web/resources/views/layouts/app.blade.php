<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Nguetobaye Massengar Rongar</title>

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/style-liberty.css') }}">
  <link rel="icon" href="{{ asset('assets/images/logo.png') }}">
  <!-- web fonts -->
  <link href="//fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&amp;display=swap" rel="stylesheet">
  <!-- /web fonts -->

  <!-- Plyr.io CSS -->
  <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Google Translate -->
  <script type="text/javascript">
      function googleTranslateElementInit() {
          new google.translate.TranslateElement({
              pageLanguage: 'auto',
              includedLanguages: 'en,fr,ru,es',
              layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
              autoDisplay: false
          }, 'google_translate_element');
      }

      // Surgical banner removal and persistence
      (function() {
          function hideGoogleElements() {
              const selectors = [
                  '#goog-gt-tt', '.goog-te-balloon-frame'
              ];
              selectors.forEach(s => {
                  const items = document.querySelectorAll(s);
                  items.forEach(el => {
                      el.style.setProperty('display', 'none', 'important');
                      el.style.setProperty('visibility', 'hidden', 'important');
                  });
              });
              if (document.body && document.body.style.top !== '0px') {
                  document.body.style.top = '0px';
              }
          }

          const observer = new MutationObserver(hideGoogleElements);
          observer.observe(document.documentElement, { childList: true, subtree: true, attributes: true, attributeFilter: ['style'] });
          setInterval(hideGoogleElements, 500);

          // Persistence
          const checkInterval = setInterval(function() {
              const combo = document.querySelector('.goog-te-combo');
              if (combo) {
                  clearInterval(checkInterval);
                  combo.addEventListener('change', function() {
                      const lang = combo.value;
                      const domain = location.hostname;
                      document.cookie = "googtrans=/en/" + lang + "; path=/; domain=" + domain;
                      document.cookie = "googtrans=/en/" + lang + "; path=/;";
                  });
              }
          }, 100);
      })();
  </script>
  <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</head>

<body>
  <!-- header -->
  @include('partials.navbar')
  <!-- //header -->

  <div style="{{ Request::is('/') ? '' : 'padding-top: 20px;' }}">
    @yield('content')
  </div>

  <!-- Footer -->
  @include('partials.footer')
  
  <!-- //Footer -->

  <!-- jQuery and Bootstrap JS -->
  <script src="{{ asset('assets/js/jquery-3.4.1.slim.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

  <!-- Template JavaScript -->
  <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
  <script>
    $(document).ready(function () {
      $('.popup-with-zoom-anim').magnificPopup({
        type: 'inline',

        fixedContentPos: false,
        fixedBgPos: true,

        overflowY: 'auto',

        closeBtnInside: true,
        preloader: false,

        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-zoom-in',
        callbacks: {
          open: function() {
            var video = document.getElementById('introVideo');
            if (video) {
              video.play();
            }
          },
          close: function() {
            var video = document.getElementById('introVideo');
            if (video) {
              video.pause();
              video.currentTime = 0;
            }
          }
        }
      });

      $('.popup-with-move-anim').magnificPopup({
        type: 'inline',

        fixedContentPos: false,
        fixedBgPos: true,

        overflowY: 'auto',

        closeBtnInside: true,
        preloader: false,

        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-slide-bottom'
      });
    });
  </script>

  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- disable body scroll which navbar is in active -->


  <script src="{{ asset('assets/js/smartphoto.js') }}"></script>
  <script src="{{ asset('assets/js/dark-mode.js') }}"></script>
  
  <!-- Plyr.io JS -->
  <script src="https://cdn.plyr.io/3.7.8/plyr.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      // Initialize Plyr for specific videos only
      const players = Array.from(document.querySelectorAll('video.js-plyr')).map(p => new Plyr(p, {
        controls: ['play-large', 'play', 'progress', 'current-time', 'mute', 'volume', 'captions', 'settings', 'pip', 'airplay', 'fullscreen'],
      }));

      const sm = new SmartPhoto(".js-img-viwer", {
        showAnimation: false
      });
      // sm.destroy();
    });
  </script>
</body>

</html>
