@extends('welcome')

@section('contenu')
@if($errors->any())
    @foreach ($errors as $error)
        <span style="color: white">{{$error}}</span>
    @endforeach
    @endif

    <h1>Ajouter un produit</h1>

    <form action="{{route('commande.store')}}"  method="post">
        @csrf
        <div style="display: flex; flex-direction: column; padding: 32px;">
            <label for="">Nom complet</label>
            <input type="texte" name="nom" id="nom">
            <label for="">Contact</label>
            <input type="texte" name="contact" id="contact">
            <label for="">E-mail</label>
            <input type="texte" name="email" id="email">
            <label for="">Nombre de produit</label>
            <input type="texte" name="nombre_de_produit" id="nombre_de_produit">
            <label for="">Produit</label>
            <input type="texte" name="produit" id="produit" value="{{$nom}}">

            @error('payement')
                {{$message}}
            @enderror

            <button type="submit">Ajouter</button>
        </div>
    </form>
    @error('nom_complet')
        {{$message}}

    @enderror
@endsection