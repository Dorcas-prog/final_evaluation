@extends('welcome')

@section('contenu')
<body>
<header style="background-color: bisque">
    <h3>BelRich, l'endroit sûr pour avoir une parfaite santé, vous accueille avec un soin particulier !</h3>
</header>
<main>
<section id="a_propos" style="margin: 2rem">
    <h4>Le miel naturel et ses produits à votre disposition, découvrez leurs vertus !</h4>
    <h2 style="margin: 1rem">Le meilleur produit qui garanti votre santé !</h2> 
    {{-- <a href="produit" class="btn">Découvrir nos produits</a> --}}
    <div>
        <div style="margin:3rem;">
            <img src="/images/propre.webp" alt="" style="height: 300; width: 400;">
        <p><span style="font-weight: bold">Source d'énergie rapide : </span> le miel est très riche en sucres naturels;</p>
        <p><span style="font-weight: bold">Antioxydant: </span> le miel contient des composés bénéfiques pour la santé;</p>
        <h6>il contribue à garder votre peau naturelle, toutefois douce et propre.</h6>
    </div>
    <div style="margin:3rem;">
        <img src="/images/plaie.jpg" alt="" style="height: 300; width: 400;">
        <img src="/images/guéri.jpg" alt="" style="height: 300; width: 400;">
        <p><span style="font-weight: bold">cicatrise les plaies et brûlures : </span>usage topique reconnu;</p>
        <p><span style="font-weight: bold">Antibactérien : </span> il aide à la cicatrisation et contre les infections.</p>
    </div>
        <img src="/images/toux.webp" alt="" style="height: 300; width: 400; margin:3rem;">
        <img src="/images/soulagé.jpg" alt="" style="height: 300; width: 400; margin:3rem;">

        <p><span style="font-weight: bold; margin:3rem;">Apaise la toux et le mal de gorge:</span>il a un effet adoucissant.</p>
    </div>
    <div style="margin:3rem;">
        <img src="" alt="">
        <p><span style="font-weight: bold">Aide à la digestion,</span> c'est-à-dire facilite le transit intestinal.</p>
        
    <div style="margin:3rem;">
        <img src="/images/système.jpg" alt="" style="height: 300; width: 400;">
        <p><span style="font-weight: bold">Très efficace en ce qui concerne le renforcement du système immunitaire</span> (il contient des nutriments et des enzymes).</p>
        <img src="/images/sommeil.jpg" alt="" style="height: 300; width: 400; margin:1rem;">
        <p><span style="font-weight: bold">Améliore potentiellement le sommeil : </span>peut favoriser la production de mélatonine.</p>
    </div>
    </div>
    <h1 style="text-align: center; background-color: rgb(204, 160, 66);">Le miel naturel et ses produits à votre disposition, découvrez leurs vertus !</h1>
</section>
</main>
</body>  