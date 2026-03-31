<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Skill;
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
        $skills = Skill::pluck('name');
        $socials = SocialLink::all();

        return view('homefront', compact('profile', 'skills', 'socials'));
    }
}
