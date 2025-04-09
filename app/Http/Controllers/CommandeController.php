<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommandeRequest;
use App\Models\Commande;
use Illuminate\Http\Request;

class CommandeController extends Controller
{

    public function index()
    {
        $commandes = Commande::all();
        return view("commande.index", compact('commandes'));
    }

    public function store(CommandeRequest $request)
    {
        $data = $request->validated();
        Commande::create($data);

        return to_route("commande.index")->with("success", "Creer avec succes");
    }
    //
    public function create($nom)
    {
        return view("commande.create", compact("nom"));
    }
    public function edit(Commande $commande)
    {
        return view("commande.edit", compact("commande"));
    }
    public function update(CommandeRequest $request, Commande $commande)
    {

        $data = $request->validated();
        $commande->update($data);

        return to_route("commande.index");
    }
    public function destroy(Commande $commande)
    {
        $commande->delete();
        return to_route("commande.index");
    }


}
