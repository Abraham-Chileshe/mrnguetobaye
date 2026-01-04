@extends('layouts.app')

@section('content')
<section class="blog-listing-section py-5">
    <div class="container py-lg-5">
        <div class="text-center mb-5">
            <h3 class="global-title">All Blog Posts</h3>
            <p class="text-muted">Stay updated with our latest news and insights</p>
        </div>

        <div class="row">
            @forelse($blogs as $blog)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="grids5-info shadow-sm h-100 d-flex flex-column">
                    <a href="{{ route('blogs.show', $blog->slug) }}" class="d-block zoom">
                        @if($blog->cover_image)
                            <img src="{{ asset($blog->cover_image) }}" alt="" class="img-fluid news-image" style="height: 250px; width: 100%; object-fit: cover;" />
                        @else
                            <img src="{{ asset('assets/images/g1.jpg') }}" alt="" class="img-fluid news-image" style="height: 250px; width: 100%; object-fit: cover;" />
                        @endif
                    </a>
                    <div class="blog-info p-4 flex-grow-1 d-flex flex-column">
                        <h4><a href="{{ route('blogs.show', $blog->slug) }}">{{ $blog->title }}</a></h4>
                        <p class="date text-primary small mb-2"><i class="fa fa-calendar mr-1"></i> {{ $blog->created_at->format('M d, Y') }}</p>
                        <p class="text-muted mb-4">{{ Str::limit(strip_tags($blog->content), 120) }}</p>
                        <div class="mt-auto">
                            <a href="{{ route('blogs.show', $blog->slug) }}" class="btn btn-outline-primary theme-button btn-sm">Read More <i class="fa fa-arrow-right ml-1 small"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center py-5">
                <div class="bg-light p-5 rounded">
                    <i class="fa fa-pencil-square-o fa-4x text-muted mb-3"></i>
                    <h4>No blog posts yet</h4>
                    <p class="text-muted">We haven't shared anything yet. Check back soon!</p>
                    <a href="{{ route('home') }}" class="btn btn-primary theme-button mt-3">Back to Homepage</a>
                </div>
            </div>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="mt-5 d-flex justify-content-center">
            {{ $blogs->links() }}
        </div>
    </div>
</section>

<style>
    .grids5-info {
        background: #fff;
        border-radius: 8px;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .grids5-info:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.1) !important;
    }
    .blog-info h4 a {
        color: #333;
        font-weight: 600;
        text-decoration: none;
        transition: 0.3s;
    }
    .blog-info h4 a:hover {
        color: var(--primary-color);
    }
    /* Pagination Styling */
    .pagination {
        gap: 5px;
    }
    .page-item.active .page-link {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
    }
    .page-link {
        color: #333;
        border-radius: 5px !important;
        padding: 8px 16px;
    }
</style>
@endsection
