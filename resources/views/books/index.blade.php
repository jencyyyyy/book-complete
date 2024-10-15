@extends('layout')

@section('page-content')
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a type="button" class="btn btn-primary me-md-2 mt-2 mb-4" href="{{route('books.create')}}">Create a book</a>
    
  </div>


<table class="table table-striped">
    <thead class="text-center" >
        <th>ID</th>
        <th>Book Name</th>
        <th>Author</th>
        <th >More<th>
    </thead>

    @foreach ($books as $book)
    <tr>
        <td>{{$book->id}}</td>
        <td>{{$book->title}}</td>
        <td>{{$book->author}}</td>
        <td class="text-center"> 
            <div class="d-flex justify-content-center">
                <a  type="button" class="btn btn-primary mr-2" href="{{route('books.show',$book->id)}}">Details</a>
                <form method="POST" action="{{ route('books.destroy',$book->id)}}" onsubmit="return confirm('delete the book?')" >
                    @csrf
                    @method('DELETE')
                    <button type='submit' class="btn  btn-danger">Delete</button>
                </form>
            </div>
        </td>
    </tr>
    @endforeach
    
    
</table>
{{$books->links()}}


@endsection
