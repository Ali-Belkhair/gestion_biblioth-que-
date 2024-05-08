@extends('layouts.app')
@section('content')

    <h2>For create new categorie : <a class="btn btn-info" href="{{ route('categories.create') }}">Create</a> </h2>

    <table class="table table-dark container">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Description</th>
                <th scope="col">Created_at</th>
                <th scope="col">Edit</th>
                <th scope="col">View</th>
                <th scope="col">Remove</th>
            </tr>
        </thead>
        <tbody>
  @foreach($categories as $categorie)

            <tr>
                <th scope="row">{{$categorie->id}}</th>
                <td>{{$categorie->nom}}</td>
                <td>{{$categorie->description}} DH</td>
                <td>{{$categorie->created_at}}</td>
                <td>
                    <a href="{{route('categories.edit',$categorie->id)}}" class="btn btn-primary">Edit</a>
                </td>
                <td>
                    <a href="{{route('categories.show', $categorie->id)}}" class="btn btn-info">Show</a>
                </td>
                <td>
                    <form action="{{ route('categories.destroy', $categorie->id) }}" method="post">
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