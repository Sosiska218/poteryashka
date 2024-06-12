@extends('layouts.layout')
@section('main_content')
    <div class="container">
        <form action="{{route('foundcreate')}}" method="post">
            @csrf
            <div class="form-group ">
                <label for="email">Введите ваш Email</label>
                <input type="email" name="email" placeholder="Email" id="email" class="form-control w-500">
            </div>
            <div class="form-group">
                <label for="number">Ваш телефон</label>
                <input type="text" name="number" placeholder="Телефон" id="number" class="form-control w-500">
            </div>
            <div class="form-group">
                <label for="itemname">Название предмета</label>
                <input type="text" name="itemname" placeholder="Название предмета" id="itemname" class="form-control w-500">
            </div>
            <div class="form-group">
                <label for="message">Описание</label>
                <textarea name="description" placeholder="Описание" id="description" class="form-control w-500"></textarea>
            </div>
            <div class="form-group">
                <label for="photo">Фото предмета</label>
                <input type="file" name="photo" placeholder="Загрузите фото предмета" id="photo" class="form-control w-500">
            </div>
            <div class="form-group">
                <input type="submit" value="Поделиться" class="form-control">
            </div>
        </form>
    </div>
@endsection

