<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title></title>

</head>

<body class="bg-light">
    <div class="container">
      <img class="ax-center my-10 w-12" src="{{ secure_asset('assets/img/donifab.png') }}" />
      <div class="card p-6 p-lg-10 space-y-4">
        <h2 class="h3 fw-700">
            De: {{ $data["full_name"] }}
        </h2>
        <h3 class="">
            Objet: {{ $data["subject"] }}
        </h3>
        <p>
            <h3>Message:</h3>
        </p>
        <h5>
            {{ $data["message"] }}
        </h5>
        {{-- <a class="btn btn-primary p-3 fw-700" href="https://app.bootstrapemail.com/templates">Visit Website</a> --}}
      </div>
      {{-- <img class="ax-center mt-10 w-40" src="https://assets.bootstrapemail.com/logos/light/text.png" /> --}}
      <div class="text-muted text-center my-6">

        Envoyer par: {{ $data["visiterEmail"] }}<br>
      </div>
    </div>
  </body>




</html>
