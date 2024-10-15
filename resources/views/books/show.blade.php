@extends('layout')

@section('page-content')

<legend>Book data</legend>

<table class="table table-striped">
    <tr>
        <th>ID</th>
        <td>{{$j->id}}</td>
    </tr>
    <tr>
        <th>Book Title</th>
        <td>{{$j->title}}</td>
    </tr>
    <tr>
        <th>Author</th>
        <td>{{$j->author}}</td>
    </tr>
    <tr>
        <th>ISBN</th>
        <td>{{$j->isbn}}</td>
    </tr>
    <tr>
        <th>Stock</th>
        <td>{{$j->stock}}</td>
    </tr>
    <tr>
        <th>Price</th>
        <td>{{$j->price}}</td>
    </tr>
    
    
</table>

<a type="button" class="btn btn-primary" href="{{route('books.index')}}">GO BACK</a>

@endsection
