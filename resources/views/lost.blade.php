@extends('layouts.layout')
@section('main_content')
    <div style="margin: 0 auto; width: max-content;">
        <a href="{{route('lostcreateform')}}">
            <button class="btn btn-primary">Добавить предмет</button>
        </a>
    </div>

    <div class="d-flex justify-content-around">
        @isset($losts)
            <table class="styled-table">
                <tr>

                    <th>Название</th>
                    <th>Описание</th>
                </tr>
                @foreach($losts as $lost)
                    <tr>
                        <td>{{ $lost->title }}</td>
                        <td>{{ $lost->description }}</td>
                        @if(auth()->user()?->id === $lost->user_id)
                            <td>Ваше объявление</td>
                        @else
                            <td style="color: #0a58ca"><a href="mailto:{{ $lost->creator->email }}">Написать на почту</a></td>
                            <td style="color: #0a58ca"><a href="tel:{{ $lost->creator->phone }}">Позвонить</a></td>
                        @endif
                    </tr>
                @endforeach
            </table>
        @endisset
    </div>
@endsection
