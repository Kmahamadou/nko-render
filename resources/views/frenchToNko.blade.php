<!DOCTYPE html>

<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Phrases françaises vers Nko</title>

</head>

<body>

    <h1>Traduire la phrase suivante en NKO</h1>

    <div class="center-container">

        @if(isset($randomSentence) && $randomSentence)
            <p>{{ $randomSentence->sentence }}</p>
            <form method="post" action="/frenchtonko">
                @csrf
                <input type="text" name="sentence" id="sentence" placeholder="Votre traduction...">
                <input type="hidden" name="frenchtext" id="frenchtext" value="{{ $randomSentence->sentence }}">
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>
        @else
            <p>Aucune phrase aléatoire disponible.</p>
        @endif

    </div>

</body>

</html>
