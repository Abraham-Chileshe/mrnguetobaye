@extends('layouts.app')

@section('content')
  <!--  Main banner section -->
  <section class="hero-section">
    <div class="companies20-content">
      <div class="companies-wrapper">
        <div class="item">
          <li>
            <div class="slider-info banner-view" style="position: relative; overflow: hidden; background: #000; height: 100vh; width: 100%;">
              <!-- Video Background -->
              <video autoplay muted loop playsinline style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: 0;">
                <source src="{{ asset('assets/video/mainvid.mp4') }}" type="video/mp4">
                Your browser does not support HTML5 video.
              </video>
              
              <!-- Dark Overlay -->
              <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.85); z-index: 1;"></div>

              <div class="banner-info container" style="position: relative; z-index: 2; color: #ffffff !important;">
                <h3 class="banner-text" style="color: #ffffff !important;"><small style="color: #ffffff !important;">Hello, I’m</small><br>
                  {{ $contents['hero_title'] ?? 'Christopher' }}
                </h3>
                <p class="my-4 mb-5" style="color: #ffffff !important;">{{ $contents['hero_subtitle'] ?? 'UI/UX Designer' }}</p><br>
                <a href="#gallery" class="btn btn-primary theme-button mr-3">My Gallery</a>
                <a href="#news" class="btn btn-outline-primary theme-button" style="color: #ffffff !important; border-color: #ffffff !important;">Blogs</a>
              </div>
            </div>
        </div>
      </div>
    </div>
  </section>
  <!--  //Main banner section -->

  <div class="display-ad" style="margin: 8px auto; display: block; text-align:center;">
    <!---728x90--->
  </div>

<style>
@media (max-width: 768px) {
    .features-with-17_sur {
        padding-top: 1rem !important; /* Reduce top spacing */
        padding-bottom: 1rem !important;
    }
    .features-with-17-right-tp_sur {
        padding: 20px !important;
        margin-bottom: 20px !important;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15) !important; /* Stronger shadow */
        background: #fff; /* Ensure background is white for shadow visibility */
        border-radius: 10px; /* Optional: adds rounded corners if missing */
        text-align: center !important; /* Center align everything */
        display: flex !important;
        flex-direction: column !important;
        align-items: center !important;
        justify-content: center !important;
    }
    .features-with-17-left1 {
        margin-bottom: 15px !important; /* Add space below icon */
    }
    .features-with-17-left1 span {
        font-size: 3.5rem !important; /* Big Icon */
        color: var(--primary-color) !important; /* Ensure it uses theme color */
        display: inline-block;
    }
    .features-with-17-left2 h6 {
        font-size: 1.25rem !important;
        margin-bottom: 8px !important;
        font-weight: 700 !important;
    }
    .features-with-17-left2 p {
        font-size: 0.95rem !important;
        line-height: 1.5 !important;
    }
    /* Compact vertical spacing for columns */
    .features-with-17-top_sur .col-lg-4 {
        margin-top: 1rem !important;
    }

    /* About Image Mobile Style */
    .aboutgrid2 img {
        width: 150px !important;
        height: 150px !important;
        border-radius: 50% !important;
        border: 5px solid #fff !important;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1) !important;
        margin: 0 auto 20px auto !important;
        display: block !important;
        object-fit: cover !important;
    }

    /* Center About Me Title on Mobile */
    .about-section h3.global-title {
        text-align: center !important;
    }

    /* Hero Section Mobile Fixes */
    .banner-view {
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
    }
    .banner-info {
        padding-top: 120px !important; /* Space for navbar */
        text-align: center !important;
    }
    .banner-text {
        font-size: 2.5rem !important;
        line-height: 1.1 !important;
    }
    .banner-info p {
        font-size: 1rem !important;
        margin-top: 1rem !important;
    }
    .banner-info a.btn {
        margin: 5px !important; /* Spacing between buttons when they stack or sit close */
    }
}
</style>

    <!--  services section -->
  <section class="services-overview" id="service">
    <div class="features-with-17_sur py-5">
      <div class="container py-lg-3">
     
        <div class="features-with-17-top_sur">
          <div class="row">
            <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
              <div class="features-with-17-right-tp_sur">
                <div class="features-with-17-left1">
                  <span class="fa fa-modx" aria-hidden="true"></span>
                </div>
                <div class="features-with-17-left2">
                  <h6><a href="#url">{{ $contents['service_1_title'] ?? 'High-Level Meeting Coordination' }}</a></h6>
                  <p>{{ $contents['service_1_desc'] ?? 'Organization of strategic meetings with African presidents, ministers, and business leaders, as well as representatives from South America and the Caribbean in Moscow.' }}</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-md-0 mt-5">
              <div class="features-with-17-right-tp_sur">
                <div class="features-with-17-left1">
                  <span class="fa fa-podcast" aria-hidden="true"></span>
                </div>
                <div class="features-with-17-left2">
                  <h6><a href="#url">{{ $contents['service_2_title'] ?? 'Multilingual Translation Services' }}</a></h6>
                  <p>{{ $contents['service_2_desc'] ?? 'Simultaneous translation from Russian to English, French, and Spanish during meetings and negotiations with international clients and stakeholders.' }}</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 offset-md-3 offset-lg-0 col-md-6 mt-lg-0 mt-5">
              <div class="features-with-17-right-tp_sur">
                <div class="features-with-17-left1">
                  <span class="fa fa-bar-chart" aria-hidden="true"></span>
                </div>
                <div class="features-with-17-left2">
                  <h6><a href="#url">{{ $contents['service_3_title'] ?? 'Strategic Partnership Development' }}</a> </h6>
                  <p>{{ $contents['service_3_desc'] ?? 'Building and maintaining key relationships with stakeholders across Africa, South America, and the Caribbean to support business growth and market expansion.' }}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  //services section -->

  <!--  About section -->
  <div class="about-section pt-5" id="about">
    <div class="container pt-lg-3">
      <h3 class="global-title">About Me</h3>
      <div class="aboutgrids row align-items-center">
        <div class="col-lg-6 aboutgrid2">
          <div class="position-relative">
              <img src="{{ isset($contents['about_image']) ? asset($contents['about_image']) : asset('assets/images/about.jpg') }}" alt="about image" class="img-fluid w-100 rounded" style="height: 700px; object-fit: cover;" />
          </div>
        </div>
        <div class="col-lg-6 aboutgrid1 my-lg-0 my-5">
