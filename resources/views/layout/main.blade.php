<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link rel="stylesheet" href="/css/style.css">
        <script src="/js/script.js"></script>
        
        <!-- google fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!-- bootstrap -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    </head>

    <body>
        <head>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand"></a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/events/create" class="nav-link">Cadastrar</a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="nav-link">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a href="/login/login" class="nav-link">Empresa</a>
                        </li>
                    </ul>
                </div>

            </nav>
        </head>

        @yield('content')

<!-- conteudo do footer -->
<footer>
  <div class="footer_cop">
    <ul class="part_footer">
      <li>
        <a href="contato">Contato</a>
      </li>
    </ul>
    <ul class="part_footer">
      <li>
        <a href="blog">blog</a>
      </li>
    </ul>
    <ul class="part_footer">
      <li>
        <a href="sobre">sobre</a>
      </li>
      <li>
        <a href="#">Eric Felicio</a>
      </li>
    </ul>
  </div>
</footer>

<!-- link dos icones -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    </body>

</html>


