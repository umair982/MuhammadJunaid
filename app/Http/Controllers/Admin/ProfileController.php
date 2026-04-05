<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'profile' => Profile::first(),
            'skills' => \App\Models\Skill::all(),
            'educations' => \App\Models\Education::all(),
            'experiences' => \App\Models\Experience::all(),
            'socials' => \App\Models\Social::all(),
        ]);
    }

    public function update(Request $request)
    {
        $profile = Profile::first() ?? new Profile();

        $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'profile_image' => 'nullable|image|max:2048',
            'banner_image' => 'nullable|image|max:4096',
        ]);

        $profile->name = $request->name;
        $profile->title = $request->title;
        $profile->description = $request->description;

        if ($request->hasFile('profile_image')) {
            if ($profile->profile_image) Storage::delete($profile->profile_image);
            $profile->profile_image = $request->file('profile_image')->store('profile');
        }

        if ($request->hasFile('banner_image')) {
            if ($profile->banner_image) Storage::delete($profile->banner_image);
            $profile->banner_image = $request->file('banner_image')->store('banner');
        }

        $profile->save();

        return back()->with('success', 'Profile updated successfully');
    }
}


?>
