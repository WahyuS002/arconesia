<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Farm;
use App\FarmGallery;

use App\Invest;

class FarmController extends Controller
{
    public function index()
    {
        $farms = Farm::latest()->get();
        return view('farm.index', compact('farms'));
    }

    public function create()
    {
        return view('farm.create');
    }

    public function store(Request $request)
    {
        // dd($request->id);

        auth()->user()->farms()->create($request->all());

        // $data_invest = $request->all();

        // Invest::create($request->all());

        session()->flash('status', 'added new farm');

        return redirect()->back();
    }
}
