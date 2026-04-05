<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutCounter;
use App\Models\AboutSection;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function adminIndex()
    {
        $aboutSection = AboutSection::first() ?? AboutSection::create([]);
        $counters = AboutCounter::orderBy('order')->get();

        return view('admin.dashboard', compact('aboutSection', 'counters'));
    }

    public function updateSection(Request $request, AboutSection $aboutSection)
    {

        $data = $request->validate([
            'subtitle' => 'nullable|string|max:255',
            'title' => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        $aboutSection->update($data);

        return back()->with('success', 'About section updated');
    }

    public function storeCounter(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'count' => 'required|integer',
            'suffix' => 'nullable|string|max:10',
            'order' => 'nullable|integer',
        ]);

        AboutCounter::create($data);

        return back()->with('success', 'Counter added');
    }

    public function updateCounter(Request $request, AboutCounter $counter)
    {
        $data = $request->validate([
            'title' => 'required',
            'count' => 'required|integer',
            'suffix' => 'nullable|string|max:10',
            'order' => 'nullable|integer',
        ]);

        $counter->update($data);

        return back()->with('success', 'Counter updated');
    }

    public function destroyCounter(AboutCounter $counter)
    {
        $counter->delete();

        return back()->with('success', 'Deleted');
    }
}
