<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use App\Models\SkillCategory;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    // Show all categories with their skills
    public function index()
    {
        $categories = SkillCategory::with('skills')->get();
        return view('admin.skills.index', compact('categories'));
    }

    // Store new category
    public function storeCategory(Request $request)
    {
        $data = $request->validate(['name' => 'required|string|max:255']);
        SkillCategory::create($data);
        return back()->with('success', 'Category added');
    }

    // Store new skill under a category
    public function store(Request $request)
    {
        $data = $request->validate([
            'category_id' => 'required|exists:skill_categories,id',
            'name' => 'required|string|max:255',
            'level' => 'required|integer|min:0|max:100',
            'animation_order' => 'nullable|integer|min:1'
        ]);

        Skill::create($data);
        return back()->with('success', 'Skill added');
    }

    // Update skill
    public function update(Request $request, Skill $skill)
    {
        $data = $request->validate([
            'category_id' => 'required|exists:skill_categories,id',
            'name' => 'required|string|max:255',
            'level' => 'required|integer|min:0|max:100',
            'animation_order' => 'nullable|integer|min:1'
        ]);

        $skill->update($data);
        return back()->with('success', 'Skill updated');
    }

    // Delete skill
    public function destroySkill(Skill $skill)
    {
        $skill->delete();
        return back()->with('success', 'Skill deleted');
    }
}
