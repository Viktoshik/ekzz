@extends('theme')
@section('content')
    <h1>Добавление категории</h1>
    <form action="{{route('categories.update', $category)}}" method="post">
        @csrf
        @method('PATCH')
        {{--        В форме get не надо--}}
        <input type="text" name="name" placeholder="Название" value="{{$category->name}}">
        @error('name')
        <div>{{$message}}</div>
        @enderror
        <input type="submit" value="Добавить">
    </form>
@endsection
