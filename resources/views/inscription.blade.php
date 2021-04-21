<html>

<head>
    <title>blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/inscription.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <header>
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
        <div class="panel">
            <h1 style="text-align: center">Inscription sur blog</h1>
            <p style="text-align: center">voulez vous publier un cours? inscrivez vous d'abord <button
                    style="background-color: transparent;" data-toggle="collapse" data-target="#demo">créer un
                    compte</button> </p>
            <div id="demo" class="container collapse">
                <div class="row">
                    <div class="col-md-4">
                        <br>
                        <input type="text" placeholder="nom">
                    </div>
                    <div class="col-md-4">
                        <br>
                        <input type="text" placeholder="prenom">
                    </div>
                </div>
                <div class="conatiner">
                    <br>
                    <input type="email" name="email" id="email" placeholder="email">
                </div>
                <div class="conatiner">
                    <br>
                    <input type="tel" name="" id="numero" placeholder="numero">
                </div>
                <div class="conatiner">
                    <br>
                    <input type="password" name="" id="password" placeholder="password">
                </div>
                <div class="conatiner">
                    <br>
                    <input type="password" name="" id="mdp" placeholder="password">
                </div>
                <div class="container">
                    <br> <button class="btn btn-success" id="valider" type="submit">valider</button>
                </div>
            </div>
            <div class="form-group">
                <label for="usr" style="margin-left: 3%"> Name:</label> <a href="" style="margin-left: 72%">I forget</a>
                <input type="text" class="form-control" id="usr" style="width: 90%;margin-left: 3%">
            </div>
            <div class="form-group">
                <label for="pwd" style="margin-left: 3%"> Password:</label> <a href="" style="margin-left: 67%">I
                    forget</a>
                <input type="password" class="form-control" id="pwd" style="width: 90%;margin-left: 3%">
            </div>
            <div class="container">
                <div class="btn">
                    <button class="btn btn-primary"> Connexion</button>
                </div>
            </div>


        </div>
    </header>

</body>

</html>
