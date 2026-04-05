<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Education;

class EducationController extends Controller
{
    public function index()
    {
        return redirect()->route('admin.dashboard');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'degree' => 'required|string|max:255',
            'institute' => 'nullable|string|max:255',
            'year' => 'nullable|string|max:50',
            'description' => 'nullable|string'
        ]);

        Education::create($data);

        return back()->with('success', 'Education added');
    }

    public function update(Request $request, Education $education)
    {
        $data = $request->validate([
            'degree' => 'required|string|max:255',
            'institute' => 'nullable|string|max:255',
            'year' => 'nullable|string|max:50',
            'description' => 'nullable|string'
        ]);

        $education->update($data);

        return back()->with('success', 'Education updated');
    }

    public function destroy(Education $education)
    {
        $education->delete();

        return redirect()->back()->with('success', 'Education deleted');
    }
}
