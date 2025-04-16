<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap.css')}}">

</head>
<header style="background-color: burlywood;">
    <img src="{{asset('images/mielo.png')}}" alt="" style="margin: 1rem">
    <div style="display: flex; justify-content: space-between; align-items: center;">
        <h2 style="justify-content: center; margin: 25px; color: rgb(237, 52, 52);">BelRich</h2><br>
        <ul style="list-style-type: none; display: flex; justify-content: space-between; gap: 115px; margin: 20px;">
            <li><a href="/accueil" style="text-decoration: none; color: rgb(237, 52, 52); ">Accueil</a></li>
            <li><a href="/a_propos" style="text-decoration: none; color:  rgb(237, 52, 52); ">A propos</a></li>
            <li><a href="#contact" style="text-decoration: none; color:  rgb(237, 52, 52);">Contacts</a></li>
        </ul>
    </div>
</header>
<body class="text-white bg-black ">
    <div>
        <h3>Le miel d'EDEN, le pure, le naturel et vrai, chez <span class="Nom">BelRich</span> </h3>
        <h1>Nos produits</h1>
    </div>
        <section class="Meilleure" style="background-color: black">
            <div>
                <div style="margin-bottom: 35px ; border: 2px solid white; padding: 2rem; border-radius: 2rem; background-color: rgb(234, 183, 121);">
                    <img src="{{asset('images/miel-1.png')}}" alt="">
                    <h5>Trésor de la ruche</h5>
                    <h4>2500 XOF</h4>
                    <a href="/create/{{"Trésor de la ruche"}}"  style="background-color: rgb(203, 148, 109); color: white;" class="btn">Commander</a>
                </div>
                <div style="border: 2px solid white; padding: 2rem; border-radius: 2rem; background-color: rgb(234, 183, 121);">
                    <img src="{{asset('images/miel-4.png')}}" alt="">
                    <h5>Miel cannelé</h5>
                    <h4>1100 XOF</h4>
                    <a href="/create/{{"Miel cannelé"}}"  style=" background-color: rgb(203, 148, 109); ); color: white;" class="btn">Commander</a>
                </div>

            </div>
            <div>
                <div style="margin-bottom: 35px ; border: 2px solid white; padding: 2rem; border-radius: 2rem; background-color: rgb(234, 183, 121);">
                    <img src="{{asset('images/miel-3.png')}}" alt="">
                    <h5>Miel simple</h5>
                    <h4>3500 XOF</h4>
                    <a href="/create/{{"Miel simple"}}"  style="background-color: rgb(203, 148, 109); color: white;" class="btn">Commander</a>
                </div>
                <div style="border: 2px solid white; padding: 2rem; border-radius: 2rem; background-color: rgb(234, 183, 121);">
                    <img src="{{asset('images/miel-2.png')}}" alt="">
                    <h5>Savon au miel</h5>
                    <h4>1500 XOF</h4>
                    <a href="/create/{{"Savon au miel"}}" class="btn"  style="background-color: rgb(203, 148, 109); color: white;">Commander</a>
                </div>
            </div>
        </section>
    <div style="margin-top: 2rem">
        <a href="/commande" class="btn btn-danger" style="background-color: violet; text-align: center; justify-content: center; justify-content: center; text-align: center; margin: 2rem;">Commandes</a>
        <h2 style="color: white; justify-content: center; text-align: center;">Gardez une meilleure santé, grâce à BelRich !!!</h2>
    </div>
    <section id="contact" style="margin-top: 2rem; color: black; background-color: white; text-align: center;" >
        <h2>Nous contacter ou nous joindre sur : </h2>
        <h3>+228 91 58 43 55 ou 99 78 27 55</h3>
        <h3>Email: richardbodjon@gmail </h3>
    </section>
    <section id="a_propos" style="margin-top: 3rem; background-color: burlywood; text-align: center; color: rgb(52, 52, 182);">
        <h1>Le meilleur produit qui garanti votre santé !</h1> 
        {{-- <a href="produit" class="btn">Découvrir nos produits</a> --}}
    </section>
</body>

</html>