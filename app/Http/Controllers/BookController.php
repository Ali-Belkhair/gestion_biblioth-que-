<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all() ;

        return view('books.index',['books'=>$books] );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Form 
        $categories = Categorie::all() ;
        return view('books.create',['categories'=> $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Book $book)
    {
        // 14. Ajouter des règles de validation pour le formulaire de création de livre 

        $rules = [
            'titre' => 'required|string|max:255',
            'pages' => 'required|numeric',
            'description' => 'required', 
            'categorie_id' =>'required|numeric|exists:categories,id' ,
            'image'=>'required|mimes:jpg,jpeg,png,bmp'
        ];

        $validatedData = $request->validate($rules);

        $imagee = $request->file('image')->store('images','public') ;
        
        $validatedData['image']=$imagee ; 

        $book = Book::create($validatedData);

        // Now you can save the book
        $book->save();
        
        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    { 
        // show by id
        $book = Book::find($id);
        // dd($book->authors) 

        return view('books.show', compact('book'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Form edit
        $book = Book::find($id);
        return view('books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // 
        // Remove _token from the data
        $dataWithoutToken = collect($request->all())->except('_token')->toArray();

        // find by id and update the Book 
        $book = Book::find($id);

        $imagee = $request->file('image')->store('images','public') ;
        $dataWithoutToken['image']=$imagee ; 

        $book->update($dataWithoutToken);

        // Now you can save the book
        $book->save();

        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //  fun for delete

        $book = Book::find($id);
        
        Storage::disk('public')->delete($book->image) ;
        $book->delete();

        return redirect()->route('books.index');
    }
}
