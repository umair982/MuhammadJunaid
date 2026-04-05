<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SocialLink;

class SocialLinkController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'platform' => 'required|string|max:255',
            'icon' => 'required|string|max:255',
            'url' => 'nullable|url|max:255',
        ]);

        SocialLink::create($data);

        return back()->with('success', 'Social link added');
    }

    public function update(Request $request, SocialLink $social)
    {
        $data = $request->validate([
            'platform' => 'required|string|max:255',
            'icon' => 'required|string|max:255',
            'url' => 'nullable|url|max:255',
        ]);

        $social->update($data);

        return back()->with('success', 'Social link updated');
    }

    public function destroy(SocialLink $social)
    {
        $social->delete();
        return back()->with('success', 'Social link deleted');
    }
}
