<h1>Редактирование товара</h1>
@extends('theme')
@section('content')
    <form action="{{route('products.update', $product)}}" method="post">
        @csrf
        @method('PATCH')
        <input type="text" name="name" value="{{$product->name}}">
        <input type="text" name="description" value="{{$product->description}}">
        <input type="number" name="price" value="{{$product->price}}">
        <label>Категория</label>
        <select name="cat">
            @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
        <button>Изменить</button>
    </form>
@endsection
