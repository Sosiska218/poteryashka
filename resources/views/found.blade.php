@extends('layouts.layout')
@section('main_content')
    <a href="{{route('foundcreateform')}}"><button class="btn btn-primary">Добавить предмет</button></a>
    <div class="d-flex justify-content-around">
        <table>
                <tr>
                    <th colspan="2">Модель</th>
                    <th>Цена</th>
                    <th>Количество</th>
                    <th>Итого</th>
                </tr>
                <tr>
                    <td><img src="https://html5book.ru/wp-content/uploads/2015/04/dress-2.png"></td>
                    <td>Платье с цветочным принтом</td>
                    <td>2500</td>
                    <td>1</td>
                    <td>2500</td>
                </tr>
                <tr>
                    <td><img src="https://html5book.ru/wp-content/uploads/2015/04/dress-3.png"></td>
                    <td>Платье с боковыми вставками</td>
                    <td>3000</td>
                    <td>1</td>
                    <td>3000</td>
                </tr>
    </table>
    </div>
@endsection
