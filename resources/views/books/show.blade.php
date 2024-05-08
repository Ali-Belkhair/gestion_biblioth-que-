@extends('layouts.app')
@section('content')

    <div class=" container text-center pt-5  ">
        
        <div class="card" >
            <div class="card-body">
                <h3 class="card-title">{{ $book->titre }}</h3>               
                <h4 class="color-info">{{ $book->pages }}page</h4>
                <h4 class="color-info">Categorie nom :{{ $book->categorie->nom }}</h4>
                <h5 class="color-info">{{ $book->description }}</h5>
                <a href="{{ route('books.edit',[$book->id] ) }}" class="card-link btn btn-info ">Edit</a>
            </div>
            <p>Created at : {{ $book->created_at }} </p>
        </div>

    </div>
    @endsection