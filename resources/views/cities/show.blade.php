@extends('layouts.layout')

@section('content')
<div class="container">
    <section class="about">
        <img src="{{ $city->img_url }}" alt="">
        <div>
            <h1>{{ $city->name }}</h1>
            <p>{{ $city->short_desc }}</p>
        </div>
    </section>
    <section>
        <p>Country: {{ $city->country }}</p>
        <p>Population: {{ $city->population }}</p>
    </section>
    <section>
        <p>{{ $city->full_desc }}</p>
        <img src="" alt="">
        <img src="" alt="">
        <img src="" alt="">
    </section>
    <section class="map_section"></section>
</div>
@endsection