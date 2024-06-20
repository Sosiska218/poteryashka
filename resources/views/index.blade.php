@extends('layouts.layout')
@section('main_content')
    <h1 style="text-align: center">главная страница</h1>
    <div class="menu-buttons">
        <div class="menu-button">
            <a href="{{ route('found') }}">
                <img src="{{ url('/images/found.png') }}" alt="found">
                <span>Найденные вещи</span>
            </a>
        </div>

        <div class="menu-button">
            <a href="{{ route('lost') }}">
                <img src="{{ url('/images/lost.png') }}" alt="lost">
                <span>Потерянные вещи</span>
            </a>
        </div>

        <div class="menu-button">
            <a href="{{ route('aboutas') }}">
                <img src="{{ url('/images/about-us.png') }}" alt="about-us">
                <span>О нас</span>
            </a>
        </div>

    </div>
@endsection
