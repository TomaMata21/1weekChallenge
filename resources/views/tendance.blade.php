<html>
    <head>
        <title>blog</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/index.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      </head>
    <body>
        <nav class="navbar">
            <nav class="navbar-left">
                <h1>LOGO</h1>
            </nav>
            <nav class="navbar-right">
                <ul>
                    <li><a href="{{ route('index') }}">ACCEUIL</a></li>
                    <li>
                        <div class="dropdown">
                            <a type="button" class=" dropdown-toggle" data-toggle="dropdown">
                              FORMATION
                            </a>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="{{ route('interne') }}">FORMATION INTERNE</a>
                              <a class="dropdown-item" href="{{ route('externe') }}">FORMATION EXTERNE</a>  
                          </div>
                    </li>
                    <li><a href="{{ route('inscription') }}">MISE EN LIGNE</a></li>
                    <li><a href="{{ route('tendance') }}">TENDANCE</a></li>
                    <li><a href="{{ route('inscription') }}">INSCRIPTION</a></li>
                </ul>
            </nav>
        </nav>
    </body>
</html>