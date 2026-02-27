<h1>Добавление товара</h1>
@extends('theme')
@section('content')
<form action="{{route('products.store')}}" method="post">
    @csrf

    <input type="text" name="name" placeholder="Название">
    <input type="text" name="description" placeholder="Описание">
    <input type="number" name="price" placeholder="Цена">
    <label>Категория</label>
    <select name="cat">
        @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
    </select>
    <button>Добавить</button>
</form>
@endsection
