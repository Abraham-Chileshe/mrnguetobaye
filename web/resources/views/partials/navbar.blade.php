  <header class="site-header" style="{{ Request::is('/') ? 'position: absolute;' : 'position: sticky; background: #ffffff; box-shadow: 0 2px 10px rgba(0,0,0,0.1);' }} top: 0; left: 0; width: 100%; z-index: 100;">
    <div class="hero-header-11" style="background: transparent;">
      <div class="hero-header-11-content">
        <div class="container">
          <nav class="navbar navbar-expand-xl navbar-light py-sm-2 py-1 px-0">
            <style>
              .site-header .nav-link, .site-header .navbar-brand { color: {{ Request::is('/') ? '#ffffff' : '#333333' }} !important; }
              .site-header .navbar-toggler { border-color: {{ Request::is('/') ? 'rgba(255, 255, 255, 0.5)' : 'rgba(0, 0, 0, 0.5)' }} !important; }
              .site-header .navbar-toggler-icon { color: {{ Request::is('/') ? '#ffffff' : '#333333' }} !important; }
              @media (max-width: 1199.98px) {
                .site-header .navbar-collapse {
                  background: {{ Request::is('/') ? 'rgba(0, 0, 0, 0.9)' : '#ffffff' }};
                  padding: 20px;
                  border-radius: 8px;
                  margin-top: 10px;
                  {{ !Request::is('/') ? 'box-shadow: 0 5px 15px rgba(0,0,0,0.1);' : '' }}
                }
                {{ !Request::is('/') ? '.site-header .navbar-collapse .nav-link { color: #333 !important; }' : '' }}
              }
            </style>
            <a class="navbar-brand editContent" href="{{ url('/') }}">
              <img src="{{ asset('assets/images/logo.png') }}" width="50px" >
              </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon fa fa-bars"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                  <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    Profile
                  </a>
                  <div class="dropdown-menu shadow-sm border-0" aria-labelledby="profileDropdown">
                    <a class="dropdown-item" href="{{ url('/#about') }}">About Me</a>
                    <a class="dropdown-item" href="{{ url('/#motivation') }}">My Journey</a>
                    <a class="dropdown-item" href="{{ url('/#achievements') }}">Key Achievements</a>
                    <a class="dropdown-item" href="{{ url('/#service') }}">Services</a>
                    <a class="dropdown-item" href="{{ url('/#stats') }}">Page Stats</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="showcaseDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    Showcase
                  </a>
                  <div class="dropdown-menu shadow-sm border-0" aria-labelledby="showcaseDropdown">
                    <a class="dropdown-item" href="{{ url('/#videos') }}">Videos</a>
                    <a class="dropdown-item" href="{{ url('/gallery') }}">Portfolio</a>
                    <a class="dropdown-item" href="{{ url('/blog') }}">Latest Articles</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="connectDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    Connect
                  </a>
                  <div class="dropdown-menu shadow-sm border-0" aria-labelledby="connectDropdown">
                    <a class="dropdown-item" href="{{ url('/#social-links') }}">Social Media</a>
        
                  </div>
                </li>
                <!-- Translation -->
                <li class="nav-item ml-lg-3">
                  <div id="google_translate_element" class="align-self-center mt-lg-0 mt-3"></div>
                </li>
              
              </ul>
            </div>
            
            <style>
              /* Google Translate Stylings */
              #google_translate_element .goog-te-gadget-simple {
                background-color: {{ Request::is('/') ? 'rgba(255, 255, 255, 0.1)' : 'rgba(0, 0, 0, 0.05)' }} !important;
                border: 1px solid {{ Request::is('/') ? 'rgba(255, 255, 255, 0.3)' : 'rgba(0, 0, 0, 0.1)' }} !important;
                padding: 6px 10px !important;
                border-radius: 6px !important;
                font-family: 'Poppins', sans-serif !important;
                display: flex !important;
                align-items: center !important;
                cursor: pointer;
                transition: all 0.3s;
              }
              #google_translate_element .goog-te-gadget-simple:hover {
                background-color: {{ Request::is('/') ? 'rgba(255, 255, 255, 0.2)' : 'rgba(0, 0, 0, 0.1)' }} !important;
              }
              #google_translate_element .goog-te-gadget-simple span {
                color: {{ Request::is('/') ? '#fff' : '#333' }} !important;
                vertical-align: middle !important;
              }
              #google_translate_element .goog-te-gadget-icon {
                display: none !important;
              }

              /* Shift navbar down when Translate Banner is present */
              html.translated-ltr .site-header,
              html.translated-rtl .site-header {
                top: 40px !important;
              }

              /* Dark Theme for Google Translate Panel (Banner and Dropdowns) */
              iframe.goog-te-banner-frame,
              .goog-te-banner-frame,
              .goog-te-banner-frame.skiptranslate,
              iframe.goog-te-menu-frame,
              .goog-te-menu-frame,
              .goog-te-menu2-frame,
              iframe[id*="goog-te-banner-frame"],
              iframe[class*="goog-te-banner-frame"] {
                display: block !important;
                visibility: visible !important;
                opacity: 1 !important;
                filter: invert(1) hue-rotate(180deg) !important;
                box-shadow: 0 4px 12px rgba(0,0,0,0.5) !important;
                border: none !important;
              }

              #goog-gt-tt,
              .goog-te-balloon-frame {
                display: none !important;
                visibility: hidden !important;
              }

              html {
                top: 0px !important;
              }
              body {
                top: 0px !important;
                position: static !important;
              }
              
              .goog-text-highlight {
                background: none !important;
                box-shadow: none !important;
              }
              /* Hide "Powered by Google" */
              .goog-logo-link {
                display: none !important;
              }
              .goog-te-gadget {
                color: transparent !important;
                font-size: 0 !important;
              }
              .goog-te-gadget .goog-te-combo {
                font-size: 14px !important;
                margin: 4px 0 !important;
                padding: 6px 12px;
                border-radius: 8px;
                border: 1px solid {{ Request::is('/') ? 'rgba(255,255,255,0.3)' : 'rgba(0,0,0,0.1)' }};
                background: {{ Request::is('/') ? 'rgba(255,255,255,0.15)' : 'rgba(0,0,0,0.05)' }};
                color: {{ Request::is('/') ? '#fff' : '#333' }};
                outline: none;
                cursor: pointer;
                transition: all 0.3s;
              }
              .goog-te-gadget .goog-te-combo:hover {
                background: {{ Request::is('/') ? 'rgba(255,255,255,0.25)' : 'rgba(0,0,0,0.1)' }};
              }

              #google_translate_element {
                display: inline-block;
                vertical-align: middle;
              }

              /* Mobile adjustments */
              @media (max-width: 1199.98px) {
                #google_translate_element .goog-te-gadget-simple {
                  width: fit-content;
                }
              }
            </style>
          </nav>
        </div>
      </div>
    </div>
  </header>

