@extends('layouts.app')
@section('content')
    <div class=" container text-center pt-5  ">

        <h3 class="card-title">{{ $categorie->nom }}</h3>
        <h4 class="color-info">{{ $categorie->description }}</h4>
        <a href="{{ route('categories.edit', [$categorie->id]) }}" class="card-link btn btn-info ">Edit</a>
        <p>Created at : {{ $categorie->created_at }} </p>

        <div class="card">
            <div class="card-header">
                <h1>les books de cette categorie </h1>
            </div>
            <div class="card-body">
                <ul>
                    @foreach ($categorie->books as $book)
                        <li>
                            <h4> {{ $book }} </h4>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

    </div>
@endsection
