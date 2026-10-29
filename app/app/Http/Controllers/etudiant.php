<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class etudiant extends Controller
{
    public function etudiants()
    {
        return view('etudiant');
    }

    public function saluer(Request $request)
    {
        $validated = $request->validate([
            'nom' => ['required', 'string', 'max:100'],
        ]);

        return view('etudiant', ['nom' => $validated['nom']]);
    }
}
