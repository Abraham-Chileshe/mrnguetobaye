<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Models\PageContent;
use App\Models\Blog;
use App\Models\Gallery;

Route::get('/', function () {
    $contents = PageContent::all()->pluck('value', 'key');
    $blogs = Blog::where('is_published', true)->orderBy('created_at', 'desc')->take(9)->get();
    $gallery = Gallery::orderBy('created_at', 'desc')->take(9)->get();
    $videos = \App\Models\Video::orderBy('created_at', 'desc')->get();
    $coSchoolMedia = \App\Models\CoSchoolMedia::orderBy('created_at', 'desc')->get();
    $certifications = \App\Models\Certification::orderBy('created_at', 'desc')->get();
    
    // Page Stats
    $total_blogs = Blog::where('is_published', true)->count();
    $total_gallery = Gallery::count();
    
    // Visitor Count Logic
    $visitor_record = PageContent::firstOrCreate(['key' => 'visitor_count'], ['value' => '0']);
    $visitor_count = (int)$visitor_record->value + 1;
    $visitor_record->update(['value' => (string)$visitor_count]);
    
    return view('home', compact('contents', 'blogs', 'gallery', 'videos', 'coSchoolMedia', 'total_blogs', 'total_gallery', 'visitor_count', 'certifications'));
})->name('home');

Route::get('/gallery', [AdminController::class, 'indexGallery'])->name('gallery.index');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::post('/admin/update', [AdminController::class, 'update'])->name('admin.update');
    
    // Blog Management
    Route::resource('admin/blogs', BlogController::class)->names('admin.blogs');
    // Gallery Management
    Route::post('/admin/gallery', [AdminController::class, 'storeGallery'])->name('admin.gallery.store');
    Route::delete('/admin/gallery/{gallery}', [AdminController::class, 'destroyGallery'])->name('admin.gallery.destroy');
    // Video Management Routes
    Route::post('/admin/videos', [App\Http\Controllers\AdminController::class, 'storeVideo'])->name('admin.videos.store');
    Route::delete('/admin/videos/{video}', [App\Http\Controllers\AdminController::class, 'destroyVideo'])->name('admin.videos.destroy');

    // CoSchool Management Routes
    Route::post('/admin/coschool', [App\Http\Controllers\AdminController::class, 'storeCoSchool'])->name('admin.coschool.store');
    Route::delete('/admin/coschool/{media}', [App\Http\Controllers\AdminController::class, 'destroyCoSchool'])->name('admin.coschool.destroy');
    
    // Certification Management Routes
    Route::post('/admin/certifications', [App\Http\Controllers\AdminController::class, 'storeCertification'])->name('admin.certifications.store');
    Route::delete('/admin/certifications/{certification}', [App\Http\Controllers\AdminController::class, 'destroyCertification'])->name('admin.certifications.destroy');
});

Route::get('/blog', [BlogController::class, 'indexFrontend'])->name('blogs.index');

Route::get('/blog/{blog:slug}', [BlogController::class, 'show'])->name('blogs.show');
