<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f5f6fa;
        }

        .card {
            border-radius: 12px;
        }

        .sidebar {
            height: 100vh;
            background: #111827;
            color: white;
            padding: 20px;
        }

        .sidebar a {
            color: #cbd5e1;
            display: block;
            padding: 10px;
            text-decoration: none;
            border-radius: 6px;
        }

        .sidebar a:hover {
            background: #1f2937;
            color: white;
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="row">

            <!-- Sidebar -->
            <div class="col-md-2 sidebar">
                <h4 class="mb-4">Admin Panel</h4>

                <a href="#profile">Profile</a>
                <a href="#skills">Skills</a>
                <a href="#education">Education</a>

                <hr>

                <!-- Logout -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="btn btn-danger w-100 mt-3">Logout</button>
                </form>
            </div>

            <!-- Main Content -->
            <div class="col-md-10 p-4">

                <h2 class="mb-4">Dashboard</h2>

                {{-- ================= PROFILE SECTION ================= --}}
                <div id="profile" class="card mb-4 p-4">
                    <h4>Profile</h4>

                    <form method="POST" action="{{ route('admin.profile.update') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>Name</label>
                                <input type="text" name="name" value="{{ $profile->name ?? '' }}" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>Title</label>
                                <input type="text" name="title" value="{{ $profile->title ?? '' }}"
                                    class="form-control">
                            </div>

                            <div class="col-md-12 mb-3">
                                <label>Description</label>
                                <textarea name="description"
                                    class="form-control">{{ $profile->description ?? '' }}</textarea>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>Profile Image</label>
                                <input type="file" name="profile_image" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>Banner Image</label>
                                <input type="file" name="banner_image" class="form-control">
                            </div>
                        </div>

                        <button class="btn btn-primary">Update Profile</button>
                    </form>
                </div>

                {{-- ================= SKILLS SECTION ================= --}}
                <div id="skills" class="card mb-4 p-4">
                    <h4>Skills</h4>

                    <!-- Add Skill -->
                    <form method="POST" action="{{ route('admin.skills.store') }}" class="row mb-3">
                        @csrf
                        <div class="col-md-5">
                            <input type="text" name="name" placeholder="Skill Name" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <input type="number" name="level" placeholder="%" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-success w-100">Add</button>
                        </div>
                    </form>

                    <!-- Skills List -->
                    <table class="table">
                        <tr>
                            <th>Name</th>
                            <th>Level</th>
                            <th>Action</th>
                        </tr>

                        @foreach($skills as $skill)
                        <tr>
                            <td>{{ $skill->name }}</td>
                            <td>{{ $skill->level }}%</td>
                            <td>
                                <form method="POST" action="{{ route('admin.skills.destroy', $skill->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>

                {{-- ================= EDUCATION SECTION ================= --}}
                <div id="education" class="card mb-4 p-4">
                    <h4>Education</h4>

                    <!-- Add Education -->
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

                    <!-- List -->
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
                                <form method="POST" action="{{ route('admin.educations.destroy', $edu->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>


                <div class="card mb-4 p-4">
                    <h4>Social Links</h4>

                    <!-- Add -->
                    <form method="POST" action="{{ route('admin.socials.store') }}" class="row mb-3">
                        @csrf

                        <div class="col-md-3">
                            <input type="text" name="platform" placeholder="Platform" class="form-control">
                        </div>

                        <div class="col-md-3">
                            <input type="text" name="icon" placeholder="fa-brands fa-..." class="form-control">
                        </div>

                        <div class="col-md-4">
                            <input type="text" name="url" placeholder="URL" class="form-control">
                        </div>

                        <div class="col-md-2">
                            <button class="btn btn-success w-100">Add</button>
                        </div>
                    </form>

                    <!-- List -->
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
                                <form method="POST" action="{{ route('admin.socials.destroy', $social->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>

            </div>
        </div>
    </div>

</body>

</html>
