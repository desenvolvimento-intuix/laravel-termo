<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
    <meta name="theme-color" content="#007AFF">
    <meta name="msapplication-navbutton-color" content="#007AFF">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="#007AFF">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <title>Termos | Intuix</title>
    <link rel="shortcut icon" type="image/x-icon" href="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Michroma&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.intuix.com.br/dist/css/app.min.css?v=<?php echo time(); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        header {
            height: 7rem;
            box-shadow: 1px 1px 3px -1px #000;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>
    <header class="">
        <h1><img src="https://www.intuix.com.br/dist/images/logo.svg" alt="Intuix"></h1>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-justify">
                    <h2>{{ $termo->titulo }} - {{ $cliente->clie_nome }}</h2>
                    <hr>
                </div>
            </div>
            <div class="col-12">
                <div class="text-justify">
                    <h2>{{ route('termo', [$cliente->clie_id_cliente, $termo->slug]) }}</h2>
                    <hr>
                </div>
            </div>
            <div class="col-12">
                <div class="visible-print text-center">
                    {!! $qrcode !!}
                    <p>Digitalize-me para ser enviado para a página.</p>
                </div>
                <hr>
            </div>
        </div>
    </div>
</body>
</html>