<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    public function afficherFormulaire()
    {
        return view('session.form');
    }

    public function traiterterFormulaire(Request $request)
    {

        // // Pull 'nom' and 'prenom' from the session
        // $nom = $request->session()->pull('nom');
        // $prenom = $request->session()->pull('prenom');
        // $email = $request->session()->pull('email');
        // $date_ness = $request->session()->pull('date_ness');
        // $abonne = $request->session()->pull('abonne');

        // // Re-set the session data with updated values
        // $request->session()->put('nom', $request->nom);
        // $request->session()->put('prenom', $request->prenom);
        // $request->session()->put('email',  $request->email);
        // $request->session()->put('date_ness',  $request->date_ness);
        // $request->session()->put('abonne',  $request->abonne);


        $data_session = [
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'date_ness' => $request->date_ness,
            'abonne' => $request->abonne,
            'image' => $request->image,
        ];
        
        // Store the array in the session
        $request->session()->put('data_session', $data_session);
        
        $object_session = $request->session()->all();
        dd($object_session);

        return view('session.affichage', compact('object_session'));
    }
}
