@extends('layouts.app')
@section('content')

    <h1>Edit Page</h1>
    
    <section class="container">
        <form action="{{route('books.update', $book->id)}}" method="post"  >
            @method('PUT')
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
            <div class="pt-4 text-center">
                <div class="col">
                    <button type="submit" class="btn btn-success">Edit</button>
                </div>
            </div>
        </form>
    </section>

@endsection