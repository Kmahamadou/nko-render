

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>French To Nko Sentences</title>
</head>
<body>

    <h1>Traduire la phrase suivante en NKO</h1>

    <div class="center-container">
    @if(!empty($randomSentence))
        <p>{{ $randomSentence->sentence }}</p>
    @endif
    <form method="post" action="/frenchtonko">
        @csrf
        <input type="text" name="sentence" id="sentence" placeholder="Votre traduction...">
        <input type="hidden" name="frenchtext" id="frenchtext" value="{{ $randomSentence->sentence }}">
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
</div>




</body>
</html>
