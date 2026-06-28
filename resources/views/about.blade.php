<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <header class="bg-dark text-white py-3">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <ul class="navbar-nav">
                    @foreach ($navlinks as $link)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ $link['url'] }}">
                                {{ $link['name'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </nav>
            <h1>Benvenuti nell about</h1>
        </div>
    </header>
</body>
</html>