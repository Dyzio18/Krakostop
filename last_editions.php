<?php 

require('includes/config.php'); 

?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <!-- meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Krakostop - Krakowski wyścig autostopowy 2017</title>
  <meta name="description" content="Krakowski wyścig autostopowy 2017<" />
  <meta name="keywords"  content="Autostop, kraków, wyscig, autostopowy" />
  <meta http-equiv="X-UA-Compatibile" content="IE=edge,chrome=1" />
  <meta name="author" content="Patryk Nizio, Bartosz Piątkowski, Jan Schab" />
  <link rel="Shortcut icon" href="favicon.ico" />

<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/style.css">
<link href="fonts/fontello/css/fontello.css" rel="stylesheet">
<!-- Carousel -->
<link  href="css/owl.carousel.css" rel="stylesheet" >
<link  href="css/owl.theme.default.min.css" rel="stylesheet" >
<!--Timer - Clock -->
<link rel="stylesheet" href="css/flipclock.css">

<!--Fonts-->
<link href="https://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">


<!--JS-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
<!-- Carousel -->
<script src="js/owl.carousel.js"></script>
<!-- Timer - Clock -->
<script src="js/flipclock.js"></script>	


</head>
<body data-spy="scroll" data-target=".navbar" data-offset="10" id="myScrollspy">



<nav class="navbar navbar-default" >
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><img src="img/logo-sm.png" alt="LOGO"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav" id="myNavbar" >
        <li><a href="aboutUs.php">O nas </a></li>
        <li><a href="edition2017.php">2017</a></li>
        <li><a href="register.php">Zapisy</a></li>
        <li><a href="parozlaczka.php">Parozłączka</a></li>
        <li><a href="index.php #contact">Kontakt</a></li>


      </ul>

<ul class="nav navbar-nav navbar-right">
      <li><a href="register.php"><span class="glyphicon glyphicon-user"></span>

      <?php
      if(isset($_SESSION['username']))
         echo "Panel użytkownika" ;
      else 
          echo "Rejestracja";
      ?>

      </a></li>
      <li>
      <?php
      if(isset($_SESSION['username']))
         echo '<a href="logout.php"> <span class="glyphicon glyphicon-log-in"></span> Wyloguj</a>'; 
      else 
          echo '<a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Zaloguj</a>';
      ?>
      </li>
    </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>




<div class="jumbotron">
  <h1> Poprzednie edycje </h1>
</div>

