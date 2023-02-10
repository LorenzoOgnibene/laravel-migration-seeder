<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <main>
        <div class="container">
            <div class="row flex-wrap">
                @foreach ($trains as $train)
                    <div class="col-3 ">
                        <div class="card" style="width: 100%;" >
                            <img src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fwww.clipartbest.com%2Fcliparts%2FMTL%2F599%2FMTL599oac.png&f=1&nofb=1&ipt=d4234b82e897c38d992d1b38974d6d4ca7bd47f174e69b00b33824874385dc8a&ipo=images" class="card-img-top img-fluid" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">Azienda: {{$train->azienda}}</h5>
                            <p class="card-text">Stazione di partenza: {{$train->stazione_di_partenza}}</p>
                            <p class="card-text">Stazione di arrivo: {{$train->stazione_di_arrivo}}</p>
                            <p class="card-text">Orario di partenza: {{$train->orario_di_partenza}}</p>
                            <p class="card-text">Orario di arrivo: {{$train->orario_di_arrivo}}</p>
                            <h6 class="card-subtitle mb-2 text-muted">Codice treno: {{$train->codice_treno}}</h6>
                            <p class="card-text">Numero Carrozze: {{$train->numero_carrozze}}</p>
                            <p class="card-text">In orario: {{$train->in_orario}}</p>
                            <p class="card-text">Cancellato: {{$train->cancellato}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
</body>

</html>
