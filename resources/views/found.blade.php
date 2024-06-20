@extends('layouts.layout')
@section('main_content')
    <div style="margin: 0 auto; width: max-content;">
        <a href="{{route('foundcreateform')}}">
            <button class="btn btn-primary">Добавить предмет</button>
        </a>
    </div>

    <div class="d-flex justify-content-around">
        @isset($founds)
            <table class="styled-table">
                <tr>

                    <th>Название</th>
                    <th>Описание</th>
                </tr>
                @foreach($founds as $found)
                    <tr>
                        <td>{{ $found->title }}</td>
                        <td>{{ $found->description }}</td>
                        @if(auth()->user()?->id === $found->user_id)
                            <td>Ваше объявление</td>
                        @else
                            <td style="color: #0a58ca"><a href="mailto:{{ $found->creator->email }}">Написать на почту</a></td>
                            <td style="color: #0a58ca"><a href="tel:{{ $found->creator->phone }}">Позвонить</a></td>
                        @endif
                    </tr>
                @endforeach
            </table>
        @endisset
    </div>
@endsection
