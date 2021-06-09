@extends('layouts.single')

@section('content')
<div class="container cities">
   <!--  @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif -->

    <!-- <img src="/img/seoul.jpeg" alt=""> -->
        <h1 class="cities_h1">Города</h1>
        <ul class="cities_list">
            @foreach($cities as $city)
                <li class="cities_list__item">
                    <!-- {{ $city['img_url'] }} -->
                    <img src="/img/4.jpeg" alt="Город {{ $city['name'] }}">
                    <a href="/cities/{{ $city['id'] }}">
                        <p>{{ $city['name'] }} ({{ $city['country'] }})</p>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection