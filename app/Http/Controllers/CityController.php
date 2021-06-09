<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;

class CityController extends Controller
{
    public function index() {
        $heading = request('heading');
        $cities = City::orderBy('name')->get();

        return view('cities.index', ['cities' => $cities, 'heading' => $heading]);
    }

    public function show($id) {
        $city = City::findOrFail($id);
        return view('cities.show', ['city' => $city]);
    }

    public function create() {
        return view('cities.create');
    }
}
