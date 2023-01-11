<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\TestimonialTraining;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {


        $testimonials = TestimonialTraining::with(['training', 'user'])->latest()->get();
        $testimonials2 = TestimonialTraining::with(['training', 'user'])->first()->get();

        return view('pages.user.home', [
            'testimonials' => $testimonials,
            'testimonials2' => $testimonials2
        ]);
    }
}
