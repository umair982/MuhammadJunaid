<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SkillCategory;

class SkillCategoryController extends Controller
{
    public function index()
    {
        $categories = SkillCategory::with('skills')->get();
        return view('admin.skills.index', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string|max:255']);
        SkillCategory::create(['name' => $request->name]);
        return back()->with('success', 'Category added');
    }

    public function update(Request $request, SkillCategory $skillCategory)
    {
        $request->validate(['name' => 'required|string|max:255']);
        $skillCategory->update(['name' => $request->name]);
        return back()->with('success', 'Category updated');
    }

    public function destroy(SkillCategory $skillCategory)
    {
        $skillCategory->delete();
        return back()->with('success', 'Category deleted');
    }
}
