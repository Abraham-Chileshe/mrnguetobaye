@extends('layouts.admin')

@section('content')
<div class="container pb-5">
    <div class="mb-4">
        <a href="{{ route('admin.blogs.index') }}" class="text-muted"><i class="fa fa-arrow-left"></i> Back to Blogs</a>
        <h2 class="text-secondary mt-2">{{ isset($blog) ? 'Edit Blog' : 'Create New Blog' }}</h2>
    </div>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card shadow-sm border-0">
        <div class="card-body">
            <form action="{{ isset($blog) ? route('admin.blogs.update', $blog) : route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($blog))
                    @method('PUT')
                @endif

                <div class="row mb-4">
                    <div class="col-md-8">
                        <label class="font-weight-bold">Blog Title</label>
                        <input type="text" name="title" class="form-control" value="{{ old('title', $blog->title ?? '') }}" placeholder="Enter a catchy title...">
                    </div>
                    <div class="col-md-4">
                        <label class="font-weight-bold">Publish Date (Custom)</label>
                        <input type="datetime-local" name="created_at" class="form-control" value="{{ old('created_at', isset($blog) ? $blog->created_at->format('Y-m-d\TH:i') : now()->format('Y-m-d\TH:i')) }}">
                    </div>
                </div>

                <div class="form-group mb-4">
                    <label class="font-weight-bold">Cover Image</label>
                    @if(isset($blog) && $blog->cover_image)
                        <div class="mb-2">
                            <img src="{{ asset($blog->cover_image) }}" alt="" style="height: 150px; border-radius: 8px;">
                        </div>
                    @endif
                    <input type="file" name="cover_image" class="form-control-file">
                    <small class="text-muted">Recommended size: 1200x800px. Max 2MB.</small>
                </div>

                <div class="form-group mb-4">
                    <label class="font-weight-bold">Blog Content</label>
                    <textarea name="content" class="form-control" rows="12" placeholder="Write your blog post content here...">{{ old('content', $blog->content ?? '') }}</textarea>
                </div>

                <div class="form-group mb-4">
                    <label class="font-weight-bold">Additional Media (Optional)</label>
                    <input type="file" name="media[]" class="form-control-file" multiple>
                    <small class="text-muted">You can select multiple files (Images, Videos, etc.). Max 10MB per file.</small>
                    
                    @if(isset($blog) && $blog->additional_media)
                        <div class="mt-3 row">
                            @foreach($blog->additional_media as $m)
                                <div class="col-md-3 mb-3">
                                    <div class="card h-100">
                                        <div class="card-body p-2 text-center">
                                            @if(in_array(strtolower($m['type']), ['jpg','jpeg','png','gif','svg']))
                                                <img src="{{ asset($m['path']) }}" class="img-fluid rounded mb-2" style="height: 100px; object-fit: cover;">
                                            @else
                                                <div class="bg-light rounded d-flex align-items-center justify-content-center mb-2" style="height: 100px;">
                                                    <i class="fa fa-file fa-2x text-muted"></i>
                                                </div>
                                            @endif
                                            <small class="d-block text-truncate">{{ $m['name'] }}</small>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>

                <div class="form-group mb-4">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" name="is_published" class="custom-control-input" id="isPublished" {{ old('is_published', $blog->is_published ?? true) ? 'checked' : '' }}>
                        <label class="custom-control-label font-weight-bold" for="isPublished">Publish immediately</label>
                    </div>
                </div>

                <div class="mt-5 text-right">
                    <button type="submit" class="btn btn-primary theme-button px-5 py-2">
                        {{ isset($blog) ? 'Update Blog Post' : 'Create Blog Post' }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
