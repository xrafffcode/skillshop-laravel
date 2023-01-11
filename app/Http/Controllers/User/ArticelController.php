<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Articel;
use App\Models\TestimonialTraining;
use Illuminate\Http\Request;

class ArticelController extends Controller
{
    public function index()
    {

        $articel = Articel::latest()->first();


        return view('pages.user.articel.index', [
            'articels' => Articel::with('user')->get(),
            'articel' => $articel
        ]);
    }

    public function show(Articel $articel)
    {

        return view('pages.user.articel.show', [
            'articel' => $articel
        ]);
    }
}
