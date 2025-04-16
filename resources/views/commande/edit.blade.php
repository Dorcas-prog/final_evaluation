@extends('welcome')

@section('contenu')

    <h1>Ajouter un produit</h1>

    <form action="{{route('commande.update', $commande)}}"  method="post">
        @csrf
        @method('PUT')
        <div style="display: flex; flex-direction: column; padding: 32px;">
            <label for="">Nom complet</label>
            <input type="texte" name="nom" id="nom" value="{{$commande->nom}}">
            <label for="">Contact</label>
            <input type="texte" name="contact" id="contact" value="{{$commande->contact}}">
            <label for="">E-mail</label>
            <input type="texte" name="email" id="email" value="{{$commande->email}}">
            <label for="">Nombre de produit</label>
            <input type="texte" name="nombre_de_produit" id="nombre_de_produit" value="{{$commande->nombre_de_produit}}">
            <label for="">Produit</label>
            <input type="texte" name="produit" id="produit" value="{{$commande->produit}}">
         

            @error('payement')
                {{$message}}
            @enderror
            <input type="submit" value="Modifier">
        </div>
    </form>
    @error('nom_complet')
        {{$message}}

    @enderror
@endsection