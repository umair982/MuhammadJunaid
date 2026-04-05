<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f5f6fa;
            margin: 0;
        }

        .card {
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            width: 220px;
            background: #111827;
            color: white;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .sidebar a {
            color: #cbd5e1;
            display: block;
            padding: 10px;
            border-radius: 6px;
            text-decoration: none;
            margin-bottom: 5px;
        }

        .sidebar a:hover {
            background: #1f2937;
            color: white;
        }

        .main-content {
            margin-left: 220px;
            padding: 30px;
        }

        .img-preview {
            margin-top: 10px;
            border-radius: 10px;
            object-fit: cover;
        }
    </style>
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <div>
            <h4 class="mb-4">Admin Panel</h4>

            <a href="#profile">Profile</a>
            <a href="#skills">Skills</a>
            <a href="#education">Education</a>
            <a href="#experience">Experience</a>
            <a href="#social">Social Links</a>
        </div>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn btn-danger w-100">Logout</button>
        </form>
    </div>

    <div class="main-content">
        <h2 class="mb-4">Dashboard</h2>

        {{-- Success Message --}}
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        @endif

        {{-- Error Messages --}}
        @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show">
            <ul class="mb-0">
                @foreach ($errors->all() as $e)
                <li>{{ $e }}</li>
                @endforeach
            </ul>
            <button class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        @endif

        {{-- ================= PROFILE ================= --}}
        <div id="profile" class="card mb-4 p-4">
            <h4 class="mb-3">Profile</h4>
            <form method="POST" action="{{ route('admin.profile.update') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Name</label>
                        <input type="text" name="name" value="{{ $profile->name ?? '' }}" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Title</label>
                        <input type="text" name="title" value="{{ $profile->title ?? '' }}" class="form-control">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label>Description</label>
                        <textarea name="description" class="form-control">{{ $profile->description ?? '' }}</textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Profile Image</label>
                        <input type="file" name="profile_image" class="form-control"
                            onchange="previewImage(event, 'profilePreview')">
                        <img id="profilePreview"
                            src="{{ !empty($profile->profile_image) ? asset($profile->profile_image) : '' }}"
                            class="img-preview"
                            style="width:100px;height:100px;{{ empty($profile->profile_image) ? 'display:none;' : '' }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Banner Image</label>
                        <input type="file" name="banner_image" class="form-control"
                            onchange="previewImage(event, 'bannerPreview')">
                        <img id="bannerPreview"
                            src="{{ !empty($profile->banner_image) ? asset($profile->banner_image) : '' }}"
                            class="img-preview"
                            style="width:100%;max-height:120px;{{ empty($profile->banner_image) ? 'display:none;' : '' }}">
                    </div>
                </div>
                <button class="btn btn-primary">Update Profile</button>
            </form>
        </div>

        {{-- ================= SKILLS WITH CATEGORIES ================= --}}
        <div id="skills" class="card mb-4 p-4">
            <h4 class="mb-3">Skills & Categories</h4>

            {{-- Add Category Form --}}
            <form method="POST" action="{{ route('admin.skill-categories.store') }}" class="row mb-4">
                @csrf
                <div class="col-md-6">
                    <input type="text" name="name" class="form-control" placeholder="New Category Name" required>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-success w-100">Add Category</button>
                </div>
            </form>

            {{-- Categories and Skills --}}
            @foreach($categories as $category)
            <div class="mb-4 border p-3 rounded">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h5>{{ $category->name }}</h5>

                    {{-- Delete Category --}}
                    <form method="POST" action="{{ route('admin.skill-categories.destroy', $category->id) }}">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm">Delete Category</button>
                    </form>
                </div>

                {{-- Add Skill Under This Category --}}
                <form method="POST" action="{{ route('admin.skills.store') }}" class="row mb-3">
                    @csrf
                    <input type="hidden" name="category_id" value="{{ $category->id }}">
                    <div class="col-md-4">
                        <input type="text" name="name" class="form-control" placeholder="Skill Name" required>
                    </div>
                    <div class="col-md-2">
                        <input type="number" name="level" class="form-control" placeholder="Level (%)" min="0" max="100"
                            required>
                    </div>
                    <div class="col-md-2">
                        <input type="number" name="animation_order" class="form-control" placeholder="Animation Order" min="1">
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-success w-100">Add Skill</button>
                    </div>
                </form>

                {{-- Skills Table --}}
                <table class="table table-bordered mb-0">
                    <thead>
                        <tr>
                            <th>Skill</th>
                            <th>Level (%)</th>
                            <th>Animation Order</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($category->skills as $skill)
                        <tr>
                            <td>{{ $skill->name }}</td>
                            <td>{{ $skill->level }}</td>
                            <td>{{ $skill->animation_order }}</td>
                            <td>
                                {{-- Edit Modal Trigger --}}
                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#editSkill{{$skill->id}}">
                                    Edit
                                </button>

                                {{-- Delete Skill --}}
                                <form method="POST" action="{{ route('admin.skills.destroy', $skill->id) }}"
                                    style="display:inline;">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </form>

                                {{-- Edit Modal --}}
                                <div class="modal fade" id="editSkill{{$skill->id}}" tabindex="-1">
                                    <div class="modal-dialog">
                                        <form method="POST" action="{{ route('admin.skills.update', $skill->id) }}">
                                            @csrf @method('PUT')
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Skill</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="mb-2">
                                                        <label>Skill Name</label>
                                                        <input type="text" name="name" value="{{ $skill->name }}"
                                                            class="form-control" required>
                                                    </div>
                                                    <div class="mb-2">
                                                        <label>Level (%)</label>
                                                        <input type="number" name="level" value="{{ $skill->level }}"
                                                            class="form-control" min="0" max="100" required>
                                                    </div>
                                                    <div class="mb-2">
                                                        <label>Animation Order</label>
                                                        <input type="number" name="animation_order"
                                                            value="{{ $skill->animation_order }}" class="form-control" min="1">
                                                    </div>
                                                    <div class="mb-2">
                                                        <label>Category</label>
                                                        <select name="category_id" class="form-control" required>
                                                            @foreach($categories as $cat)
                                                            <option value="{{ $cat->id }}" @if($cat->id==$skill->category_id)
                                                                selected @endif>{{ $cat->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-primary">Update</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @endforeach
        </div>

        {{-- ================= EDUCATION ================= --}}
        <div id="education" class="card mb-4 p-4">
            <h4 class="mb-3">Education</h4>
            <form method="POST" action="{{ route('admin.educations.store') }}" class="row mb-3">
                @csrf
                <div class="col-md-3">
                    <input type="text" name="degree" placeholder="Degree" class="form-control">
                </div>
                <div class="col-md-3">
                    <input type="text" name="institute" placeholder="Institute" class="form-control">
                </div>
                <div class="col-md-2">
                    <input type="text" name="year" placeholder="Year" class="form-control">
                </div>
                <div class="col-md-2">
                    <button class="btn btn-success w-100">Add</button>
                </div>
            </form>

            <table class="table">
                <tr>
                    <th>Degree</th>
                    <th>Institute</th>
                    <th>Year</th>
                    <th>Action</th>
                </tr>
                @foreach($educations as $edu)
                <tr>
                    <td>{{ $edu->degree }}</td>
                    <td>{{ $edu->institute }}</td>
                    <td>{{ $edu->year }}</td>
                    <td>
                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                            data-bs-target="#editEdu{{$edu->id}}">Edit</button>
                        <form method="POST" action="{{ route('admin.educations.destroy', $edu->id) }}"
                            style="display:inline;">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </form>

                        <!-- Edit Modal -->
                        <div class="modal fade" id="editEdu{{$edu->id}}" tabindex="-1">
                            <div class="modal-dialog">
                                <form method="POST" action="{{ route('admin.educations.update', $edu->id) }}">
                                    @csrf @method('PUT')
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Edit Education</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <input type="text" name="degree" value="{{ $edu->degree }}"
                                                class="form-control mb-2" required>
                                            <input type="text" name="institute" value="{{ $edu->institute }}"
                                                class="form-control mb-2" required>
                                            <input type="text" name="year" value="{{ $edu->year }}" class="form-control"
                                                required>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-primary">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </td>
                </tr>
                @endforeach
            </table>
        </div>

        {{-- ================= EXPERIENCE ================= --}}
        <div id="experience" class="card mb-4 p-4">
            <h4 class="mb-3">Experience</h4>
            <form method="POST" action="{{ route('admin.experiences.store') }}" class="row mb-3">
                @csrf
                <div class="col-md-3">
                    <input type="text" name="title" placeholder="Job Title" class="form-control">
                </div>
                <div class="col-md-3">
                    <input type="text" name="company" placeholder="Company" class="form-control">
                </div>
                <div class="col-md-2">
                    <input type="text" name="start_year" placeholder="Start Year" class="form-control">
                </div>
                <div class="col-md-2">
                    <input type="text" name="end_year" placeholder="End Year" class="form-control">
                </div>
                <div class="col-md-2 d-flex align-items-center">
                    <input type="checkbox" name="currently_working" value="1" class="me-2"> Currently Working
                    <button class="btn btn-success ms-2">Add</button>
                </div>
            </form>

            <table class="table">
                <tr>
                    <th>Title</th>
                    <th>Company</th>
                    <th>Start Year</th>
                    <th>End Year</th>
                    <th>Action</th>
                </tr>
                @foreach($experiences as $exp)
                <tr>
                    <td>{{ $exp->title }}</td>
                    <td>{{ $exp->company }}</td>
                    <td>{{ $exp->start_year }}</td>
                    <td>{{ $exp->end_year }}</td>
                    <td>
                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                            data-bs-target="#editExp{{$exp->id}}">Edit</button>
                        <form method="POST" action="{{ route('admin.experiences.destroy', $exp->id) }}"
                            style="display:inline;">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </form>

                        <!-- Edit Modal -->
                        <div class="modal fade" id="editExp{{$exp->id}}" tabindex="-1">
                            <div class="modal-dialog">
                                <form method="POST" action="{{ route('admin.experiences.update', $exp->id) }}">
                                    @csrf @method('PUT')
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Edit Experience</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <input type="text" name="title" value="{{ $exp->title }}"
                                                class="form-control mb-2" required>
                                            <input type="text" name="company" value="{{ $exp->company }}"
                                                class="form-control mb-2" required>
                                            <input type="text" name="start_year" value="{{ $exp->start_year }}"
                                                class="form-control mb-2" required>
                                            <input type="text" name="end_year" value="{{ $exp->end_year }}"
                                                class="form-control mb-2">
                                            <div class="form-check">
                                                <input type="checkbox" name="currently_working" value="1"
                                                    class="form-check-input" {{ $exp->end_year=='Currently Working' ?
                                                'checked' : '' }}>
                                                <label class="form-check-label">Currently Working</label>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-primary">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </td>
                </tr>
                @endforeach
            </table>
        </div>

        {{-- ================= SOCIAL ================= --}}
        <div id="social" class="card mb-4 p-4">
            <h4 class="mb-3">Social Links</h4>
            <form method="POST" action="{{ route('admin.socials.store') }}" class="row mb-3">
                @csrf
                <div class="col-md-3">
                    <input type="text" name="platform" class="form-control" placeholder="Platform">
                </div>
                <div class="col-md-3">
                    <input type="text" name="icon" class="form-control" placeholder="fa-brands fa-...">
                </div>
                <div class="col-md-4">
                    <input type="text" name="url" class="form-control" placeholder="URL">
                </div>
                <div class="col-md-2">
                    <button class="btn btn-success w-100">Add</button>
                </div>
            </form>

            <table class="table">
                <tr>
                    <th>Platform</th>
                    <th>Icon</th>
                    <th>URL</th>
                    <th>Action</th>
                </tr>
                @foreach($socials as $social)
                <tr>
                    <td>{{ $social->platform }}</td>
                    <td><i class="{{ $social->icon }}"></i></td>
                    <td>{{ $social->url }}</td>
                    <td>
                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                            data-bs-target="#editSocial{{$social->id}}">Edit</button>
                        <form method="POST" action="{{ route('admin.socials.destroy', $social->id) }}"
                            style="display:inline;">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </form>

                        <!-- Edit Modal -->
                        <div class="modal fade" id="editSocial{{$social->id}}" tabindex="-1">
                            <div class="modal-dialog">
                                <form method="POST" action="{{ route('admin.socials.update', $social->id) }}">
                                    @csrf @method('PUT')
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Edit Social</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <input type="text" name="platform" value="{{ $social->platform }}"
                                                class="form-control mb-2" required>
                                            <input type="text" name="icon" value="{{ $social->icon }}"
                                                class="form-control mb-2" required>
                                            <input type="text" name="url" value="{{ $social->url }}"
                                                class="form-control mb-2" required>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-primary">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </td>
                </tr>
                @endforeach
            </table>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function previewImage(event, id) {
            const reader = new FileReader();
            reader.onload = function () {
                const img = document.getElementById(id);
                img.src = reader.result;
                img.style.display = 'block';
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>

</body>

</html>
