@extends('layouts.admin')

@section('content')
<div class="container pb-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="text-secondary">Dashboard</h2>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card shadow-sm border-0">
        <div class="card-header bg-white border-bottom-0 pb-0">
            <ul class="nav nav-tabs card-header-tabs" id="contentTabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Hero Section</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="about-tab" data-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="false">About Section</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact Section</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="services-tab" data-toggle="tab" href="#services" role="tab" aria-controls="services" aria-selected="false">Services Section</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="languages-tab" data-toggle="tab" href="#languages" role="tab" aria-controls="languages" aria-selected="false">Languages Section</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="gallery-tab" data-toggle="tab" href="#gallery-mgmt" role="tab" aria-controls="gallery-mgmt" aria-selected="false">Gallery Management</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="social-tab" data-toggle="tab" href="#social" role="tab" aria-controls="social" aria-selected="false">Social Links</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="video-tab" data-toggle="tab" href="#video-mgmt" role="tab" aria-controls="video-mgmt" aria-selected="false">Video Management</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="coschool-tab" data-toggle="tab" href="#coschool-mgmt" role="tab" aria-controls="coschool-mgmt" aria-selected="false">BRICS CoSchool</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="tab-content" id="contentTabsContent">
                    <!-- Hero Tab -->
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h5 class="mb-4 text-primary">Hero Banner Settings</h5>
                        <div class="form-group">
                            <label class="font-weight-bold">Hero Title</label>
                            <input type="text" name="hero_title" class="form-control" value="{{ $contents['hero_title'] ?? '' }}" placeholder="e.g. Christopher">
                            <small class="form-text text-muted">The main heading name in the hero banner.</small>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Hero Subtitle</label>
                            <input type="text" name="hero_subtitle" class="form-control" value="{{ $contents['hero_subtitle'] ?? '' }}" placeholder="e.g. UI/UX Designer">
                            <small class="form-text text-muted">The subtitle text below the name.</small>
                        </div>
                    </div>

                    <!-- About Tab -->
                    <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">
                        <h5 class="mb-4 text-primary">About Me Section</h5>
                        <div class="form-group">
                            <label class="font-weight-bold">About Text</label>
                            <textarea name="about_text" class="form-control" rows="6" placeholder="Write something about yourself...">{{ $contents['about_text'] ?? '' }}</textarea>
                        </div>
                        
                        <div class="form-group mt-4">
                            <label class="font-weight-bold">Profile Image</label>
                            @if(isset($contents['about_image']))
                                <div class="mb-2">
                                    <img src="{{ asset($contents['about_image']) }}" alt="Current Image" style="height: 100px; width: auto; border-radius: 5px;">
                                </div>
                            @endif
                            <input type="file" name="about_image" class="form-control-file">
                            <small class="form-text text-muted">Upload a new image to replace the current one.</small>
                        </div>

                        <div class="form-group mt-4">
                            <label class="font-weight-bold">CV / Resume</label>
                            @if(isset($contents['cv_file']))
                                <div class="mb-2">
                                    <a href="{{ asset($contents['cv_file']) }}" target="_blank" class="text-primary"><i class="fa fa-file-pdf-o"></i> View Current CV</a>
                                </div>
                            @endif
                            <input type="file" name="cv_file" class="form-control-file">
                            <small class="form-text text-muted">Upload a PDF or Doc file.</small>
                        </div>
                    </div>

                    <!-- Contact Tab -->
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <h5 class="mb-4 text-primary">Contact Information</h5>
                        <div class="form-group">
                            <label class="font-weight-bold">Contact Email</label>
                            <input type="email" name="contact_email" class="form-control" value="{{ $contents['contact_email'] ?? '' }}" placeholder="e.g. example@mail.com">
                            <small class="form-text text-muted">This email will be displayed in the contact section.</small>
                        </div>
                    </div>

                    <!-- Services Tab -->
                    <div class="tab-pane fade" id="services" role="tabpanel" aria-labelledby="services-tab">
                        <h5 class="mb-4 text-primary">Services Configuration</h5>
                        
                        <!-- Service 1 -->
                        <div class="card mb-3 border-light bg-light">
                            <div class="card-body">
                                <h6 class="font-weight-bold text-dark">Service 1</h6>
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="service_1_title" class="form-control" value="{{ $contents['service_1_title'] ?? 'High-Level Meeting Coordination' }}" placeholder="Service Title">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="service_1_desc" class="form-control" rows="3" placeholder="Service Description">{{ $contents['service_1_desc'] ?? 'Organization of strategic meetings with African presidents, ministers, and business leaders, as well as representatives from South America and the Caribbean in Moscow.' }}</textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Service 2 -->
                        <div class="card mb-3 border-light bg-light">
                            <div class="card-body">
                                <h6 class="font-weight-bold text-dark">Service 2</h6>
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="service_2_title" class="form-control" value="{{ $contents['service_2_title'] ?? 'Multilingual Translation Services' }}" placeholder="Service Title">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="service_2_desc" class="form-control" rows="3" placeholder="Service Description">{{ $contents['service_2_desc'] ?? 'Simultaneous translation from Russian to English, French, and Spanish during meetings and negotiations with international clients and stakeholders.' }}</textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Service 3 -->
                        <div class="card mb-3 border-light bg-light">
                            <div class="card-body">
                                <h6 class="font-weight-bold text-dark">Service 3</h6>
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="service_3_title" class="form-control" value="{{ $contents['service_3_title'] ?? 'Strategic Partnership Development' }}" placeholder="Service Title">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="service_3_desc" class="form-control" rows="3" placeholder="Service Description">{{ $contents['service_3_desc'] ?? 'Building and maintaining key relationships with stakeholders across Africa, South America, and the Caribbean to support business growth and market expansion.' }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Languages Tab -->
                    <div class="tab-pane fade" id="languages" role="tabpanel" aria-labelledby="languages-tab">
                        <h5 class="mb-4 text-primary">Languages Configuration</h5>
                        
                        @php
                            $languages = [
                                1 => ['title' => 'French', 'desc' => 'Native language providing seamless communication with Francophone African nations, officials, and business partners. Essential for high-level diplomatic engagement and partnership development across French-speaking regions.'],
                                2 => ['title' => 'Russian', 'desc' => 'Professional fluency enabling effective communication with Russian-speaking clients, officials, and colleagues. Primary working language for conducting negotiations and coordinating meetings in Moscow.'],
                                3 => ['title' => 'English', 'desc' => 'Advanced proficiency facilitating engagement with international stakeholders across Africa, South America, and the Caribbean. Critical for global business coordination and multilateral diplomatic relations.'],
                                4 => ['title' => 'Spanish', 'desc' => 'Working proficiency enabling communication with clients and partners from South America and the Caribbean. Provides occasional translation support during international meetings and negotiations.']
                            ];
                        @endphp

                        @foreach($languages as $i => $default)
                        <div class="card mb-3 border-light bg-light">
                            <div class="card-body">
                                <h6 class="font-weight-bold text-dark">Language {{ $i }}</h6>
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="lang_{{ $i }}_title" class="form-control" value="{{ $contents['lang_'.$i.'_title'] ?? $default['title'] }}" placeholder="Language Title">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="lang_{{ $i }}_desc" class="form-control" rows="3" placeholder="Language Description">{{ $contents['lang_'.$i.'_desc'] ?? $default['desc'] }}</textarea>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <!-- Gallery Tab (Placeholder for logic, will move outside the main form for better control) -->
                    <div class="tab-pane fade" id="gallery-mgmt" role="tabpanel" aria-labelledby="gallery-tab">
                        <h5 class="mb-4 text-primary">Manage Gallery Images</h5>
                        <p class="text-muted">You can add and remove images from the "Latest Works" section here.</p>
                        <!-- Management will be handled by separate forms below -->
                    </div>

                    <!-- Video Tab (Placeholder for logic, will move outside the main form for better control) -->
                    <div class="tab-pane fade" id="video-mgmt" role="tabpanel" aria-labelledby="video-tab">
                        <h5 class="mb-4 text-primary">Manage Videos</h5>
                        <p class="text-muted">You can add and remove videos from the Homepage here.</p>
                        <!-- Management will be handled by separate forms below -->
                    </div>

                    <!-- CoSchool Tab (Placeholder) -->
                    <div class="tab-pane fade" id="coschool-mgmt" role="tabpanel" aria-labelledby="coschool-tab">
                        <h5 class="mb-4 text-primary">BRICS CoSchool Media</h5>
                        <p class="text-muted">Upload photos and videos for the BRICS CoSchool section.</p>
                    </div>

                    <!-- Social Links Tab -->
                    <div class="tab-pane fade" id="social" role="tabpanel" aria-labelledby="social-tab">
                        <h5 class="mb-4 text-primary">Social Media Links</h5>
                        <div class="form-group">
                            <label class="font-weight-bold">LinkedIn URL</label>
                            <input type="url" name="social_linkedin" class="form-control" value="{{ $contents['social_linkedin'] ?? '' }}" placeholder="https://linkedin.com/in/yourprofile">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Facebook URL</label>
                            <input type="url" name="social_facebook" class="form-control" value="{{ $contents['social_facebook'] ?? '' }}" placeholder="https://facebook.com/yourprofile">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Instagram URL</label>
                            <input type="url" name="social_instagram" class="form-control" value="{{ $contents['social_instagram'] ?? '' }}" placeholder="https://instagram.com/yourprofile">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">WhatsApp Number/Link</label>
                            <input type="text" name="social_whatsapp" class="form-control" value="{{ $contents['social_whatsapp'] ?? '' }}" placeholder="e.g. https://wa.me/1234567890">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">VK URL</label>
                            <input type="url" name="social_vk" class="form-control" value="{{ $contents['social_vk'] ?? '' }}" placeholder="https://vk.com/yourprofile">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Telegram Username/Link</label>
                            <input type="text" name="social_telegram" class="form-control" value="{{ $contents['social_telegram'] ?? '' }}" placeholder="e.g. https://t.me/yourusername">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Gmail Address</label>
                            <input type="email" name="social_gmail" class="form-control" value="{{ $contents['social_gmail'] ?? '' }}" placeholder="yourname@gmail.com">
                        </div>
                    </div>
                </div>

                <div class="mt-4 text-right">
                    <button type="submit" class="btn btn-primary theme-button px-5">Update Content</button>
                </div>
            </form>

            <!-- Separate Gallery Management UI (Outside main form to avoid conflicts) -->
            <div id="gallery-ui" style="display: none;">
                <div class="mt-4 border-top pt-4">
                    <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data" class="mb-5">
                        @csrf
                        <div class="row align-items-end">
                            <div class="col-md-5">
                                <div class="form-group mb-0">
                                    <label class="font-weight-bold">Upload New Image</label>
                                    <input type="file" name="image" class="form-control-file" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-0">
                                    <label class="font-weight-bold">Image Title (Optional)</label>
                                    <input type="text" name="title" class="form-control" placeholder="Work title here">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-success theme-button btn-block">Add to Gallery</button>
                            </div>
                        </div>
                    </form>

                    <h6 class="font-weight-bold mb-3">Current Gallery Images</h6>
                    <div class="row">
                        @forelse($gallery ?? [] as $item)
                        <div class="col-md-3 mb-4">
                            <div class="card h-100 shadow-sm border-0 bg-light">
                                <img src="{{ asset($item->image_path) }}" class="card-img-top" alt="" style="height: 150px; object-fit: cover;">
                                <div class="card-body p-2 d-flex justify-content-between align-items-center">
                                    <small class="text-truncate mr-2">{{ $item->title ?? 'Untitled' }}</small>
                                    <form action="{{ route('admin.gallery.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Remove this image from gallery?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-link text-danger p-0"><i class="fa fa-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="col-12">
                            <p class="text-muted italic">No images in gallery. Upload some to see them on the homepage.</p>
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>

            <!-- Separate Video Management UI -->
            <div id="video-ui" style="display: none;">
                <div class="mt-4 border-top pt-4">
                    <form action="{{ route('admin.videos.store') }}" method="POST" enctype="multipart/form-data" class="mb-5">
                        @csrf
                        <div class="row align-items-end">
                            <div class="col-md-4">
                                <div class="form-group mb-0">
                                    <label class="font-weight-bold">Upload Video (MP4, AVI, MOV, etc)</label>
                                    <input type="file" name="video" class="form-control-file" accept="video/*" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group mb-0">
                                    <label class="font-weight-bold">Thumbnail (Optional)</label>
                                    <input type="file" name="thumbnail" class="form-control-file" accept="image/*">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group mb-0">
                                    <label class="font-weight-bold">Video Title (Optional)</label>
                                    <input type="text" name="title" class="form-control" placeholder="Video title">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-success theme-button btn-block">Add Video</button>
                            </div>
                        </div>
                    </form>

                    <h6 class="font-weight-bold mb-3">Current Videos</h6>
                    <div class="row">
                        @forelse($videos ?? [] as $video)
                        <div class="col-md-4 mb-4">
                            <div class="card h-100 shadow-sm border-0 bg-light">
                                <div class="position-relative" style="height: 200px; background: #000;">
                                    <video src="{{ asset($video->video_path) }}" class="w-100 h-100" style="object-fit: cover;" controls></video>
                                </div>
                                <div class="card-body p-2 d-flex justify-content-between align-items-center">
                                    <small class="text-truncate mr-2">{{ $video->title ?? 'Untitled' }}</small>
                                    <form action="{{ route('admin.videos.destroy', $video->id) }}" method="POST" onsubmit="return confirm('Remove this video?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-link text-danger p-0"><i class="fa fa-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="col-12">
                            <p class="text-muted italic">No videos uploaded yet.</p>
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>

            <!-- Separate CoSchool Management UI -->
            <div id="coschool-ui" style="display: none;">
                <div class="mt-4 border-top pt-4">
                    <form action="{{ route('admin.coschool.store') }}" method="POST" enctype="multipart/form-data" class="mb-5">
                        @csrf
                        <div class="row align-items-end">
                            <div class="col-md-3">
                                <div class="form-group mb-0">
                                    <label class="font-weight-bold">Media Type</label>
                                    <select name="media_type" class="form-control" required>
                                        <option value="image">Image</option>
                                        <option value="video">Video</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-0">
                                    <label class="font-weight-bold">Upload File</label>
                                    <input type="file" name="media" class="form-control-file" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group mb-0">
                                    <label class="font-weight-bold">Caption (Optional)</label>
                                    <input type="text" name="caption" class="form-control" placeholder="Description...">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-success theme-button btn-block">Upload</button>
                            </div>
                        </div>
                    </form>

                    <h6 class="font-weight-bold mb-3">CoSchool Media Library</h6>
                    <div class="row">
                        @forelse($coSchoolMedia ?? [] as $media)
                        <div class="col-md-3 mb-4">
                            <div class="card h-100 shadow-sm border-0 bg-light">
                                <div class="position-relative" style="height: 180px; background: #e9ecef; overflow: hidden;">
                                    @if($media->type == 'image')
                                        <img src="{{ asset($media->path) }}" class="w-100 h-100" style="object-fit: cover;" alt="{{ $media->caption }}">
                                    @else
                                        <video src="{{ asset($media->path) }}" class="w-100 h-100" style="object-fit: cover;" controls></video>
                                    @endif
                                    <span class="badge badge-primary position-absolute" style="top: 10px; right: 10px;">{{ ucfirst($media->type) }}</span>
                                </div>
                                <div class="card-body p-2 d-flex justify-content-between align-items-center">
                                    <small class="text-truncate mr-2">{{ $media->caption ?? 'No Caption' }}</small>
                                    <form action="{{ route('admin.coschool.destroy', $media->id) }}" method="POST" onsubmit="return confirm('Remove this item?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-link text-danger p-0"><i class="fa fa-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="col-12">
                            <p class="text-muted italic">No media uploaded yet.</p>
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const galleryTab = document.getElementById('gallery-tab');
                    const videoTab = document.getElementById('video-tab');
                    const coschoolTab = document.getElementById('coschool-tab');
                    const tabs = document.querySelectorAll('#contentTabs .nav-link');
                    const galleryUi = document.getElementById('gallery-ui');
                    const videoUi = document.getElementById('video-ui');
                    const coschoolUi = document.getElementById('coschool-ui');
                    const mainFormActions = document.querySelector('form[action$="admin/update"] .mt-4.text-right');

                    function toggleGalleryUi() {
                        if (galleryTab.classList.contains('active')) {
                            galleryUi.style.display = 'block';
                            videoUi.style.display = 'none';
                            coschoolUi.style.display = 'none';
                            if (mainFormActions) mainFormActions.style.display = 'none';
                        } else if (videoTab.classList.contains('active')) {
                            videoUi.style.display = 'block';
                            galleryUi.style.display = 'none';
                            coschoolUi.style.display = 'none';
                            if (mainFormActions) mainFormActions.style.display = 'none';
                        } else if (coschoolTab.classList.contains('active')) {
                            coschoolUi.style.display = 'block';
                            galleryUi.style.display = 'none';
                            videoUi.style.display = 'none';
                            if (mainFormActions) mainFormActions.style.display = 'none';
                        } else {
                            galleryUi.style.display = 'none';
                            videoUi.style.display = 'none';
                            coschoolUi.style.display = 'none';
                            if (mainFormActions) mainFormActions.style.display = 'block';
                        }
                    }

                    tabs.forEach(tab => {
                        tab.addEventListener('click', function() {
                            // Small delay to let Bootstrap update classes
                            setTimeout(toggleGalleryUi, 100);
                        });
                    });

                    // Initial check
                    toggleGalleryUi();
                });
            </script>
        </div>
    </div>
</div>
@endsection
