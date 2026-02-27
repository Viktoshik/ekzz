@extends('theme')
@section('content')
<h1>Добавление категории</h1>
    <form action="{{route('categories.store')}}" method="post">
        @csrf
{{--        В форме get не надо--}}
        <input type="text" name="name" placeholder="Название">
        @error('name')
        <div>{{$message}}</div>
        @enderror
        <input type="submit" value="Добавить">
    </form>
@endsection
