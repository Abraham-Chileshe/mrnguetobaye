@extends('layouts.app')

@section('content')
  <!-- Single post breadcrum -->
  <section class="blog-grid-breadcrum">
    <div class="breadcrum-bg py-sm-5 py-4">
      <div class="container py-lg-3">
        <h2>Single Post</h2>
        <p><a href="{{ url('/') }}">Home</a> &nbsp; - &nbsp; Single Post</p>
      </div>
    </div>
  </section>
  <!-- //Single post breadcrum -->

  <div class="display-ad" style="margin: 8px auto; display: block; text-align:center;">
    <!---728x90--->
  </div>

  <!-- Single post -->
  <section class="blog-grid-single">
    <section class="blog-grid-single1 py-5">
      <div class="container py-lg-3">
        <div class="text-bg-image" style="background: url({{ asset('assets/images/banner2.jpg') }}) no-repeat; background-size: cover; min-height: 400px;">
        </div>
        <div class="d-grid-1">
          <div class="text">
            <h6 class="text-logo">Mix Personal Portfolio</h6>
            <h3 class="text-title">A LEAD UX & UI DESIGNER BASED IN CANADA</h3>
            <ul class="blog-list">
              <li>
                <p><span class="fa fa-clock-o"></span> Jan 2020</p>
              </li>
              <li>
                <p><span class="fa fa-user"></span> By admin</p>
              </li>
              <li>
                <p><span class="fa fa-heart-o"></span> <strong>48</strong> likes</p>
              </li>
              <li>
                <p><span class="fa fa-comments-o"></span> <strong>12</strong> comments</p>
              </li>
            </ul>
          </div>
        </div>
        <div class="text-content-text">
          <div class="d-grid-2">
            <div class="text2">
              <p class="text2-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat, hic reprehenderit
                eum cupiditate deleniti asperiores illum ad tenetur aliquam culpa fugit odit consequatur. Rerum illo
                accusantium aliquid quae adipisci fugiat sapiente delectus unde architecto. Tempore saepe maxime illo
                laborum obcaecati.</p>
              <p class="text2-text2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis beatae ullam
                expedita. Ut explicabo minima fugit ipsum sapiente fuga et facere est autem iste ducimus totam accusamus
                quasi distinctio, excepturi voluptatum harum porro nostrum nemo iusto culpa expedita cupiditate omnis.
                Animi iusto officiis at voluptates vel laboriosam eum error voluptas.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="display-ad" style="margin: 8px auto; display: block; text-align:center;">
      <!---728x90--->
    </div>

    <!-- text-styles-33 -->
    <section class="blog-grid-single2">
      <div class="text-styles-highlight">
        <div class="container">
          <div class="text-styles-top-33">
            <p><q>You've always got to think about having some fixed income in your portfolio as well as equities.</q> </p>
          </div>
        </div>
      </div>
    </section>
    <!-- /text-styles-33 -->

    <div class="display-ad" style="margin: 8px auto; display: block; text-align:center;">
      <!---728x90--->
    </div>

    <!-- text -->
    <section class="blog-grid-single3">
      <div class="text-element-9">
        <div class="container">
          <div class="d-grid grid-text-9">
            <div class="right-text-9">
              <h4 class="text-head-text-9"><a href="#text">Imagination is more important than knowledge</a></h4>
              <p class="sub-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat nam, quos facere dolor
                repellendus odio. Voluptatum provident quasi necessitatibus laboriosam alias dicta quis voluptate minus
                minima dolorum quod, quaerat modi veritatis libero! Culpa facilis enim optio veniam voluptas. Laudantium
                explicabo optio quam ea deleniti odio totam adipisci illo, enim quos corrupti. Animi labore natus at quas
                laborum. Soluta, nam molestiae.</p>
              <p class="sub-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, tenetur amet.
                Quibusdam nemo aut ut non aliquam nam est quae aspernatur repellendus illo id earum ipsa debitis saepe
                maiores quasi voluptate, sunt reiciendis voluptatibus veniam pariatur? Tempore laudantium libero adipisci.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- //text -->


    <!-- text-styles-30 -->
    <section class="blog-grid-single4">
      <div class="text-styles-30_sur py-5">
        <div class="container py-lg-3">
          <div class="text-styles-top-30">
            <h3>Comments</h3>
            <div class="media mt-5">
              <img src="{{ asset('assets/images/c1.jpg') }}" class="mr-3 rounded" alt="...">
              <div class="media-body">
                <h5 class="mt-0">Benjamin</h5>
                <span class="time">19 minutes ago</span>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero repellendus a nam, iusto cum incidunt repellat recusandae odit
                  dignissimos aperiam esse rerum accusamus fugiat quam.</p>
                <a href="#reply-form" class="reply">Reply</a>

                <div class="media mt-3">
                  <a class="" href="#">
                    <img src="{{ asset('assets/images/c2.jpg') }}" class="mr-3 rounded" alt="...">
                  </a>
                  <div class="media-body">
                    <h5 class="mt-0">Dane Walker</h5>
                    <span class="time">4 hours ago</span>
                    <p>In gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio. Fusce condimentum nunc ac nisi vulputate
                      fringilla. Donec lacinia congue felis in faucibus.</p>
                    <a href="#reply-form" class="reply">Reply</a>
                  </div>
                </div>
              </div>
            </div>


            <div class="media mt-5">
              <img src="{{ asset('assets/images/c3.jpg') }}" class="mr-3 rounded" alt="...">
              <div class="media-body">
                <h5 class="mt-0">Adam Ster</h5>
                <span class="time">16 hours ago</span>
                <p>Totam consequuntur. Culpa eligendi excepturi omnis ad facilis repudiandae a ullam officia explicabo. Veniam incidunt animi qui
                  accusamus enim in sapiente velit.</p>
                <a href="#reply-form" class="reply">Reply</a>
              </div>
            </div>


            <div class="media mt-5">
              <img src="{{ asset('assets/images/c1.jpg') }}" class="mr-3 rounded" alt="...">
              <div class="media-body">
                <h5 class="mt-0">Benjamin</h5>
                <span class="time">Yerterday</span>
                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio. Fusce condimentum nunc
                  ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                <a href="#reply-form" class="reply">Reply</a>
              </div>
            </div>



          </div>
        </div>
      </div>
    </section>
    <!-- /text-styles-30 -->
    <section class="blog-grid-single5">
      <div class="grid-main py-3">
        <div class="container">
          <div class="horizontal-align">
            <div class="grids-titles">
              <h3 class="grids-title">Related posts</h3>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="grid-column">
                  <a href="#url"><img class="card-img-top" src="{{ asset('assets/images/g4.jpg') }}" alt="Card image"></a>
                  <div class="card-grid">
                    <div class="card-grid-column1">
                      <a href="#url">
                        <h4 class="card-title">On the other hand</h4>
                      </a>
                      <p class="card-text">Lorem ipsum dolor sit.</p>
                    </div>
                    <div class="card-grid-column2">
                      <p class="image-caption">Design</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 mt-sm-0 mt-5">
                <div class="grid-column">
                  <a href="#url"><img class="card-img-top" src="{{ asset('assets/images/g9.jpg') }}" alt="Card image"></a>
                  <div class="card-grid">
                    <div class="card-grid-column1">
                      <a href="#url">
                        <h4 class="card-title">On the other hand</h4>
                      </a>
                      <p class="card-text">Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div class="card-grid-column2">
                      <p class="image-caption">Art</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>

    <!-- form 29 block -->
    <section class="blog-grid-single6" id="reply-form">
      <div class="form-29 py-5">
        <div class="container pb-lg-3">
          <div class="form-main-cont-29">
            <div class="content-29-form align-center">
              <h3 class="title-cont-foem29">Leave a reply</h3>
              <form action="#" method="post" class="contact-form-container">
                @csrf
                <div>
                  <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                </div>
                <div>
                  <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                </div>
                <div>
                  <textarea class="contact-textarea form-control" placeholder="Your Comment" required></textarea>
                </div>
                <div class="text-right">
                  <button type="submit" class="btn btn-primary theme-button">Add Comment</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </section>
  <!-- //Single post -->
@endsection
