<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Experience;
use App\Models\Profile;
use App\Models\Skill;
use App\Models\SkillCategory;
use App\Models\SocialLink;
use Illuminate\Http\Request;

class HomeFrontController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $profile = Profile::first();

        // Fetch full Skill objects, not just names
        $skills = Skill::all(); // includes 'name' and 'level'

        // Fetch experiences and educations for frontend
        $experiences = Experience::orderBy('start_year', 'desc')->get();
        $educations = Education::orderBy('year', 'desc')->get();

        $socials = SocialLink::all();
        $categories=SkillCategory::all();

        return view('homefront', compact('profile', 'categories', 'skills', 'experiences', 'educations', 'socials'));
    }
}
