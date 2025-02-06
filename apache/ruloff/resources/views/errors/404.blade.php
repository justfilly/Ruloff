<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Страница не найдена</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
        }

        .error-page {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .container {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="error-page">
        <div class="container">
            <h1 class="display-4">404</h1>
            <p class="lead">Страница не найдена</p>
            <p>Извините, но запрашиваемая вами страница не существует.</p>
            <a href="{{ url('/') }}" class="btn btn-primary">На главную</a>
        </div>
    </div>
</body>
</html>
