

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>french Sentences</title>
</head>
<body>

    <h1>Saisissez une phrase en francais</h1>

    <div class="center-container">
    <h1>
    <form method="post" action="{{ route('saveFrenchText') }}">
        @csrf
        <input type="text" name="sentence" id="sentence" placeholder="Entrez votre texte ici...">
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
</div>


</body>
</html>