<div class="container-fluid" id="last_Editions">
  <svg class="SVG_Triangle" id="Triangle" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="75" viewBox="0 0 100 100" preserveAspectRatio="none">
  <path class="trianglePath" d="M0 100 L0 0 L100 100 Z"></path>
  </svg>

  <div class="container">
    <h2> Edycja 2016  </h2>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 "> 
        <img src="img\last_editions\Monaco.png" class="img-responsive" alt=" Bar Budva 1400km" > 
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-8"> 
      <h3> Bar Budva</h3>
      <p>  
      29 kwietnia 2016r o godz. 9.00 spod budynku Wydziału Fizyki i Informatyki Stosowanej AGH ruszył czwarty Krakowski Wyścig Autostopowy – Krakostop. Tym razem naszym celem była Czarnogóra a dokładnie Camping Marsylia w Buljaricy. W wyścigu wystartowało 400 osób, a pierwsza para zameldowała się na miejscu już po 24 godzinach i 30 minutach!!! Na drogach panowały pomarańczowe koszulki, których kierowcy nie byli w stanie nie zauważyć. Choć pogoda w Czarnogórze nas nie rozpieszczała nie przeszkodziło nam to w dobrej zabawie. Tym razem najmodniejszym kolorem na szosach był pomarańczowy!
      </p>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 ">
      <div class="center-img"><img src="img\last_editions\edycja2016.jpg" class="img-responsive img-rounded img-thumbnail" alt="Edycja2016" > 
      </div>
    </div>
  </div>

  <div class="container">
    <h2> Edycja 2015 </h2>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 "> 
        <img src="img\last_editions\Monaco.png" class="img-responsive" alt="Monako 1600km" > 
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-8"> 
      <h3>Monako</h3>
      <p>  
      29 kwietnia 2015 roku ponownie spod budynku Wydziału Fizyki i Informatyki Stosowanej AGH ruszył już trzeci Krakowski Wyścig Autostopowy – Krakostop. W 2015 Krakostopowicze ruszyli na podbój granicy włosko – francuskiej. Camping znajdował się w małym, włoskim miasteczku Isolabona, które zachwyciło wszystkich widokami. A rzut beretem od tego miejsca Znajduje się Monaco, które stało się przewodnim miastem tej edycji. Tym razem najmodniejszym kolorem na szosach był żółty!
      </p>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 ">
      <div class="center-img"><img src="img\last_editions\edycja2015.jpg" class="img-responsive img-rounded img-thumbnail" alt="Edycja2015" > 
      </div>
    </div>
  </div>

  <div class="container">
    <h2> Edycja 2014 </h2>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-8"> 
      <h3>Zadar</h3>
      <p>  
      30 kwietnia 2014 roku spod gmachu Wydziału Fizyki i Informatyki Stosowanej AGH ruszył drugi Krakowski Wyścig Autostopowy – Krakostop. W roku 2014 celem Krakostopowiczów był chorwacki Zadar. A trasa z Krakowa do mety zabarwiła się na lazurowo, nawiązując do koloru wody u wybrzeży Chorwacji.
      </p>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
        <div class="center-img"><img src="img\last_editions\edycja2014.jpg" class="img-responsive img-rounded img-thumbnail" alt="Edycja2014" > 
      </div>
    </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 "> 
        <img src="img\last_editions\Zadar.png" class="img-responsive" alt="Zadar 1100km" > 
    </div>
  </div>

  <div class="container">
    <h2> Edycja 2013 </h2>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 "> 
        <img src="img\last_editions\Werona.png" class="img-responsive" alt="Werona 1200km" > 
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-8"> 
      <h3>Werona</h3>
      <p>  
      27 kwietnia 2013 roku spod gmachu Biblioteki Głównej AGH ruszył wyścig do Werony, a konkretniej Campingu Spiaggia d'oro w Lazise nad jeziorem Garda. W zeszłym roku na trasie wyścigu panowały intensywnie zielone koszulki, które przyciągały uwagę kierowców. Kolor nie był przypadkowy, a jego główną pomysłodawczynią była jedna z organizatorek, która nie kryje swojego uwielbienia do wszystkiego co zielone. Jednak moda przemija i każdego roku Krakostopowicze ruszają w innym kolorze.
      </p>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 ">
      <div class="center-img"><img src="img\last_editions\edycja2013.jpg" class="img-responsive img-rounded img-thumbnail" alt="Edycja2013" > 
      </div>
    </div>
  </div>

</div>

<div class="joinUs-break">
<h2>Chcesz wziąć udział w Krakostopie?</h2><br>
<a href="register.php"><button class="btn-lg">Zapisz się!</button></a>
</div>



<footer class=" container-fluid ">


  <div class="social-container col-xs-12 col-sm-6 col-md-4 col-lg-4">
  <h2> Social media</h2>
    <a href="https://www.facebook.com/krakostop" target="_blank"><i class="icon-facebook"></i>Faceebok</a><br>
    <a href="https://www.instagram.com/krakostop/" target="_blank"><i class="icon-instagram"></i>Instagram</a>
  
  </div>  

  <div class="contact-container col-xs-12 col-sm-6 col-md-4 col-lg-4">
  <h2>Kontakt</h2>
  <p>Mozesz napisać do nas również bezpośrednio na adres:</p>
    <i class="icon-mail"></i> krakostop@gmail.com

  </div>

  <div class="link-container col-xs-12 col-sm-6 col-md-4 col-lg-4">
  <h2>Szybkie linki:</h2>
    <ul>
      <li><a href="index.php">Strona główna</a></li>
      <li><a href="regulamin.php">Regulamin</a></li>
      <li><a href="aboutUs.php">O nas</a></li>
      <li><a href="edition2017.php">Edycja 2017</a></li>
      <li><a href="last_editions.php">Poprzednie edycje</a></li>
      <li><a href="parozlaczka.php">Parozłączka</a></li>
      <li><a href="index.php #contact">Kontakt</a></li>
    </ul>
  </div>


<div class="col-xs-12 foo"> All right reserved by Krakostop</div>
</footer>
</body>
</html>