<!DOCTYPE html>
<html lang="es">
<?php
$title="Barrio con Memoria";
$description="Reconocer la memoria como método de visualizar la identidad";
$url="https://github.com/profesorfaco/por-escrito";
$image="https://fdasepulveda.files.wordpress.com/2015/05/inti-santiago-chile-11.jpg";
$author="Paula Günsche Pinto";
?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Search Engine -->
  <title><?php echo $title;?></title>
  <meta name="description" content="<?php echo $description;?>">
  <meta name="image" content="<?php echo $image;?>">
  <meta name="author" content="<?php echo $author;?>">
  <!-- Schema.org for Google -->
  <meta itemprop="name" content="<?php echo $title;?>">
  <meta itemprop="description" content="<?php echo $description;?>">
  <meta itemprop="image" content="<?php echo $image;?>">
  <!-- Twitter -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:title" content="<?php echo $title;?>">
  <meta name="twitter:description" content="<?php echo $description;?>">
  <!-- Open Graph general (Facebook, Pinterest & Google+) -->
  <meta name="og:title" content="<?php echo $title;?>">
  <meta name="og:description" content="<?php echo $description;?>">
  <meta name="og:image" content="<?php echo $image;?>">
  <meta name="og:url" content="<?php echo $url;?>">
  <meta name="og:site_name" content="<?php echo $title;?>">
  <meta name="og:locale" content="es_CL">
  <meta name="og:type" content="website">


    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>


</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">Barrios con Memoria</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                  <li>
                      <a href="index.php">Artículos</a>
                  </li>
                  <li>
                      <a href="about1.php">Biliografía</a>
                  </li>
                  <li>
                      <a href="post.php">Visualizaciones</a>
                  </li>
                  <li>
                      <a href="contact.php">Antecedentes</a>
                  </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Barrios con Memoria</h1>
                        <hr class="small">
                        <span class="subheading">Registro colaborativo de la identidad barrial a través de la memoria</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
              <h2>Sobre el proyecto</h2>
              <p>Barrios con memoria es una investigación que busca reconocer la memoria barrial como método de visualizar la identidad a través del trabajo en conjunto con los vecinos de los barrios de Santiago, por medio del análisis de material de origen colaborativo se busca reconocer e identificar el valor patrimonial de la identidad barrial de Santiago.</p>
              <h2>Artículos Relacionados</h2>

              <?php
              // basta con la línea de PHP para llamar al imdb-movies.csv y asignarlo a la variable $csv
              $csv = array_map('str_getcsv', file('datos.csv'));
              // pero debo hacer un pequeño ajuste, para eliminar del arreglo el encabezado del imdb-movies.csv
              array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
              array_shift($csv);
              // ahora puedo crear un bucle "for(){}" que examine lo asignado como contenido a la variable $csv
              // lo que esté contenido en la variable se repetirá tantas veces como arreglos tenga la variable $csv
              for($a = 0; $a < $total = count($csv); $a++){?>
                <div class="post-preview">
                    <a href="single.php?url=<?php print($a)?>">
                <article class="row">
                  <hr>
                  <div class="col-xs-5 col-sm-3 col-md-2"><img src="<?php echo $csv[$a]['Imagen'];?>" class="img-responsive"></div>
                  <div class="col-xs-7 col-sm-9 col-md-10">
                    <h3><?php echo $csv[$a]['titulo'];?></h3></a
                    <p><?php echo $csv[$a]['texto'];?></p>
                    <h6><?php echo $csv[$a]['apa'];?></p>
                      <img src="<?php echo $csv[$a]['images'];?>" class="img-responsive">
                    <h6><?php echo $csv[$a]['tags'];?></h6>


                  </div>
                </article>
              <?php };?>
            </div>
        </div>
    </div>

    <hr>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a href="https://twitter.com/?lang=es">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                          <a href="https://github.com/paulagunsche">
                              <span class="fa-stack fa-lg">
                                  <i class="fa fa-circle fa-stack-2x"></i>
                                  <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                              </span>
                          </a>
                        </li>
                    </ul>
                    <p class="copyright text-muted">Copyright &copy; Paula Günsche 2017</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/clean-blog.min.js"></script>

</body>

</html>
