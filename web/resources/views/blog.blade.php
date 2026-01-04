@extends('layouts.app')

@section('content')
  <!-- Blog breadcrum -->
  <section class="blog-grid-breadcrum">
    <div class="breadcrum-bg py-sm-5 py-4">
      <div class="container py-lg-3">
        <h2>Blog Page</h2>
        <p><a href="{{ url('/') }}">Home</a> &nbsp; - &nbsp; Blog</p>
      </div>
    </div>
  </section>
  <!-- //Blog breadcrum -->

  <div class="display-ad" style="margin: 8px auto; display: block; text-align:center;">
    <!---728x90--->
  </div>

  <!-- Blog Section -->
  <section class="blog-grid">
    <section id="grids5-block" class="py-5">
      <div class="container py-lg-3">
        <div class="list-single-view ">
          <div class="row">
            <div class="col-md-12 mt-md-4 mt-4">
              <div class="grids5-info">
                <a href="{{ url('blog/single') }}" class="d-block zoom"><img src="{{ asset('assets/images/g9.jpg') }}" alt="" class="img-fluid news-image" /></a>
                <div class="blog-info">
                  <h4><a href="{{ url('blog/single') }}">Creative Photography art design from Mix Portfolio</a></h4>
                  <p class="date">January 29, 2020</p>
                  <p class="blog-text">Lorem ipsum dolor sit, icing elit. Nemo veritatis omnis quae quaerat totam culpa odit repellendus reiciendis,
                    aliquid vero, illum quis maxime ducimus voluptate laborum tenetur, unde ea enim.</p>
                  <p class="blog-text">Lorem ipsum dolor sit, Mollitia dicta eveniet molestiae quo facere molestias praesentium illo tempora
                    exercitationem necessitatibus aliquid iure illum quis maxime ducimus veritatis omnis nam, voluptate laborum tenetur, unde ea enim.
                  </p>
                  <a href="{{ url('blog/single') }}" class="btn btn-news mt-4 mt-md-5">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="list-view mt-5">
          <div class="row">
            @foreach(['g4' => 'Creative Photography', 'g5' => 'Photography System', 'g6' => 'portrait tools', 'g7' => 'Creative Photography'] as $img => $title)
            <div class="col-lg-6 mt-md-4 mt-4">
              <div class="grids5-info">
                <a href="{{ url('blog/single') }}" class="d-block zoom"><img src="{{ asset('assets/images/'.$img.'.jpg') }}" alt="" class="img-fluid news-image" /></a>
                <div class="blog-info">
                  <h4><a href="{{ url('blog/single') }}">{{ $title }}</a></h4>
                  <p class="date">January 29, 2020</p>
                  <p class="blog-text">Lorem ipsum dolor sit amet nostrum ad minus ipsam quas unde earum!</p>
                  <a href="{{ url('blog/single') }}" class="btn btn-news mt-3">Read More</a>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>

        <div class="grid-view mt-5">
          <div class="row">
            @foreach(['g1' => 'Creative Photography', 'g2' => 'Photography System', 'g3' => 'portrait tools'] as $img => $title)
            <div class="col-lg-4 col-md-6 mt-md-4 mt-4">
              <div class="grids5-info">
                <a href="{{ url('blog/single') }}" class="d-block zoom"><img src="{{ asset('assets/images/'.$img.'.jpg') }}" alt="" class="img-fluid news-image" /></a>
                <div class="blog-info">
                  <h4><a href="{{ url('blog/single') }}">{{ $title }}</a></h4>
                  <p class="date">January 29, 2020</p>
                  <p class="blog-text">Lorem ipsum dolor sit amet nostrum ad minus libero fugiat molestiae ullam ipsam quas unde earum!</p>
                  <a href="{{ url('blog/single') }}" class="btn btn-news mt-4">Read More</a>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
        <ul class="pagination mt-5 justify-content-center">
          <li class="page-item">
            <a class="page-link" href="#"> <span class="fa fa-angle-double-left"></span> Previous</a>
          </li>
          <li class="page-item">
            <a class="page-link active" href="#">1</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">2</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">3</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">Next <span class="fa fa-angle-double-right"></span></a>
          </li>
          <div class="clear"></div>
        </ul>
      </div>
    </section>
  </section>
  <!-- //Blog Section -->
@endsection
