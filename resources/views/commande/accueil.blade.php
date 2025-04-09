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

<body class="text-white bg-black ">
    <header>
        <h2>BelRich</h2>
        <img src="{{asset('images/mielo.png')}}" alt=""><br>
    </header>
    <div>
        <h3>Le miel d'EDEN, le pure, le naturel et vrai, chez <span class="Nom">BelRich</span> </h3>
        <h1>Nos produits</h1>
    </div>
        <section class="Meilleure" style="background-color: black">
            <div>
                <div style="margin-bottom: 35px ; border: 2px solid white; padding: 2rem; border-radius: 2rem;">
                    <img src="{{asset('images/miel-1.png')}}" alt="">
                    <h5>Trésor de la ruche</h5>
                    <h4>2500 XOF</h4>
                    <a href="/create/{{"Trésor de la ruche"}}"  style="background-color: rgb(203, 148, 109); color: white;" class="btn">Commander</a>
                </div>
                <div style="border: 2px solid white; padding: 2rem; border-radius: 2rem;">
                    <img src="{{asset('images/miel-4.png')}}" alt="">
                    <h5>Miel cannelé</h5>
                    <h4>1100 XOF</h4>
                    <a href="/create/{{"Miel cannelé"}}"  style="background-color: rgb(203, 148, 109); color: white;" class="btn">Commander</a>
                  
                </div>

            </div>
            <div>
                <div style="margin-bottom: 35px ; border: 2px solid white; padding: 2rem; border-radius: 2rem;">
                    <img src="{{asset('images/miel-3.png')}}" alt="">
                    <h5>Miel simple</h5>
                    <h4>3500 XOF</h4>
                    <a href="/create/{{"Miel simple"}}"  style="background-color: rgb(203, 148, 109); color: white;" class="btn">Commander</a>
                </div>
                <div style="border: 2px solid white; padding: 2rem; border-radius: 2rem;">
                    <img src="{{asset('images/miel-2.png')}}" alt="">
                    <h5>Savon au miel</h5>
                    <h4>1500 XOF</h4>
                    <a href="/create/{{"Savon au miel"}}" class="btn"  style="background-color: rgb(203, 148, 109); color: white;">Commander</a>
                </div>
            </div>
        </section>
    <div>
        <a href="/commande" class="btn btn-danger">Commandes</a>
        <h4>Gardez une meilleure santé, grâce à BelRich !!!</h4>
    </div>
</body>

</html>