<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Experience;

class ExperienceController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'start_year' => 'required|string|max:50',
            'end_year' => 'nullable|string|max:50',
            'currently_working' => 'nullable|boolean'
        ]);

        // If currently working, set end_year as null or "Currently Working"
        $data['end_year'] = $request->currently_working ? null : $request->end_year ?? null;

        Experience::create($data);

        return back()->with('success', 'Experience added');
    }

    public function update(Request $request, Experience $experience)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'start_year' => 'required|string|max:50',
            'end_year' => 'nullable|string|max:50',
            'currently_working' => 'nullable|boolean'
        ]);

        $data['end_year'] = $request->currently_working ? null : $request->end_year ?? null;

        $experience->update($data);

        return back()->with('success', 'Experience updated');
    }

    public function destroy(Experience $experience)
    {
        $experience->delete();
        return back()->with('success', 'Experience deleted');
    }
}
