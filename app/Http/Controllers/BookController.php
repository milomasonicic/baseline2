<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //

    public function show($id)
    {
        return view("bookShow", [
            "book"=>Book::find($id)
        ]);
    }

    public function create()
    {
        return view("bookCreate");
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            "title"=>"required",
            "author"=>"required",
            "price"=>"required",
            "publication_date"=>"required",
            "genre"=>"required",
            "description"=>"required",
        ]);

        Book::create($data);

        return back();
    }

    public function edit($id)
    {
        return view("bookEdit",[
            "book"=>Book::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $book=Book::find($id);
        $book->update([
            'title'=>$request->title,
            'author'=>$request->author,
            'price'=>$request->price,
            'publication_date'=>$request->publication_date,
            'genre'=>$request->genre,
            'description'=>$request->description,
        ]);
    
        return to_route('books.oneBook',$book->id);
    }

    public function delete($id)
    {
        $book=Book::find($id); 
        $book->delete();

        return redirect()->route("dashboard");

    }

    
}
