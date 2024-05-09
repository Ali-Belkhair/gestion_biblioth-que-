@extends('layouts.app')
@section('content')

    <h2>For create new book : <a class="btn btn-info" href="{{ route('books.create') }}">Create</a> </h2>
    
    {{$books->links()}}


    <table class="table table-dark container">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titre</th>
                <th scope="col">Pages</th>
                <th scope="col">Categorie</th>
                <th scope="col">Images</th>
                <th scope="col">Created_at</th>
                <th scope="col">Edit</th>
                <th scope="col">View</th>
                <th scope="col">Remove</th>
            </tr>
        </thead>
        <tbody>
  @foreach($books as $book)

            <tr>
                <th scope="row">{{$book->id}}</th>
                <td>{{$book->titre}}</td>
                <td>{{$book->pages}}page</td>
                <td>{{$book->categorie->nom }}</td>
                <td style="size: 40px,"> <img src="{{asset('storage/'.$book->image)}}" alt="{{ $book->image }}" width="60px" > </td>
                <td>{{$book->created_at}}</td>
                <td>
                    <a href="{{route('books.edit',$book->id)}}" class="btn btn-primary">Edit</a>
                </td>
                <td>
                    <a href="{{route('books.show', $book->id)}}" class="btn btn-info">Show</a>
                </td>
                <td>
                    <form action="{{ route('books.destroy', $book->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
  @endforeach
        
        </tbody>
    </table>
@endsection