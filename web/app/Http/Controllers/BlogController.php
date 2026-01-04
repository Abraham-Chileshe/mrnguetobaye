<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->get();
        return view('admin.blogs.index', compact('blogs'));
    }

    public function indexFrontend()
    {
        $blogs = Blog::where('is_published', true)->orderBy('created_at', 'desc')->paginate(20);
        return view('blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blogs.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'cover_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'media.*' => 'max:102400', // 100MB limit per file
            'created_at' => 'nullable|date',
        ]);

        $data = $request->only(['title', 'content', 'is_published', 'created_at']);
        $data['slug'] = Str::slug($request->title) . '-' . time();
        $data['is_published'] = $request->has('is_published');
        
        if ($request->hasFile('cover_image')) {
            $path = $request->file('cover_image')->store('blogs/covers', 'public');
            $data['cover_image'] = 'storage/' . $path;
        }

        $media = [];
        if ($request->hasFile('media')) {
            foreach ($request->file('media') as $file) {
                $path = $file->store('blogs/media', 'public');
                $media[] = [
                    'path' => 'storage/' . $path,
                    'type' => $file->getClientOriginalExtension(),
                    'name' => $file->getClientOriginalName()
                ];
            }
        }
        $data['additional_media'] = $media;

        Blog::create($data);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog created successfully!');
    }

    public function edit(Blog $blog)
    {
        return view('admin.blogs.form', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'cover_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'media.*' => 'max:102400', // 100MB limit per file
            'created_at' => 'nullable|date',
        ]);

        $data = $request->only(['title', 'content', 'created_at']);
        $data['is_published'] = $request->has('is_published');


        if ($request->hasFile('cover_image')) {
            // Delete old cover
            if ($blog->cover_image) {
                Storage::disk('public')->delete(str_replace('storage/', '', $blog->cover_image));
            }
            $path = $request->file('cover_image')->store('blogs/covers', 'public');
            $data['cover_image'] = 'storage/' . $path;
        }

        if ($request->hasFile('media')) {
            $media = $blog->additional_media ?? [];
            foreach ($request->file('media') as $file) {
                $path = $file->store('blogs/media', 'public');
                $media[] = [
                    'path' => 'storage/' . $path,
                    'type' => $file->getClientOriginalExtension(),
                    'name' => $file->getClientOriginalName()
                ];
            }
            $data['additional_media'] = $media;
        }

        $blog->update($data);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog updated successfully!');
    }

    public function show(Blog $blog)
    {
        return view('blogs.show', compact('blog'));
    }

    public function destroy(Blog $blog)
    {
        if ($blog->cover_image) {
            Storage::disk('public')->delete(str_replace('storage/', '', $blog->cover_image));
        }

        if ($blog->additional_media) {
            foreach ($blog->additional_media as $m) {
                Storage::disk('public')->delete(str_replace('storage/', '', $m['path']));
            }
        }

        $blog->delete();

        return redirect()->route('admin.blogs.index')->with('success', 'Blog deleted successfully!');
    }
}
