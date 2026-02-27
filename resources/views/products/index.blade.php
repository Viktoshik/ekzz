@extends('theme')
@section('content')
<h1>Товары</h1>
<a href="/products/create">Добавить</a>
<table>
    <tr>
        <td>id</td>
        <td>name</td>
        <td>description</td>
        <td>price</td>
        <td>category_id</td>
        <td></td>
        <td></td>
    </tr>
    @foreach($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->category->name}}</td>
            <td><a href="/products/{{$product->id}}/edit">Изменить</a></td>
            <td><form action="/products/{{$product->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Удалить">
                </form>
            </td>
        </tr>
    @endforeach
</table>
@endsection
