@extends('layout')

@section('page-content')

<h2>Create a book</h2>

<form method="POST" action="{{route('books.store')}}">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Enter Book Title</label>
      <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
      <div>{{$errors->first('title')}}</div>  
    </div>
   <div class="mb-3">
    <label for="author" class="form-label">Enter Book Author</label>
    <input type="text" class="form-control" id="author" name="author" value="{{old('author')}}">
    <div>{{$errors->first('author')}}</div>  
</div>
 <div class="mb-3">
    <label for="isbn" class="form-label">Enter Book ISBN</label>
    <input type="text" class="form-control" id="isbn" name="isbn" value="{{old('isbn')}}">
    <div>{{$errors->first('isbn')}}</div>  
 </div>
 <div class="mb-3">
    <label for="isbn" class="form-label">Enter Book Stock count</label>
    <input type="number" class="form-control" id="stock" name="stock" value="{{old('stock')}}">
    <div>{{$errors->first('stock')}}</div> 
 </div>
 <div class="mb-3">
    <label for="price" class="form-label">Enter Book Price</label>
    <input type="number" class="form-control" id="price" name="price" value="{{old('price')}}">
    <div>{{$errors->first('price')}}</div> 
 </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
