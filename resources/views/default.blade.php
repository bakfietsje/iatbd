<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="/js/main.js" defer></script>
    <title>@yield('title')</title>
</head>


<nav>
<input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
</label>
            <ul class="ul-ul">
                <li class="list__item"><a href="/product/create">leen iets uit</a></li>
                <li class="list__item"><a href="/product">Leenbare producten</a></li>
                <li class="list__item"><a href="/mijnProducten">Mijn geleende producten</a></li>
                <li class="list__item"><a href="/profiel">Mijn profiel</a></li>
                <li class="list__item"><a href="/admin">Admin portal</a></li>
            </ul>
        </nav>

    @yield('zoekfunctie')
<body>
    @yield('content')
</body>
</html>