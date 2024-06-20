@extends('layouts.layout')
@section('main_content')
    <a href="{{route('lostcreateform')}}">
        <button class="btn btn-primary">Добавить предмет</button>
    </a>
    <div class="d-flex justify-content-around">
        @isset($losts)
            <table>
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
                            <td><a href="mailto:{{ $lost->creator->email }}">Написать на почту</a></td>
                            <td><a href="tel:{{ $lost->creator->phone }}">Позвонить</a></td>
                        @endif
                    </tr>
                @endforeach
            </table>
        @endisset
    </div>
@endsection
