<?php

namespace App\Http\Controllers;

use App\Models\AboutCounter;
use App\Models\AboutSection;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
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
        $counters=AboutCounter::all();
        $aboutSection=AboutSection::get()->first();

        $categories = PortfolioCategory::with('portfolios')->get();
        $portfolios = Portfolio::with('category')->get();

        return view('homefront', compact('profile','categories','portfolios', 'aboutSection','counters', 'categories', 'skills', 'experiences', 'educations', 'socials'));
    }
}
