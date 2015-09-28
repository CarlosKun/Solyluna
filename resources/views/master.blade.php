<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <script type="text/javascript">
        /************************************************
         Listas dependientes por Tunait!(5/1/04)
         Si quieres usar este script en tu sitio
         eres libre de hacerlo con la condición
         de que permanezcan intactas estas líneas,
         osea, los créditos.
         No autorizo a publicar y ofrecer el código
         en sitios de script sin previa autorización
         Si quieres publicarlo, por favor, contacta conmigo.
         http://javascript.tunait.com/
         tunait@yahoo.com
         *************************************************/
        function slctr(texto,valor){
            this.texto = texto
            this.valor = valor
        }



        var Mexico=new Array()
        Mexico[0] = new slctr('- -Estado- -')
        Mexico[1] = new slctr("Jalisco",'Jalisco')
        Mexico[2] = new slctr("Nayarit",'Nayarit')


        var EUA=new Array()
        EUA[0] = new slctr('- -State- -')
        EUA[1] = new slctr("California",'California')
        EUA[2] = new slctr("Louisiana",'Louisiana')

        //*******Nietos*******************
        var Jalisco = new Array()
        Jalisco[0] = new slctr('- -Jalisco- -')
        Jalisco[1] = new slctr("Puerto Vallarta",null)
        Jalisco[2] = new slctr("Cabo corrientes" ,null)

        var Nayarit = new Array()
        Nayarit[0] = new slctr('- -Nayarit- -')
        Nayarit[1] = new slctr("Sayulita",null)
        Nayarit[2] = new slctr("Nuevo Vallarta",null)

        var California = new Array()
        California[0] = new slctr('- -California- -')
        California[1] = new slctr("San Francisco",null)
        California[2] = new slctr("Palo alto" ,null)

        var Louisiana = new Array()
        Louisiana[0] = new slctr('- -Louisiana- -')
        Louisiana[1] = new slctr("Jacson",null)
        Louisiana[2] = new slctr("Alexandria" ,null)

        function slctryole(cual,donde){
            if(cual.selectedIndex != 0){
                donde.length=0
                cual = eval(cual.value)
                for(m=0;m<cual.length;m++){
                    var nuevaOpcion = new Option(cual[m].texto);
                    donde.options[m] = nuevaOpcion;
                    if(cual[m].valor != null){
                        donde.options[m].value = cual[m].valor
                    }
                    else{
                        donde.options[m].value = cual[m].texto
                    }
                }
            }
        }
    </script>


    <title>Sol&Luna</title>
  <!--Import materialize.css-->
<link rel="stylesheet" href="css/materialize.min.css" media="screen,projection">
<link rel="stylesheet" href="css/mystyle.css" media="screen,projection">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body class="grey lighten-4">

  <!--Dropdowns-->
  <ul id="dropdown1" class="dropdown-content">
    <li><a href="#!">one</a></li>
    <li><a href="#!">two</a></li>
    <li class="divider"></li>
    <li><a href="#!">three</a></li>
  </ul>

  <ul id="dropdown2" class="dropdown-content">
    <li><a href="#!">one</a></li>
    <li><a href="#!">two</a></li>
    <li class="divider"></li>
    <li><a href="#!">three</a></li>
  </ul>

  <ul id="dropdown3" class="dropdown-content">
    <li><a href="#!">one</a></li>
    <li><a href="#!">two</a></li>
    <li class="divider"></li>
    <li><a href="#!">three</a></li>
  </ul>

  <ul id="dropdown4" class="dropdown-content">
    <li><a href="#!">one</a></li>
    <li><a href="#!">two</a></li>
    <li class="divider"></li>
    <li><a href="#!">three</a></li>
  </ul>
  <!--fin Dropdowns-->

   <!-- navbar -->
   <div class="navbar-fixed ">
    <nav>
      <div class="nav-wrapper blue darken-3">
        <a href="welcome" class="brand-logo"><img src="images/LogoSolyLuna.png" class="responsive-img" width="40%" alt=""></a>
        <ul id="" class="right hide-on-med-and-down">
        <li><a href="contacto">Contact Us<i class="material-icons left">call</i></a></li>
        <li><a href="welcome">Home</a></li>
        <li><a href="independent">Independent living</a></li>
        <li><a href="assisting">Assisting livig</a></li>
        <li><a href="memorycare">Memory Care</a></li>
        <li><a href="home"><i class="material-icons">person_pin</i></a></li>
      </ul>
      <!--Navar Movil-->
        <ul class="side-nav" id="slide-out">
          <li><a href="contacto.html">Contact us<i class="material-icons left">call</i></a></li>
           <li><a href="welcome">Home</a></li>
          <li><a href="independent.html">Independent living</a></li>
          <li><a href="assisting.html">Assisting livig</a></li>
          <li><a href="memorycare">Memory Care</a></li>
          <li><a href="home"><i class="material-icons">person_pin</i></a></li>
        </ul>
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
        <!--Fin Navar Movil-->
    </nav>
  </div>
   <!-- navbar -->

      <!-- IMAGEN PORTADA -->

   <!-- IAMGEN PORTADA -->

@yield('navbar_menu')

   <!-- navbar -->

   <!-- navbar -->


    <!-- Page Layout here -->
    <div class="row">
    <!-- Note that "m4 l3" was added -->
      <div class="col s12 m12 l3"> 
      <div class="row">
      <div class="col s12 m12 l12">
        <div class="card-panel ">
          <span class="grey lighten-1">
    <blockquote>
     <b class="grey-text text-darken-4">Find a Health Resort</b>
    </blockquote>
             <form action="ingresar.php" method="POST" id="formulario">
                 <select class="browser-default" name="service" >
                     <option>- -Servicio - -</option>
                     <option value="I">Independent Living</option>
                     <option value="A">Assisting Living</option>
                     <option value="M">Memory Care</option>
                 </select>

                 <select class="browser-default" name="select" onchange="slctryole(this,this.form.select2)">
                     <option>- -Seleccionar - -</option>
                     <option value="Mexico">Mexico</option>
                     <option value="EUA">EUA</option>
                 </select>
                 <select class="browser-default" name="select2" onchange="slctryole(this,this.form.select3)">
                     <option>- - - - - -</option>
                 </select>
                 <select  class="browser-default" name="select3" action="">
                     <option>- - - - - -</option>

                 </select>
                 <button name="button" type="submit">Search </button>
             </form>
          </span>

        </div>
      </div>
    </div>
      </div>

      @yield('form_residencias')

       <footer class="page-footer grey lighten-3">

          

          <div class="footer-copyright">

            <div class="container">

            <b class="black-text text-ligthen-4">© 2015 Copyright Sol & Luna Health Exclusive Resorts</b>
            <a class="black-text text-lighten-3" href="#!">|About Us|</a>
            <a class="black-text text-lighten-3" href="#!">Inversionistas|</a>
            <a class="black-text text-lighten-3" href="#!">Terms|</a>
            <a class="black-text text-lighten-3" href="#!">Privacy|</a>

            </div>

          </div>

        </footer>
        @yield('piedepagina')



  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.js"></script>
  <script>
    $(function()
    {
      //inicializar slider
      $(".slider").slider();

    });
  </script>

  <script>
  //selects
  $(document).ready(function() {
    $('select').material_select();
  });
  </script>

  <script>  
  // Initialize collapse button
  $(".button-collapse").sideNav();
  </script>
        <script> $(document).ready(function(){
                $('.parallax').parallax();
            });
        </script>
</body>
</html>