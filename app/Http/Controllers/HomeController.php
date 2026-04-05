<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Experience;
use App\Models\Profile;
use App\Models\Skill;
use App\Models\SkillCategory;
use App\Models\SocialLink;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $profile = Profile::first();
        $skills = Skill::all();
        $educations = Education::all();
        $socials=SocialLink::all();
        $experiences = Experience::all();
        $categories=SkillCategory::all();

        return view('admin.home', compact(
            'profile',
            'skills',
            'categories',
            'educations',
            'experiences', // 👈 add this
            'socials'
        ));
    }
}
