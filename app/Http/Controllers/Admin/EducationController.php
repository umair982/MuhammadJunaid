<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Education;

class EducationController extends Controller
{
    public function index()
    {
        return redirect()->route('admin.home');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'degree' => 'required|string|max:255',
            'institute' => 'required|string|max:255',
            'year' => 'required|string|max:100',
        ]);

        Education::create($data);

        return redirect()->back()->with('success', 'Education added');
    }

    public function update(Request $request, Education $education)
    {
        $data = $request->validate([
            'degree' => 'required|string|max:255',
            'institute' => 'required|string|max:255',
            'year' => 'required|string|max:100',
        ]);

        $education->update($data);

        return redirect()->back()->with('success', 'Education updated');
    }

    public function destroy(Education $education)
    {
        $education->delete();

        return redirect()->back()->with('success', 'Education deleted');
    }
}
