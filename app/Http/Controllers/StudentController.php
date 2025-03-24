<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
     // Afficher tous les utilisateurs
     public function index() {
        $lists = Utilisateur::all(); // Récupérer tous les utilisateurs
        return view('list', compact('lists'));
    }

    // Afficher le formulaire d'ajout
    public function create() {
        return view('create');
    }

    // Ajouter un utilisateur
    public function store(Request $request) {
        Utilisateur::create($request->all());
        return redirect()->route('utilisateurs.index');
    }

    // Afficher un utilisateur
    public function show($id) {
        $utilisateur = Utilisateur::findOrFail($id);
        return view('show', compact('utilisateur'));
    }

    // Afficher le formulaire d'édition
    public function edit($id) {
        $utilisateur = Utilisateur::findOrFail($id);
        return view('edit', compact('utilisateur'));
    }

    // Mettre à jour un utilisateur
    public function update(Request $request, $id) {
        $utilisateur = Utilisateur::findOrFail($id);
        $utilisateur->update($request->all());
        return redirect()->route('utilisateurs.index');
    }

    // Supprimer un utilisateur
    public function destroy($id) {
        Utilisateur::destroy($id);
        return redirect()->route('utilisateurs.index');
    }

}
