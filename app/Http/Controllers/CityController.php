<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index() {
        $heading = request('heading');
        $cities = City::orderBy('name')->get();
        $cities = [
            ['name' => 'Seoul', 'country' => 'Korea'],
            ['name' => 'Tbilis', 'country' => 'Georgia'],
            ['name' => 'Marrakesh', 'country' => 'Marocco']
        ];

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
