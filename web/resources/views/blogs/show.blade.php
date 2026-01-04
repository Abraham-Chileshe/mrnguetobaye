@extends('layouts.app')

@section('content')
<section class="blog-post-section py-5">
    <div class="container py-lg-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <!-- Blog Header -->
                <div class="text-center mb-5">
                    <h1 class="display-4 font-weight-bold">{{ $blog->title }}</h1>
                    <p class="text-muted mt-3">
                        <i class="fa fa-calendar mr-2"></i> {{ $blog->created_at->format('F d, Y') }}
                    </p>
                </div>

                <!-- Cover Image -->
                @if($blog->cover_image)
                <div class="mb-5 shadow-sm rounded overflow-hidden">
                    <img src="{{ asset($blog->cover_image) }}" alt="{{ $blog->title }}" class="img-fluid w-100" style="max-height: 500px; object-fit: cover;">
                </div>
                @endif

                <!-- Content -->
                <div class="blog-content mb-5" style="line-height: 1.8; font-size: 1.1rem; color: #444;">
                    {!! nl2br(e($blog->content)) !!}
                </div>

                <!-- Additional Media -->
                @if($blog->additional_media && count($blog->additional_media) > 0)
                <div class="blog-media mt-5 pt-5 border-top">
                    <h3 class="mb-4">Gallery & Media</h3>
                    <div class="row">
                        @foreach($blog->additional_media as $m)
                        @php $is_video = in_array(strtolower($m['type']), ['mp4','webm','ogg']); @endphp
                        <div class="{{ $is_video ? 'col-12' : 'col-md-6' }} mb-4">
                            <div class="card border-0 shadow-sm h-100 overflow-hidden" style="{{ $is_video ? 'background: #000;' : '' }}">
                                @if(in_array(strtolower($m['type']), ['jpg','jpeg','png','gif','svg']))
                                    <a href="{{ asset($m['path']) }}" class="js-img-viwer">
                                        <img src="{{ asset($m['path']) }}" class="img-fluid" alt="{{ $m['name'] }}" style="height: 300px; width: 100%; object-fit: cover;">
                                    </a>
                                @elseif($is_video)
                                    <video playsinline controls class="w-100 js-plyr">
                                        <source src="{{ asset($m['path']) }}" type="video/{{ $m['type'] }}">
                                    </video>
                                @else
                                    <div class="p-4 text-center d-flex flex-column align-items-center justify-content-center h-100 bg-light">
                                        <i class="fa fa-file-o fa-3x text-muted mb-3"></i>
                                        <a href="{{ asset($m['path']) }}" target="_blank" class="h5">{{ $m['name'] }}</a>
                                        <small class="text-uppercase text-muted">{{ $m['type'] }} File</small>
                                    </div>
                                @endif
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif

                <div class="mt-5 text-center pt-5 border-top">
                    <a href="{{ route('home') }}" class="btn btn-outline-primary theme-button">
                        <i class="fa fa-arrow-left mr-2"></i> Back to Homepage
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
