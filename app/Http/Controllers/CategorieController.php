<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('categories.index', ['categories' => Categorie::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Form 
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Categorie $categorie)
    {
        // Remove _token from the data
        $dataWithoutToken = collect($request->all())->except('_token')->toArray();

        // Create a new categorie instance 
        $categorie = Categorie::create($dataWithoutToken);

        // Now you can save the categorie
        $categorie->save();
        
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    { 
        // show by id
        $categorie = Categorie::find($id);
        // dd($categorie->authors) 

        return view('categories.show', compact('categorie'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Form edit
        $categorie = Categorie::find($id);
        return view('categories.edit', compact('categorie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // 
        // Remove _token from the data
        $dataWithoutToken = collect($request->all())->except('_token')->toArray();

        // find by id and update the categorie 
        $categorie = Categorie::find($id);
        $categorie->update($dataWithoutToken);

        // Now you can save the categorie
        $categorie->save();

        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //  fun for delete
        $categorie = Categorie::find($id);
        $categorie->delete();
        return redirect()->route('categories.index');
    }
}
