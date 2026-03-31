<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function update(Request $request)
    {
        $profile = Profile::first();

        if (!$profile) {
            $profile = new Profile();
        }

        $data = $request->validate([
            'name' => 'nullable|string|max:255',
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'profile_image' => 'nullable|image|max:2048',
            'banner_image' => 'nullable|image|max:4096',
        ]);

        // Upload Profile Image
        if ($request->hasFile('profile_image')) {
            $file = $request->file('profile_image');
            $filename = time() . '_profile.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $filename);
            $data['profile_image'] = 'uploads/' . $filename;
        }

        // Upload Banner Image
        if ($request->hasFile('banner_image')) {
            $file = $request->file('banner_image');
            $filename = time() . '_banner.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $filename);
            $data['banner_image'] = 'uploads/' . $filename;
        }

        $profile->fill($data);
        $profile->save();

        return redirect()->back()->with('success', 'Profile updated successfully');
    }
}
