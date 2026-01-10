<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PageContent;

class AdminController extends Controller
{
    public function index()
    {
        $contents = \App\Models\PageContent::all()->pluck('value', 'key');
        $gallery = \App\Models\Gallery::all();
        $videos = \App\Models\Video::all();
        $coSchoolMedia = \App\Models\CoSchoolMedia::all();
        $certifications = \App\Models\Certification::orderBy('created_at', 'desc')->get();
        return view('admin.dashboard', compact('contents', 'gallery', 'videos', 'coSchoolMedia', 'certifications'));
    }

    public function update(Request $request)
    {
        $data = $request->except(['_token', 'about_image', 'cv_file']);

        foreach ($data as $key => $value) {
            PageContent::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        if ($request->hasFile('about_image')) {
            $path = $request->file('about_image')->store('uploads', 'public');
            PageContent::updateOrCreate(
                ['key' => 'about_image'],
                ['value' => 'storage/' . $path]
            );
        }

        if ($request->hasFile('cv_file')) {
            $path = $request->file('cv_file')->store('uploads', 'public');
            PageContent::updateOrCreate(
                ['key' => 'cv_file'],
                ['value' => 'storage/' . $path]
            );
        }

        return redirect()->back()->with('success', 'Content updated successfully!');
    }
    public function storeGallery(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
            'title' => 'nullable|string|max:255'
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('gallery', 'public');
            \App\Models\Gallery::create([
                'image_path' => 'storage/' . $path,
                'title' => $request->title
            ]);
        }

        return redirect()->back()->with('success', 'Image added to gallery successfully!');
    }

    public function destroyGallery(\App\Models\Gallery $gallery)
    {
        if ($gallery->image_path) {
            \Illuminate\Support\Facades\Storage::disk('public')->delete(str_replace('storage/', '', $gallery->image_path));
        }
        $gallery->delete();
        return redirect()->back()->with('success', 'Image removed from gallery successfully!');
    }

    public function indexGallery()
    {
        $gallery = \App\Models\Gallery::orderBy('created_at', 'desc')->paginate(21); // 3x7 grid
        return view('gallery.index', compact('gallery'));
    }
    public function storeVideo(Request $request)
    {
        $request->validate([
            'video' => 'required|mimes:mp4,mov,ogg,qt,avi,wmv,mkv,webm|max:51200', // 50MB max
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'title' => 'nullable|string|max:255'
        ]);

        if ($request->hasFile('video')) {
            $path = $request->file('video')->store('videos', 'public');
            $thumbnailPath = null;

            if ($request->hasFile('thumbnail')) {
                $thumbnailPath = 'storage/' . $request->file('thumbnail')->store('thumbnails', 'public');
            }

            \App\Models\Video::create([
                'video_path' => 'storage/' . $path,
                'thumbnail_path' => $thumbnailPath,
                'title' => $request->title
            ]);
        }

        return redirect()->back()->with('success', 'Video added successfully!');
    }

    public function destroyVideo(\App\Models\Video $video)
    {
        if ($video->video_path) {
            \Illuminate\Support\Facades\Storage::disk('public')->delete(str_replace('storage/', '', $video->video_path));
        }
        if ($video->thumbnail_path) {
            \Illuminate\Support\Facades\Storage::disk('public')->delete(str_replace('storage/', '', $video->thumbnail_path));
        }
        $video->delete();
        return redirect()->back()->with('success', 'Video deleted successfully!');
    }

    public function storeCoSchool(Request $request)
    {
        $request->validate([
            'media' => 'required', // Validation logic for image vs video
            'media_type' => 'required|in:image,video',
            'caption' => 'nullable|string|max:255'
        ]);

        if ($request->media_type === 'image') {
            $request->validate(['media' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5120']);
            $path = $request->file('media')->store('coschool/images', 'public');
            \App\Models\CoSchoolMedia::create([
                'type' => 'image',
                'path' => 'storage/' . $path,
                'caption' => $request->caption
            ]);
        } elseif ($request->media_type === 'video') {
            $request->validate([
                'media' => 'mimes:mp4,mov,ogg,qt,avi,wmv,mkv,webm|max:51200',
                'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120'
            ]);
            $path = $request->file('media')->store('coschool/videos', 'public');
            $thumbnailPath = null;
            if ($request->hasFile('thumbnail')) {
                $thumbnailPath = 'storage/' . $request->file('thumbnail')->store('thumbnails', 'public');
            }
            \App\Models\CoSchoolMedia::create([
                'type' => 'video',
                'path' => 'storage/' . $path,
                'thumbnail_path' => $thumbnailPath,
                'caption' => $request->caption
            ]);
        }

        return redirect()->back()->with('success', 'CoSchool media added successfully!');
    }

    public function destroyCoSchool(\App\Models\CoSchoolMedia $media)
    {
        if ($media->path) {
            \Illuminate\Support\Facades\Storage::disk('public')->delete(str_replace('storage/', '', $media->path));
        }
        if ($media->thumbnail_path) {
            \Illuminate\Support\Facades\Storage::disk('public')->delete(str_replace('storage/', '', $media->thumbnail_path));
        }
        $media->delete();
        return redirect()->back()->with('success', 'Meida removed successfully!');
    }

    public function storeCertification(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
            'title' => 'nullable|string|max:255'
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('certifications', 'public');
            \App\Models\Certification::create([
                'image_path' => 'storage/' . $path,
                'title' => $request->title
            ]);
        }

        return redirect()->back()->with('success', 'Certification added successfully!');
    }

    public function destroyCertification(\App\Models\Certification $certification)
    {
        if ($certification->image_path) {
            \Illuminate\Support\Facades\Storage::disk('public')->delete(str_replace('storage/', '', $certification->image_path));
        }
        $certification->delete();
        return redirect()->back()->with('success', 'Certification removed successfully!');
    }
}