<style>
            .about-scroll-box {
                max-height: 600px;
                overflow-y: auto;
                padding: 20px;
                background: #fdfdfd;
                border-radius: 15px;
                box-shadow: 0 5px 20px rgba(0,0,0,0.03);
                border: 1px solid rgba(0,0,0,0.02);
                margin-bottom: 20px;
            }
            .about-scroll-box::-webkit-scrollbar {
                width: 6px;
            }
            .about-scroll-box::-webkit-scrollbar-track {
                background: #f1f1f1; 
                border-radius: 3px;
            }
            .about-scroll-box::-webkit-scrollbar-thumb {
                background: #d1d5db; 
                border-radius: 3px;
            }
            .about-scroll-box::-webkit-scrollbar-thumb:hover {
                background: #9ca3af; 
            }
          </style>

         

          <div class="about-scroll-box">
              <div class="text-muted" style="line-height: 1.9; font-size: 16px;">
                  {!! nl2br(e($contents['about_text'] ?? 'I love to work in User Experience & User Interface designing. Because I love to solve the design problem and find easy and better solutions to solve it. I always try my best to make good user interface with the best user experience. I have been working as a Visual designer from.')) !!}
              </div>
          </div>
          
          <div class="mt-2">
              <a href="{{ isset($contents['cv_file']) ? asset($contents['cv_file']) : '#URL' }}" class="btn btn-primary theme-button" {{ isset($contents['cv_file']) ? 'target=_blank' : '' }}>Download CV</a>
          </div>
        </div>
      </div>
    </div>

    <div class="aboutbottom py-5">
      <div class="container py-lg-3">
        <div class="bottomgrids row">
          <!-- Language 1 -->
          <div class="col-lg-3 col-md-6 bottomgrid1 mt-lg-0 mt-0">
            <h4>{{ $contents['lang_1_title'] ?? 'French' }}</h4>
            <p>{{ $contents['lang_1_desc'] ?? 'Native language providing seamless communication with Francophone African nations, officials, and business partners.' }}</p>
          </div>
          <!-- Language 2 -->
          <div class="col-lg-3 col-md-6 bottomgrid1 mt-md-0 mt-5">
            <h4>{{ $contents['lang_2_title'] ?? 'Russian' }}</h4>
            <p>{{ $contents['lang_2_desc'] ?? 'Professional fluency enabling effective communication with Russian-speaking clients, officials, and colleagues.' }}</p>
          </div>
          <!-- Language 3 -->
          <div class="col-lg-3 col-md-6 bottomgrid1 mt-lg-0 mt-5">
            <h4>{{ $contents['lang_3_title'] ?? 'English' }}</h4>
            <p>{{ $contents['lang_3_desc'] ?? 'Advanced proficiency facilitating engagement with international stakeholders across Africa and the Caribbean.' }}</p>
          </div>
          <!-- Language 4 -->
          <div class="col-lg-3 col-md-6 bottomgrid1 mt-lg-0 mt-5">
            <h4>{{ $contents['lang_4_title'] ?? 'Spanish' }}</h4>
            <p>{{ $contents['lang_4_desc'] ?? 'Working proficiency enabling communication with clients and partners from South America and the Caribbean.' }}</p>
          </div>
          <div class="clearfix"> </div>
        </div>
      </div>
    </div>
  </div>
  <!--  //About section -->
  
  <!-- Video Section -->
  @if(isset($videos) && $videos->count() > 0)
  <section class="video-section py-5" id="videos">
    <div class="container py-lg-5">
      <div class="d-block mb-5">
        <h3 class="global-title">Latest Videos</h3>
        <p class="text-muted mt-2">Talks, conferences, and interviews.</p>
      </div>
      
      <style>
        .video-card {
            border-radius: 8px;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 10px 20px rgba(0,0,0,0.05);
            background: #fff;
        }
        .video-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        }
        .video-wrapper {
            position: relative;
            padding-top: 56.25%; /* 16:9 Aspect Ratio */
            background: #000;
            overflow: hidden;
        }
        .video-wrapper .plyr {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        .video-card:hover .video-wrapper .plyr {
            transform: scale(1.05);
            transition: transform 0.3s ease;
        }
        /* Custom Play Icon Overlay */
        .video-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(0,0,0,0.2);
            opacity: 1;
            transition: all 0.3s;
            pointer-events: none; /* Let clicks pass through to video controls */
        }
        .video-card:hover .video-overlay {
            background: rgba(0,0,0,0.1);
        }
        .play-icon {
            width: 60px;
            height: 60px;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(5px);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px solid rgba(255,255,255,0.8);
            transition: all 0.3s ease;
        }
        .play-icon i {
            color: #fff;
            font-size: 24px;
            margin-left: 4px; /* Optical adjustment */
        }
        .video-card:hover .play-icon {
            transform: scale(1.1);
            background: var(--primary-color);
            border-color: var(--primary-color);
        }
        /* Hide overlay when video is playing is handled by JS usually, 
           but for simple controls we let the controls z-index handle interaction.
           To make it look cleaner we can just hide this overlay if controls are active? 
           Actually, the video controls usually appear on hover or tap. 
           We'll keep it simple: The overlay sits on top but pointer-events: none 
           allows clicking the video to play. */
        
        .video-title {
            font-weight: 700;
            font-size: 1.1rem;
            color: #333;
            margin-bottom: 0.5rem;
            transition: color 0.3s;
        }
        .video-card:hover .video-title {
            color: var(--primary-color);
        }
      </style>

      <div class="row">
        @foreach($videos as $video)
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card border-0 h-100 video-card">
            <div class="video-wrapper">
              <video class="js-plyr" playsinline data-poster="{{ $video->thumbnail_path ? asset($video->thumbnail_path) : '' }}">
                @php
                  $extension = strtolower(pathinfo($video->video_path, PATHINFO_EXTENSION));
                  $mime_type = 'video/mp4'; // Default
                  switch($extension) {
                    case 'avi': $mime_type = 'video/x-msvideo'; break;
                    case 'wmv': $mime_type = 'video/x-ms-wmv'; break;
                    case 'mkv': $mime_type = 'video/x-matroska'; break;
                    case 'webm': $mime_type = 'video/webm'; break;
                    case 'mov': $mime_type = 'video/mp4'; break; // Browsers often handle MOV as MP4
                    case 'ogg': $mime_type = 'video/ogg'; break;
                  }
                @endphp
                <source src="{{ asset($video->video_path) }}" type="{{ $mime_type }}" />
              </video>
            </div>
            @if($video->title)
            <div class="card-body p-4 text-center">
              <h5 class="video-title">{{ $video->title }}</h5>
            </div>
            @endif
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  @endif

  
  <!-- Achievements Carousel Section -->
  <section class="achievements-section py-5 bg-light" id="achievements">
    <div class="container py-lg-5">
      <h3 class="global-title">Key Achievements</h3>
      <style>
        .achievements-section .carousel-item {
          height: 600px;
          background: #000;
          border-radius: 20px;
          overflow: hidden;
          position: relative;
        }
        .achievements-section .carousel-item.active,
        .achievements-section .carousel-item-next,
        .achievements-section .carousel-item-prev {
          display: flex;
          align-items: center;
          justify-content: center;
        }
        .achievements-section .carousel-image {
          width: 100%;
          height: 100%;
          object-fit: contain;
          position: relative;
          z-index: 2;
          transition: transform 0.5s ease;
        }
        .achievements-section .carousel-bg-blur {
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          object-fit: cover;
          filter: blur(40px) brightness(0.4);
          z-index: 1;
          transform: scale(1.2);
        }
        .carousel-item:hover .carousel-image {
          transform: scale(1.02);
        }
        .achievements-section .carousel-caption {
          background: linear-gradient(0deg, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0) 100%);
          left: 0;
          right: 0;
          bottom: 0;
          padding: 60px 40px;
          text-align: left;
          z-index: 3;
        }
        .achievements-section .achievement-title {
          font-size: 2.5rem;
          font-weight: 700;
          margin-bottom: 10px;
          color: #fff;
          text-shadow: 2px 2px 10px rgba(0,0,0,0.5);
        }
        .achievements-section .achievement-desc {
          font-size: 1.1rem;
          color: rgba(255,255,255,0.9);
          max-width: 700px;
          text-shadow: 1px 1px 5px rgba(0,0,0,0.5);
        }
        .achievements-section .carousel-control-prev,
        .achievements-section .carousel-control-next {
          width: 50px;
          height: 50px;
          background: var(--primary-color);
          border-radius: 50%;
          top: 50%;
          transform: translateY(-50%);
          opacity: 0.8;
          margin: 0 20px;
          z-index: 4;
        }
        .achievements-section .carousel-control-prev:hover,
        .achievements-section .carousel-control-next:hover {
          opacity: 1;
        }
        .achievements-section .carousel-indicators {
            z-index: 4;
        }
        .achievements-section .carousel-indicators li {
          width: 12px;
          height: 12px;
          border-radius: 50%;
          margin: 0 5px;
          background-color: rgba(255,255,255,0.5);
        }
        .achievements-section .carousel-indicators .active {
          background-color: var(--primary-color);
        }
        @media (max-width: 768px) {
          .achievements-section .carousel-item {
            height: 500px;
          }
          .achievements-section .achievement-title {
            font-size: 1.5rem;
          }
          .achievements-section .achievement-desc {
            font-size: 0.9rem;
          }
        }
      </style>

      <div id="achievementCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#achievementCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#achievementCarousel" data-slide-to="1"></li>
          <li data-target="#achievementCarousel" data-slide-to="2"></li>
          <li data-target="#achievementCarousel" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner shadow-lg">
          <!-- Achievement 1: Video -->
          <div class="carousel-item active">
            <!-- Blurred Background Video -->
            <video autoplay muted loop playsinline class="carousel-bg-blur">
              <source src="{{ asset('assets/video/3.mp4') }}" type="video/mp4">
            </video>
            <!-- Foreground Video -->
            <video autoplay muted loop playsinline class="carousel-image">
              <source src="{{ asset('assets/video/3.mp4') }}" type="video/mp4">
            </video>
            <div class="carousel-caption">
              <h4 class="achievement-title">Visionary Leadership</h4>
              <p class="achievement-desc">Documentary of key strategic summits and high-level diplomatic coordination across Europe and Africa.</p>
            </div>
          </div>

          <!-- Achievement 2: Award -->
          <div class="carousel-item">
            <!-- Blurred Background Image -->
            <img src="{{ asset('assets/images/achievements/1.jpg') }}" class="carousel-bg-blur" alt="Award Background">
            <!-- Foreground Image -->
            <img src="{{ asset('assets/images/achievements/1.jpg') }}" class="carousel-image" alt="Award">
            <div class="carousel-caption">
              <h4 class="achievement-title">Excellence in Diplomacy</h4>
              <p class="achievement-desc">Recognized for outstanding contribution to international relations and strategic partnership development.</p>
            </div>
          </div>

          <!-- Achievement 3: Summit -->
          <div class="carousel-item">
            <!-- Blurred Background Image -->
            <img src="{{ asset('assets/images/achievements/2.jpg') }}" class="carousel-bg-blur" alt="Summit Background">
            <!-- Foreground Image -->
            <img src="{{ asset('assets/images/achievements/2.jpg') }}" class="carousel-image" alt="Summit">
            <div class="carousel-caption">
              <h4 class="achievement-title">Global Strategic Network</h4>
              <p class="achievement-desc">Successfully brokered multiple high-level agreements between international stakeholders and regional leaders.</p>
            </div>
          </div>

          <!-- Achievement 4: Certificate -->
          <div class="carousel-item">
            <!-- Blurred Background Image -->
            <img src="{{ asset('assets/images/achievements/4.jpg') }}" class="carousel-bg-blur" alt="Certificate Background">
            <!-- Foreground Image -->
            <img src="{{ asset('assets/images/achievements/4.jpg') }}" class="carousel-image" alt="Certificate">
            <div class="carousel-caption">
              <h4 class="achievement-title">Professional Certification</h4>
              <p class="achievement-desc">Distinction in Multilingual Translation and International Business Protocol.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#achievementCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#achievementCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section>
  <!-- //Achievements Carousel Section -->

  <!-- BRICS CoSchool Section -->
  @if(isset($coSchoolMedia) && $coSchoolMedia->count() > 0)
  <section class="coschool-section py-5 bg-light" id="coschool">
    <div class="container py-lg-5">
      <div class="d-block mb-5 text-center">
        <h3 class="global-title">BRICS CoSchool</h3>
        <p class="text-muted mt-2">Highlights from the conference.</p>
      </div>

      <div class="row">
        @foreach($coSchoolMedia as $media)
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card border-0 h-100 shadow-sm" style="border-radius: 8px; overflow: hidden;">
            @if($media->type == 'image')
            <a href="{{ asset($media->path) }}" data-lightbox="coschool-gallery" data-title="{{ $media->caption }}">
              <img src="{{ asset($media->path) }}" class="card-img-top" alt="{{ $media->caption }}" style="height: 250px; object-fit: cover; transition: transform 0.3s ease;">
            </a>
            @else
            <div class="video-wrapper" style="height: 250px;">
              <video class="js-plyr" playsinline data-poster="{{ $media->thumbnail_path ? asset($media->thumbnail_path) : '' }}">
                 @php
                  $extension = strtolower(pathinfo($media->path, PATHINFO_EXTENSION));
                  $mime_type = 'video/mp4'; 
                  switch($extension) {
                    case 'avi': $mime_type = 'video/x-msvideo'; break;
                    case 'wmv': $mime_type = 'video/x-ms-wmv'; break;
                    case 'mkv': $mime_type = 'video/x-matroska'; break;
                    case 'webm': $mime_type = 'video/webm'; break;
                  }
                @endphp
                <source src="{{ asset($media->path) }}" type="{{ $mime_type }}" />
              </video>
            </div>
            @endif
            
            @if($media->caption)
            <div class="card-body p-3 text-center bg-white">
              <p class="mb-0 text-muted">{{ $media->caption }}</p>
            </div>
            @endif
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  @endif
  <!-- //Video Section -->


   <!--  News section -->
  <div class="news-section" id="news">
    <section id="grids5-block" class="py-5">
      <div class="container py-lg-3">
        <h3 class="global-title">Latest Blogs</h3>
        <div class="row">
          @forelse($blogs as $blog)
          <div class="col-lg-4 col-md-6 mt-md-4 mt-4">
            <div class="grids5-info">
              <a href="{{ url('blog/'.$blog->slug) }}" class="d-block zoom">
                @if($blog->cover_image)
                  <img src="{{ asset($blog->cover_image) }}" alt="" class="img-fluid news-image" style="height: 250px; width: 100%; object-fit: cover;" />
                @else
                  <img src="{{ asset('assets/images/g1.jpg') }}" alt="" class="img-fluid news-image" style="height: 250px; width: 100%; object-fit: cover;" />
                @endif
              </a>
              <div class="blog-info">
                <h4><a href="{{ url('blog/'.$blog->slug) }}">{{ $blog->title }}</a></h4>
                <p class="date">{{ $blog->created_at->format('F d, Y') }}</p>
                <p>{{ Str::limit(strip_tags($blog->content), 100) }}</p>
                <a href="{{ url('blog/'.$blog->slug) }}" class="btn btn-news mt-4">Read More</a>
              </div>
            </div>
          </div>
          @empty
          <div class="col-12 text-center py-5">
            <p class="text-muted">No blog posts available at the moment. Stay tuned!</p>
          </div>
          @endforelse
        </div>
        <div class="mt-4 text-center">
            <a href="{{ route('blogs.index') }}" class="btn btn-primary theme-button">View More Blogs</a>
        </div>
      </div>
    </section>
  </div>


  <!-- Motivation Section -->
  <section class="motivation-section py-5" id="motivation">
    <div class="container py-lg-5">
      <h3 class="global-title">Where I Started</h3>
      <p class="text-center text-muted mb-5">The journey of a thousand miles begins with a single step. Here are some glimpses of my humble beginnings.</p>
      
      <style>
        .motivation-section .motivation-card {
          border: none;
          border-radius: 15px;
          overflow: hidden;
          box-shadow: 0 10px 30px rgba(0,0,0,0.05);
          transition: transform 0.3s ease, box-shadow 0.3s ease;
          background: #fff;
          height: 100%;
        }
        .motivation-section .motivation-card:hover {
          transform: translateY(-10px);
          box-shadow: 0 15px 40px rgba(0,0,0,0.1);
        }
        .motivation-section .motivation-img-wrapper {
          height: 350px;
          overflow: hidden;
        }
        .motivation-section .motivation-img {
          width: 100%;
          height: 100%;
          object-fit: cover;
          transition: transform 0.5s ease;
        }
        .motivation-section .motivation-card:hover .motivation-img {
          transform: scale(1.1);
        }
        .motivation-section .motivation-content {
          padding: 25px;
          text-align: center;
        }
        @media (max-width: 768px) {
          .motivation-section .motivation-img-wrapper {
            height: 250px;
          }
        }
      </style>

      <div class="row">
        <!-- Motivation 1 -->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="motivation-card shadow-sm">
            <div class="motivation-img-wrapper">
              <img src="{{ asset('assets/images/motivation/5.jpg') }}" class="motivation-img" alt="Beginning 1">
            </div>
            <div class="motivation-content">
              <h5 class="font-weight-bold">Early Ambition</h5>
              <p class="text-muted small">Setting the foundation with passion and a vision for the future.</p>
            </div>
          </div>
        </div>
        <!-- Motivation 2 -->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="motivation-card shadow-sm">
            <div class="motivation-img-wrapper">
              <img src="{{ asset('assets/images/motivation/6.jpg') }}" class="motivation-img" alt="Beginning 2">
            </div>
            <div class="motivation-content">
              <h5 class="font-weight-bold">Persistent Growth</h5>
              <p class="text-muted small">Challenges turned into stepping stones through hard work and dedication.</p>
            </div>
          </div>
        </div>
        <!-- Motivation 3 -->
        <div class="col-lg-4 offset-lg-0 offset-md-3 col-md-6 mb-4">
          <div class="motivation-card shadow-sm">
            <div class="motivation-img-wrapper">
              <img src="{{ asset('assets/images/motivation/7.jpg') }}" class="motivation-img" alt="Beginning 3">
            </div>
            <div class="motivation-content">
              <h5 class="font-weight-bold">Determined Path</h5>
              <p class="text-muted small">Consistency and focus leading to the first major breakthroughs.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //Motivation Section -->


  <!--  Work gallery section -->
  <div class="gallery-section mt-5" style="margin-top: 100px" id="gallery">
    <div class="insta-picks py-5">
      <div class="container py-lg-5">
        <h3 class="global-title">Latest Gallery</h3>
        <div class="row no-gutters masonry">
          @forelse($gallery as $item)
          <div class="col-md-4 col-sm-6 brick p-2">
            <a href="{{ asset($item->image_path) }}" class="js-img-viwer d-block" data-caption="{{ $item->title ?? 'Latest Work' }}"
              data-id="work">
              <img src="{{ asset($item->image_path) }}" class="img-fluid insta-pic" alt="insta-pic" style="height: 350px; width: 100%; object-fit: cover; border-radius: 12px; transition: transform 0.3s;" />
              <div class="content-overlay" style="border-radius: 12px;"></div>
              <div class="content-details fadeIn-top">
                <h4>{{ $item->title ?? 'Work title' }}</h4>
                <p>Portfolio</p>
              </div>
            </a>
          </div>
          @empty
          <div class="col-12 text-center py-5">
            <p class="text-muted">No works in gallery yet. Add some from the admin panel!</p>
          </div>
          @endforelse
        </div>
        <div class="text-center">
          <a href="{{ route('gallery.index') }}" class="btn btn-secondary p-3 mt-5">
            View More Works
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--  //Work gallery section -->
  <!--  Intro video popup section -->
  <section class="video-intro-section" id="intro">
    <div class="new-block top-bottom">
      <div class="container">
        <div class="middle-section text-center">
          <div class="section-width mb-5">
            <h2>Knowledge is Power</h2>
          </div>
          <a href="#small-dialog" class="popup-with-zoom-anim play-view text-center">
            <span class="video-play-icon">
              <span class="fa fa-play"></span>
            </span>
          </a>

          <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
          <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
            <video id="introVideo" width="100%" controls>
                <source src="{{ asset('assets/video/mainv.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  //Intro video popup section -->
  <!--  Page Stats section -->
  <section class="page-stats-section">
    <div class="main-w3 py-5" id="stats">
      <div class="container py-lg-3">
        <h3 class="global-title">Page Stats</h3>
        <style>
          .page-stats-section .grids-speci1 {
            background: #ffffff;
            padding: 40px 20px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            transition: all 0.3s;
            border: 1px solid rgba(0,0,0,0.02);
            height: 100%;
          }
          .page-stats-section .grids-speci1:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.08);
          }
          .page-stats-section .grids-speci1 span {
            font-size: 40px;
            color: var(--primary-color, #ff4c60);
            margin-bottom: 20px;
            display: block;
          }
          .page-stats-section .title-spe {
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 10px;
            color: #333;
          }
          .page-stats-section p {
            font-size: 16px;
            color: #777;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 600;
          }
        </style>
        <div class="row main-cont-wthree-fea text-center d-flex justify-content-center">
          <div class="col-lg-4 col-md-6 mt-4">
            <div class="grids-speci1">
              <span class="fa fa-file-text-o" aria-hidden="true"></span>
              <h3 class="title-spe">{{ $total_blogs }}</h3>
              <p>Total Articles</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4">
            <div class="grids-speci1">
              <span class="fa fa-image" aria-hidden="true"></span>
              <h3 class="title-spe">{{ $total_gallery }}</h3>
              <p>Gallery Images</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4">
            <div class="grids-speci1">
              <span class="fa fa-eye" aria-hidden="true"></span>
              <h3 class="title-spe">{{ $visitor_count }}</h3>
              <p>Page Visitors</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  //Page Stats section -->
 
  <!--  //News section -->
  <!-- Social Links Section -->
  <section class="social-links-section py-5 bg-light" id="social-links">
    <div class="container py-lg-3">
      <h3 class="global-title">Connect with Me</h3>
      <div class="row text-center mt-5">
        @if(isset($contents['social_linkedin']))
        <div class="col-lg-4 col-md-6 mb-4">
          <a href="{{ $contents['social_linkedin'] }}" target="_blank" class="social-card d-block p-4 shadow-sm bg-white rounded-lg transition-all">
            <span class="fa fa-linkedin-square text-primary mb-3" style="font-size: 3rem;"></span>
            <h4 class="h5 font-weight-bold">LinkedIn</h4>
            <p class="text-muted mb-0">Professional Network</p>
          </a>
        </div>
        @endif

        @if(isset($contents['social_facebook']))
        <div class="col-lg-4 col-md-6 mb-4">
          <a href="{{ $contents['social_facebook'] }}" target="_blank" class="social-card d-block p-4 shadow-sm bg-white rounded-lg transition-all">
            <span class="fa fa-facebook-square text-primary mb-3" style="font-size: 3rem;"></span>
            <h4 class="h5 font-weight-bold">Facebook</h4>
            <p class="text-muted mb-0">Stay Connected</p>
          </a>
        </div>
        @endif

        @if(isset($contents['social_instagram']))
        <div class="col-lg-4 col-md-6 mb-4">
          <a href="{{ $contents['social_instagram'] }}" target="_blank" class="social-card d-block p-4 shadow-sm bg-white rounded-lg transition-all">
            <span class="fa fa-instagram text-primary mb-3" style="font-size: 3rem;"></span>
            <h4 class="h5 font-weight-bold">Instagram</h4>
            <p class="text-muted mb-0">Visual Portfolio</p>
          </a>
        </div>
        @endif

        @if(isset($contents['social_whatsapp']))
        <div class="col-lg-4 col-md-6 mb-4">
          <a href="{{ (strpos($contents['social_whatsapp'], 'http') === 0) ? $contents['social_whatsapp'] : 'https://wa.me/'.preg_replace('/[^0-9]/', '', $contents['social_whatsapp']) }}" target="_blank" class="social-card d-block p-4 shadow-sm bg-white rounded-lg transition-all">
            <span class="fa fa-whatsapp text-primary mb-3" style="font-size: 3rem;"></span>
            <h4 class="h5 font-weight-bold">WhatsApp</h4>
            <p class="text-muted mb-0">Instant Messaging</p>
          </a>
        </div>
        @endif

        @if(isset($contents['social_vk']))
        <div class="col-lg-4 col-md-6 mb-4">
          <a href="{{ $contents['social_vk'] }}" target="_blank" class="social-card d-block p-4 shadow-sm bg-white rounded-lg transition-all">
            <span class="fa fa-vk text-primary mb-3" style="font-size: 3rem;"></span>
            <h4 class="h5 font-weight-bold">VK</h4>
            <p class="text-muted mb-0">Social Network</p>
          </a>
        </div>
        @endif

        @if(isset($contents['social_telegram']))
        <div class="col-lg-4 col-md-6 mb-4">
          <a href="{{ (strpos($contents['social_telegram'], 'http') === 0) ? $contents['social_telegram'] : 'https://t.me/'.ltrim($contents['social_telegram'], '@') }}" target="_blank" class="social-card d-block p-4 shadow-sm bg-white rounded-lg transition-all">
            <span class="fa fa-telegram text-primary mb-3" style="font-size: 3rem;"></span>
            <h4 class="h5 font-weight-bold">Telegram</h4>
            <p class="text-muted mb-0">Secure Chat</p>
          </a>
        </div>
        @endif

        @if(isset($contents['social_gmail']))
        <div class="col-lg-4 col-md-6 mb-4">
          <a href="mailto:{{ $contents['social_gmail'] }}" class="social-card d-block p-4 shadow-sm bg-white rounded-lg transition-all">
            <span class="fa fa-envelope text-primary mb-3" style="font-size: 3rem;"></span>
            <h4 class="h5 font-weight-bold">Gmail</h4>
            <p class="text-muted mb-0">Email Me</p>
          </a>
        </div>
        @endif

        @if(!isset($contents['social_linkedin']) && !isset($contents['social_facebook']) && !isset($contents['social_instagram']) && !isset($contents['social_whatsapp']) && !isset($contents['social_vk']) && !isset($contents['social_telegram']) && !isset($contents['social_gmail']))
        <div class="col-12 text-center py-5">
            <p class="text-muted">Social links coming soon! Update them in the admin panel.</p>
        </div>
        @endif
      </div>
    </div>
    <style>
      .social-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 1rem 3rem rgba(0,0,0,.1) !important;
        text-decoration: none;
      }
      .social-card .fa {
        transition: transform 0.3s;
      }
      .social-card:hover .fa {
        transform: scale(1.1);
      }
    </style>
  </section>
  <!--  //Social Links section -->
  
 
@endsection
