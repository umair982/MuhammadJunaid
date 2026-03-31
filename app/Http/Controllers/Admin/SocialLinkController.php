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
            'platform' => 'required',
            'icon' => 'required',
            'url' => 'nullable|url',
        ]);

        SocialLink::create($data);

        return back()->with('success', 'Social link added');
    }

    public function destroy(SocialLink $social)
    {
        $social->delete();

        return back()->with('success', 'Deleted');
    }
}
