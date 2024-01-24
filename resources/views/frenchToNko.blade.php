<!DOCTYPE html>

<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Phrases françaises vers Nko</title>

</head>

<body>
@extends("layouts.layout3")

@section("content")
<p style="margin-left: 10px;margin-top: 50px;">Traduire <i class="fas fa-language" style="margin-right:5px; color: #3399FF;"></i> la phrase suivante en Nko :</p>
    <!-- <p style="margin-left: 400px; font-family:'Calibri light', sans-serif;">Les phrases fournies ici seront ajoutées à un jeu de données public sous licence cc-0.</p> -->


    <div class="center-container"  style="margin-left: 50px; border: 2px solid rgba(0, 0, 0, 0);  ">

        @if(isset($randomSentence) && $randomSentence)
            <p>{{ $randomSentence->sentence }}</p>
            <form method="post" action="/frenchtonko">
                @csrf
                <input type="text" name="sentence" id="sentence" placeholder="Votre traduction..." style="height: 250px; width: 700px; margin-left: 50px; font-size: 12px; line-height: 100px;">
                <input type="hidden" name="frenchtext" id="frenchtext" value="{{ $randomSentence->sentence }}">
                <button type="submit" class="btn btn-primary" style="margin-left: 600px;margin-top: 20px;">Envoyer</button>
            </form>
        @else
            <p>Aucune phrase aléatoire disponible.</p>
        @endif

    </div>

    @endsection
</body>

</html>
