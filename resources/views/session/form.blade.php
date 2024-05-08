@extends('layouts.app')

@section('content')

<form action="{{ route('session.traiter') }}" method="post">
    @csrf
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Nom</label>
                <input type="text" name="nom" class="form-control">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label>Prenom</label>
                <input type="text" name="prenom" class="form-control">
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col">
            <div class="form-group">
                <label>Date Nessence</label>
                <input type="date" name="date_ness" class="form-control">
            </div>
        </div>

        <div class="col">
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control">
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col">
            <div class="form-group">
                <label>Mot de passe </label>
                <input type="password" name="mot_pass" class="form-control">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label>Image :</label>
                <input type="file" name="image">
            </div>
        </div>
    </div>


    <div class="row pt-4 text-center">
        <div class="col">
            <div class="form-group" >
                <label>Abonne :</label>
                <input type="radio" name="abonne" >
            </div>
        </div>

        <div class="col">
            <button type="submit" class="btn btn-success">Envoyer</button>
        </div>
    </div>
</form>

@endsection