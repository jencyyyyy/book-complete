<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $books = Book::paginate(8);
        return view('books.index')->with('books',$books);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $rules=[
            'title'=>'required',
            'author'=>'required',
            'isbn'=>'required|size:13',
            'stock'=>'required|numeric|integer|gte:0',
            'price'=>'required|numeric|gte:0|lte:50'
        ];

        $message = [
            'isbn.size'=>"ISBN much be of 13 digit",
            'stock.gte' => 'The stock must be greater than or equal to 0',
        ];

        $request->validate($rules,$message);
        $book= Book::create($request->all());

        return redirect()->route('books.show',$book->id);



    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $book = Book::find($id);
        return view('books.show')->with('j',$book);

    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $book=Book::find($id);
        $book->delete();

        return redirect()->route("books.index");
    }
}
