@extends('layouts.app')

@section('content')
<div class="gallery-section py-5" style="margin-top: 80px;">
    <div class="container py-lg-5">
        <h3 class="global-title">Complete Portfolio</h3>
        <p class="text-muted text-center mb-5">A collection of my recent works and projects.</p>
        
        <div class="row no-gutters masonry">
          @forelse($gallery as $item)
          <div class="col-lg-4 col-md-6 brick p-2">
            <a href="{{ asset($item->image_path) }}" class="js-img-viwer d-block" data-caption="{{ $item->title ?? 'Portfolio Work' }}"
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
            <p class="text-muted">No works in gallery yet.</p>
          </div>
          @endforelse
        </div>

        <div class="mt-5 d-flex justify-content-center">
            {{ $gallery->links() }}
        </div>
    </div>
</div>
@endsection
