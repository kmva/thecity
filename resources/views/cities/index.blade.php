@extends('layouts.layout')

@section('content')
<div class="container">
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
        <h1>Cities</h1>
        <ul>
            @foreach($cities as $city)
                <li>
                    <a href="#">{{ $city['name'] }} ({{ $city['country'] }})</a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection