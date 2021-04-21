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
        <!-- texte sur image de header -->
        <div class="container">
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6" >
                    <div id="texte"> 
                        <h1>TITRE</h1>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque blanditiis veritatis dolor voluptate? Inventore sequi maxime amet enim repellat unde ipsum repudiandae nulla sint. Esse eos harum sint minus atque!
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi architecto, quis eos deserunt, cumque accusantium et iure id natus tenetur dicta qui ipsa debitis ut magnam libero unde accusamus. Fugiat!</p>
                
                    </div>
                    </div>

            </div>
            <!-- boutton commencer -->
            <div class="row">
                <div class="col md 4"></div>
                <div class="col md 4" style="text-align: center; margin-top: 20%;">
                    <button class="btn btn-success"> 
                    Commencer
                </button></div>
                <div class="col md 4"></div>
            </div>
        </div>
        </header>
        <br>
        <!-- côté formation -->
        <!-- formation interne -->
        
            
        
        <div class="container-fluid jumbotron">
            <div class="row">
                <h1 class="titre">FORMATION INTERNE</h1>
            </div>
            @foreach ($cours as $cour)
            <div class="container">
                <div class="row">
                    <br>
                    <br>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="container ps">
                            <img src="{{ $cour->img_url }}" alt="" width="100%">
                            <a href="{{ $cour->link }}" class="btn btn-success" target="_blank" rel="noopener noreferrer">Suivre</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p style="text-align: center;">
                            <ul>
                                <li>
                                    <h2>{{ $cour->titre }}</h2>
                                </li>
                                <li>
                                    <a class="btn btn-danger" href="{{ $cour->categorie_link }}">{{ $cour->categorie }}</a>
                                </li>
                                <br>
                                <li class="font-italic">
                                    {{ $cour->post_date }}
                                </li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
            
            <br>
            <div>
                {{ $cours->links() }}
            {{-- </div>
            <!-- voir plus boutton -->
            <button class="btn" id="voirp">
                <a href="interne.html" class="btn">voir plus de module</a>
            </button>
        </div>
        <br>

        <!-- formation externe -->
        <div class="container-fluid jumbotron">
            <div class="row">
                <h1 class="titre">FORMATION EXTERNE</h1>
            </div>
            <div class="container">
                <div class="row">
                    <ul>
                        <li>Titre : </li>
                        <li>Durée : </li>
                        <li>mise en ligne : </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="container ps">
                            <img src="images/pexels-christina-morillo-1181298.jpg" alt="" width="100%">
                                <button class="btn btn-success ">
                                    suivre
                                </button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p style="text-align: center;">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam velit natus voluptate nobis eaque id sit. Numquam assumenda impedit voluptatibus facilis hic aperiam explicabo architecto, nihil eius itaque officiis ad!
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero, alias. Eaque deleniti incidunt quam doloremque saepe ut adipisci libero, sit expedita atque blanditiis iusto repellat sequi aspernatur eos asperiores voluptates!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione ut, magnam optio rem architecto maiores rerum recusandae officiis illo commodi facilis. Ratione soluta et officia provident sunt modi, veniam est?
    
                        </p>
                    </div>
                </div>
            </div>
            
            <br>
            <!-- voir plus boutton -->
            <button class="btn" id="voirp">
                <a href="externe.html" class="btn">voir plus de module</a>
            </button>
        </div> --}}
    </body>
</html>
