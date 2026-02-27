@extends('theme')
@section('content')
<h1>Категории</h1>
<a href="/categories/create">Добавить</a>
<table>
    <tr>
        <td>id</td>
        <td>Название</td>
    </tr>
    @foreach($categories as $category)
        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
            <td><button><a href="/categories/{{$category->id}}/edit">Изменить</a></button></td>
            <td><form action="/categories/{{$category->id}}" method="post">
                @csrf
                @method('DELETE')
                    <input type="submit" value="Удалить">
            </form>
            </td>
        </tr>
    @endforeach
</table>
@endsection
