@extends('layouts.layout')
@section('main_content')
    <div class="container">
        <form action="{{route('foundcreate')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="itemname">Название предмета</label>
                <input type="text" name="title" placeholder="Название предмета" id="itemname" class="form-control w-500">
            </div>
            <div class="form-group">
                <label for="message">Описание</label>
                <textarea name="description" placeholder="Описание" id="description" class="form-control w-500"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Поделиться" class="form-control">
            </div>
        </form>
    </div>
@endsection

