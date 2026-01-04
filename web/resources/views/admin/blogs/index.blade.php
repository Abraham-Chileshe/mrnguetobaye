@extends('layouts.admin')

@section('content')
<div class="container pb-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="text-secondary">Manage Blogs</h2>
        <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary theme-button">Add New Blog</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card shadow-sm border-0">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="bg-light">
                        <tr>
                            <th class="border-0 px-4">Cover</th>
                            <th class="border-0">Title</th>
                            <th class="border-0">Status</th>
                            <th class="border-0">Created At</th>
                            <th class="border-0 px-4 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($blogs as $blog)
                        <tr>
                            <td class="px-4">
                                @if($blog->cover_image)
                                    <img src="{{ asset($blog->cover_image) }}" alt="" style="height: 40px; width: 60px; object-fit: cover; border-radius: 4px;">
                                @else
                                    <div class="bg-light d-flex align-items-center justify-content-center" style="height: 40px; width: 60px; border-radius: 4px;">
                                        <i class="fa fa-image text-muted"></i>
                                    </div>
                                @endif
                            </td>
                            <td>{{ $blog->title }}</td>
                            <td>
                                <span class="badge {{ $blog->is_published ? 'badge-success' : 'badge-secondary' }}">
                                    {{ $blog->is_published ? 'Published' : 'Draft' }}
                                </span>
                            </td>
                            <td>{{ $blog->created_at->format('M d, Y') }}</td>
                            <td class="px-4 text-right">
                                <a href="{{ route('admin.blogs.edit', $blog) }}" class="btn btn-sm btn-outline-primary mr-1">Edit</a>
                                <form action="{{ route('admin.blogs.destroy', $blog) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this blog?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center py-5 text-muted">No blogs found. Start by creating one!</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
