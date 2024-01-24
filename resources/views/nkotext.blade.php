

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nko Sentences</title>
</head>
<body>

@extends("layouts.layout2")

@section("content")
    <p style="margin-left: 500px;margin-top: 50px;">Saisissez <i class="bi bi-pencil" style="margin-right:5px; color: #3399FF;"></i> une phrase en Nko</p>
    <p style="margin-left: 400px; font-family:'Calibri light', sans-serif;">Les phrases fournies ici seront ajoutées à un jeu de données public sous licence cc-0.</p>


    <div class="center-container" style="margin-left: 50px; border: 2px solid rgba(0, 0, 0, 0);  ">
    <h1>
    <form method="post" action="{{ route('saveNkoText') }}">
        @csrf
        <input type="text" name="sentence" id="sentence" placeholder="Entrez votre texte ici..." style="height: 250px; width: 700px; margin-left: 50px; font-size: 12px; line-height: 100px;">
        <button type="submit" class="btn btn-primary" style="margin-left: 600px;margin-top: 20px;">Envoyer</button>
    </form>
</div>

@endsection
</body>
</html>
