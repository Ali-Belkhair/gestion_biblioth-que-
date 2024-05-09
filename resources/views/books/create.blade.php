@extends('layouts.app')
@section('content')

    <h1>create Page</h1>

    <section class="container">
        <form action="{{ route('books.store') }}" method="post" enctype="multipart/form-data" >
            @csrf

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Titre</label>
                        <input type="text" name="titre" class="form-control">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Images</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Pages</label>
                        <input type="text" name="pages" class="form-control">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea class="form-control" name="description" rows="3"></textarea>
                    </div>
                </div>
            </div> 
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Categorie</label>
                        <select name="categorie_id" id="categorie_id">
                            <option>Select un categorie </option>

                            @foreach ($categories as $categorie )
                            <option value="{{ $categorie->id }}"> {{ $categorie->nom }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>
            </div>

            <div class="row pt-4 text-center">
                <div class="col">
                    <button type="reset" class="btn btn-danger">Annuler</button>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-success">Create</button>
                </div>
            </div>
        </form>
    </section>

@endsection