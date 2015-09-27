<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sol&Luna</title>
  <!--Import materialize.css-->
<link rel="stylesheet" href="css/materialize.min.css" media="screen,projection">
<link rel="stylesheet" href="css/mystyle.css" media="screen,projection">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
       <script type="text/javascript">

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

</head>

<body class="grey lighten-4">
<!-- it works the same with all jquery version from 1.x to 2.x -->
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <!-- use jssor.slider.mini.js (40KB) instead for release -->
    <!-- jssor.slider.mini.js = (jssor.js + jssor.slider.js) -->
    <script type="text/javascript" src="js/jssor.js"></script>
    <script type="text/javascript" src="js/jssor.slider.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            var _CaptionTransitions = [];
            _CaptionTransitions["L"] = { $Duration: 900, x: 0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
            _CaptionTransitions["R"] = { $Duration: 900, x: -0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
            _CaptionTransitions["T"] = { $Duration: 900, y: 0.6, $Easing: { $Top: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
            _CaptionTransitions["B"] = { $Duration: 900, y: -0.6, $Easing: { $Top: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
            _CaptionTransitions["ZMF|10"] = { $Duration: 900, $Zoom: 11, $Easing: { $Zoom: $JssorEasing$.$EaseOutQuad, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 };
            _CaptionTransitions["RTT|10"] = { $Duration: 900, $Zoom: 11, $Rotate: 1, $Easing: { $Zoom: $JssorEasing$.$EaseOutQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInExpo }, $Opacity: 2, $Round: { $Rotate: 0.8} };
            _CaptionTransitions["RTT|2"] = { $Duration: 900, $Zoom: 3, $Rotate: 1, $Easing: { $Zoom: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Round: { $Rotate: 0.5} };
            _CaptionTransitions["RTTL|BR"] = { $Duration: 900, x: -0.6, y: -0.6, $Zoom: 11, $Rotate: 1, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $Round: { $Rotate: 0.8} };
            _CaptionTransitions["CLIP|LR"] = { $Duration: 900, $Clip: 15, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic }, $Opacity: 2 };
            _CaptionTransitions["MCLIP|L"] = { $Duration: 900, $Clip: 1, $Move: true, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic} };
            _CaptionTransitions["MCLIP|R"] = { $Duration: 900, $Clip: 2, $Move: true, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic} };
            var options = {
                $FillMode: 2,                                       //[Optional] The way to fill image in slide, 0 stretch, 1 contain (keep aspect ratio and put all inside slide), 2 cover (keep aspect ratio and cover whole slide), 4 actual size, 5 contain for large image, actual size for small image, default value is 0
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1
                $ArrowKeyNavigation: true,                    //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideEasing: $JssorEasing$.$EaseOutQuint,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
                $SlideDuration: 800,                               //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0,                           //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
                $CaptionSliderOptions: {                            //[Optional] Options which specifies how to animate caption
                    $Class: $JssorCaptionSlider$,                   //[Required] Class to create instance to animate caption
                    $CaptionTransitions: _CaptionTransitions,       //[Required] An array of caption transitions to play caption, see caption transition section at jssor slideshow transition builder
                    $PlayInMode: 1,                                 //[Optional] 0 None (no play), 1 Chain (goes after main slide), 3 Chain Flatten (goes after main slide and flatten all caption animations), default value is 1
                    $PlayOutMode: 3                                 //[Optional] 0 None (no play), 1 Chain (goes before main slide), 3 Chain Flatten (goes before main slide and flatten all caption animations), default value is 1
                },


                $BulletNavigatorOptions: {                          //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                 //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 8,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 8,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                },

                $ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                }

            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var bodyWidth = document.body.clientWidth;
                if (bodyWidth)
                    jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 1920));
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
      </script>

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
    <div class="navbar-fixed">
        <nav>
          <div class="nav-wrapper blue darken-3">
            <a href="welcome" class="brand-logo"><center><img src="images/LogoSolyLuna.png" class="responsive-img" width="40%" alt=""></center></a>
            <ul class="right hide-on-med-and-down">
              <li><a href="contacto">Contact Us<i class="material-icons left">call</i></a></li>
            </ul>
            <!--Navar Movil-->
            <ul class="side-nav" id="slide-out">
              <li><a href="contacto">Contact us</a></li>
              <li><a href="independent">Independent living</a></li>
              <li><a href="assisting">Assisting livig</a></li>
              <li><a href="memorycare">Memory Care</a></li>
              <li><a href="#">Login</a></li>
            </ul>
            <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">reorder</i></a>
            <!--Fin Navar Movil-->
          </div>
        </nav>
    </div>
   <!-- navbar -->

    <!-- Carrousel -->
   <!-- Jssor Slider Begin -->
    <!-- To move inline styles to css file/block, please specify a class name for each element. -->
    <div id="slider1_container" style="position: relative; margin: 0 auto;

        top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;

                top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position: absolute; display: block; background: url(images/loading.gif) no-repeat center center;

                top: 0px; left: 0px; width: 100%; height: 100%;"></div>
        </div>
        <!-- Slides Container -->
        <div u="slides" style=" position: absolute; left: 0px; top: 0px; width: 1300px;

            height: 500px; overflow: hidden;">
            <div>
                <img u="image" src="images/tarde.jpg" />
                <div u="caption" t="NO" t3="RTT|2" r3="137.5%" du3="3000" d3="500" style="position: absolute; width: 445px; height: 300px; top: 100px; left: 600px;">
                <!--
                    <img src="img/new-site/c-phone.png" style="position: absolute; width: 445px; height: 300px; top: 0px; left: 0px;" />
                    <img u="caption" t="CLIP|LR" du="4000" t2="NO" src="img/new-site/c-jssor-slider.png" style="position: absolute; width: 102px; height: 78px; top: 70px; left: 130px;" />
                    <img u="caption" t="ZMF|10" t2="NO" src="img/new-site/c-text.png" style="position: absolute; width: 80px; height: 53px; top: 153px; left: 163px;" />
                    <img u="caption" t="RTT|10" t2="NO" src="img/new-site/c-fruit.png" style="position: absolute; width: 140px; height: 90px; top: 60px; left: 220px;" />
                    <img u="caption" t="T" du="4000" t2="NO" src="img/new-site/c-navigator.png" style="position: absolute; width: 200px; height: 155px; top: 57px; left: 121px;" />
                    -->
                </div>
                <div u="caption" t="RTT|2" r="-75%" du="1600" d="2500" t2="NO" style="position: absolute; width: 470px; height: 220px; top: 120px; left: 650px;">
                <!--
                    <img src="img/new-site/c-phone-horizontal.png" style="position: absolute; width: 470px; height: 220px; top: 0px; left: 0px;" />
                    <img u="caption" t3="MCLIP|L" du3="2000" src="img/new-site/c-slide-1.jpg" style="position: absolute; width: 379px; height: 213px; top: 4px; left: 45px;" />
                    <img u="caption" t="MCLIP|R" du="2000" t2="NO" src="img/new-site/c-slide-3.jpg" style="position: absolute; width: 379px; height: 213px; top: 4px; left: 45px;" />
                    <img u="caption" t="RTTL|BR" x="500%" y="500%" du="1000" d="-3000" r="-30%" t3="L" x3="70%" du3="1600" src="img/new-site/c-finger-pointing.png" style="position: absolute; width: 257px; height: 300px; top: 80px; left: 200px;" />
                    <img src="img/new-site/c-navigator-horizontal.png" style="position: absolute; width: 379px; height: 213px; top: 4px; left: 45px;" />
                    -->
                </div>
                <div style="position: absolute; width: 480px; height: 120px; top: 30px; left: 400px; padding: 5px;

                    text-align: center; line-height: 60px; text-transform: uppercase; font-size: 50px;

                        color: #FFFFFF;">
                    Welcome to paradise
                </div>
                <div style="position: absolute; width: 480px; height: 120px; top: 300px; left: 500px; padding: 5px;

                    text-align: left; line-height: 36px; font-size: 30px;

                        color: #FFFFFF;">
                        We care We linsting
                </div>
            </div>
            <div>
                <a href="casasayulita" class="brand-logo " ><img u="image" src="images/casasayulita.jpg" /></a>
                <div style="position: absolute; width: 480px; height: 120px; top: 30px; left: 500px; padding: 5px;

                    text-align: right; line-height: 60px; text-transform: uppercase; font-size: 50px;

                        color: #FFFFFF;">Casa Sayulita
                </div>
                <div style="position: absolute; width: 480px; height: 120px; top: 300px; left: 500px; padding: 5px;

                    text-align: left; line-height: 36px; font-size: 30px;

                        color: #FFFFFF;">
                        Perfect for Relax
                </div>
            </div>
            <div>
                <a href="casaconchaschinas" class="brand-logo " ><img u="image" src="images/casaconchaschinas.jpg" /></a>
                <div style="position: absolute; width: 480px; height: 120px; top: 30px; left: 400px; padding: 5px;

                    text-align: left; line-height: 60px; text-transform: uppercase; font-size: 50px;

                        color: #FFFFFF;">Casa Conchas chinas
                </div>
                <div style="position: absolute; width: 480px; height: 120px; top: 300px; left: 500px; padding: 5px;

                    text-align: left; line-height: 36px; font-size: 30px;

                        color: #FFFFFF;">
                        A perfect view, a perfect life
                </div>
            </div>
            <div>
                <a href="casamemorycare" class="brand-logo " > <img u="image" src="images/casamemoria.jpg" /></a>
                <div style="position: absolute; width: 480px; height: 120px; top: 30px; left: 400px; padding: 5px;

                    text-align: left; line-height: 60px; text-transform: uppercase; font-size: 50px;

                        color: #FFFFFF;">Casa unidad de memoria
                </div>
                <div style="position: absolute; width: 480px; height: 120px; top: 300px; left: 500px; padding: 5px;

                    text-align: left; line-height: 36px; font-size: 30px;

                        color: #FFFFFF;">
                        The better place, the better Services
                </div>
            </div>
            <div>
                <a href="residenciaamapa" class="brand-logo " > <img u="image" src="images/residenciaamapa.jpg" /></a>
                <div style="position: absolute; width: 480px; height: 120px; top: 30px; left: 400px; padding: 5px;

                    text-align: left; line-height: 60px; text-transform: uppercase; font-size: 50px;

                        color: #FFFFFF;">Residencia Amapa
                </div>
                <div style="position: absolute; width: 480px; height: 120px; top: 300px; left: 500px; padding: 5px;

                    text-align: left; line-height: 36px; font-size: 30px;

                        color: #FFFFFF;">
                    A beautiful life...
                </div>
            </div>
        </div>
        <!--#region Bullet Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/development/slider-with-bullet-navigator-jquery.html -->
        <style>
            /* jssor slider bullet navigator skin 21 css */
            /*
            .jssorb21 div           (normal)
            .jssorb21 div:hover     (normal mouseover)
            .jssorb21 .av           (active)
            .jssorb21 .av:hover     (active mouseover)
            .jssorb21 .dn           (mousedown)
            */
            .jssorb21 {
                position: absolute;
            }
            .jssorb21 div, .jssorb21 div:hover, .jssorb21 .av {
                position: absolute;
                /* size of bullet elment */
                width: 19px;
                height: 19px;
                text-align: center;
                line-height: 19px;
                color: white;
                font-size: 12px;
                background: url(images/b21.png) no-repeat;
                overflow: hidden;
                cursor: pointer;
            }
            .jssorb21 div { background-position: -5px -5px; }
            .jssorb21 div:hover, .jssorb21 .av:hover { background-position: -35px -5px; }
            .jssorb21 .av { background-position: -65px -5px; }
            .jssorb21 .dn, .jssorb21 .dn:hover { background-position: -95px -5px; }
        </style>
        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb21" style="bottom: 26px; right: 6px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype"></div>
        </div>
        <!--#endregion Bullet Navigator Skin End -->
        <!--#region Arrow Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/development/slider-with-arrow-navigator-jquery.html -->
        <style>
            /* jssor slider arrow navigator skin 21 css */
            /*
            .jssora21l                  (normal)
            .jssora21r                  (normal)
            .jssora21l:hover            (normal mouseover)
            .jssora21r:hover            (normal mouseover)
            .jssora21l.jssora21ldn      (mousedown)
            .jssora21r.jssora21rdn      (mousedown)
            */
            .jssora21l, .jssora21r {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: 55px;
                height: 55px;
                cursor: pointer;
                background: url(images/a21.png) center center no-repeat;
                overflow: hidden;
            }
            .jssora21l { background-position: -3px -33px; }
            .jssora21r { background-position: -63px -33px; }
            .jssora21l:hover { background-position: -123px -33px; }
            .jssora21r:hover { background-position: -183px -33px; }
            .jssora21l.jssora21ldn { background-position: -243px -33px; }
            .jssora21r.jssora21rdn { background-position: -303px -33px; }
        </style>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora21l" style="top: 123px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora21r" style="top: 123px; right: 8px;">
        </span>
        <!--#endregion Arrow Navigator Skin End -->
        <a style="display: none" href="http://www.jssor.com">Bootstrap Slider</a>
    </div>
    <!-- Jssor Slider End -->
   <!-- Carrousel -->

   <!-- navbar -->
   <nav>
    <div class="nav-wrapper blue ">
      <a href="#" class="brand-logo hide-on-small-only" style="

    padding-left: 20px;

">Sol & Luna Exclusive Health Resorts</a>
      <a href="#" class="brand-logo hide-on-med-and-up"><h5>Sol&Luna Exclusive HealthResorts</h5></a>
      <ul id="" class="right hide-on-med-and-down">
        <li><a href="/">Inicio</a></li>
        <li><a href="independent">Independent living</a></li>
        <li><a href="assisting">Assisting livig</a></li>
        <li><a href="memorycare">Memory Care</a></li>
            <li><a href="#"><i class="material-icons">person_pin</i></a></li>
      </ul>
    </div>
  </nav>
  <br>
   <br>
   <!-- navbar -->

    <!-- Page Layout here -->
    <div class="row">
      <div class="col s12 m12 l3"> <!-- Note that "m4 l3" was added -->
         <div class="row">
              <div class="col s12 m12 l12">
                <div class="card-panel ">
                  <span class="grey lighten-1">
                    <blockquote>
                     <b class="grey-text text-darken-4">Find a Health Resort</b>
                    </blockquote>
                      {!! Form::open() !!}
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
                     <div class="form-group">
                         {!! Form::submit('Seleccionar', ['class'=> 'btn btn-primary btn-block']) !!}
                     </div>
                      {!! Form::close() !!}
                  </span>
                </div>
              </div>
         </div>
      </div> <!-- Note that "m4 l3" was added -->


      <div class="col s12 m12 l9"> <!-- Note that "m8 l9" was added -->
         <div class="row">
            <div class="card-panel col s12 m12 l9 ">
                <div class="divider"></div>
                <div class="section">
                    <h5 class="grey-text text-darken-4">EXPERIENCE SOL & LUNA HEALTH RESORTS</h5>
                    <p class="grey-text text-darken-2">Aqui va texto donde menciona lo grandioso que es hospedarse en sol y luna y todos los servicios que ofrecemos ademas de las actividades a realizar, poder hacer videollamadas, llevar un control de los huespedes, etc... Aqui va texto donde menciona lo grandioso que es hospedarse en sol y luna y todos los servicios que ofrecemos ademas de las actividades a realizar, poder hacer videollamadas, llevar un control de los huespedes, etc..
                                                       Aqui va texto donde menciona lo grandioso que es hospedarse en sol y luna y todos los servicios que ofrecemos ademas de las actividades a realizar, poder hacer videollamadas, llevar un control de los huespedes, etc..</p>
                    <div class="row">
                        <div class="col s12 l4">
                            <div class="card-panel white">
                                <img src="images/anciana.jpg" class="responsive-img" width="100%" alt="">
                            </div>
                            <blockquote class="grey-text text-darken-4">Sara, 74 Years Old, Alburquerque</blockquote>
                        </div>
                        <div class="col s12 l4">
                            <p class="flow-text grey-text text-darken-4">"The best experience of my life..."</p>
                        </div>
                        <p class="grey-text text-darken-2">Aqui va texto donde menciona lo grandioso que es hospedarse en sol y luna y todos los servicios que ofrecemos ademas de las actividades a realizar, poder hacer videollamadas, llevar un control de los huespedes, etc... Aqui va texto donde menciona lo grandioso que es hospedarse en sol y luna y todos los servicios que ofrecemos ademas de las actividades a realizar, poder hacer videollamadas, llevar un control de los huespedes, etc..
                            Aqui va texto donde menciona lo grandioso que es hospedarse en sol y luna y todos los servicios que ofrecemos ademas de las actividades a realizar, poder hacer videollamadas, llevar un control de los huespedes, etc..</p>
                    </div>
                </div>
            </div>
         </div>
         <div class="divider col s12 m8 l9 "></div>
         <!--Section-->
         <div class="section ">
          <div class="row">
            <div class="col s12 m12 l3">
              <div class="card big hoverable">
                <div class="card-image">
                   <a href="independent" class="brand-logo"> <img src="images/viejos.jpg"></a>
                   <a href="independent" class="brand-logo">   <span class="card-title ">Vida Independiente</span></a>
                </div>
                <div class="card-content">
                  <a href="independent" class="brand-logo"><p class="grey-text text-darken-2">Viva de manera extraordinaria</p></a>
                </div>
                <div class="card-action">
                  <a href="independent">See more...</a>
                </div>
              </div>
            </div>
            <div class="col s12 m12 l3">
              <div class="card big hoverable">
                <div class="card-image">
                  <a href="assisting" class="brand-logo"> <img src="images/vidaasistida.jpg"></a>
                  <a href="assisting" class="brand-logo"> <span class="card-title ">Vida Asistida</span></a>
                </div>
                <div class="card-content">
                  <a href="assisting" class="brand-logo"> <p class="grey-text text-darken-2">Reciba los mejores cuidados asistidos.</p></a>
                </div>
                <div class="card-action">
                  <a href="assisting">See more...</a>
                </div>
              </div>
            </div>
            <div class="col s12 m12 l3 ">
              <div class="card big hoverable ">
                <div class="card-image">
                    <a href="memorycare" class="brand-logo"><img src="images/memoria.jpg"></a>
                    <a href="memorycare" class="brand-logo">   <span class="card-title">Unidad de Cuidado de Memoria</span></a>
                </div>
                <div class="card-content">
                    <a href="memorycare" class="brand-logo">   <p class="grey-text text-darken-2">Medicos capacitados para su cuidado.</p></a>
                </div>
                <div class="card-action">
                  <a href="memorycare">See more...</a>
                </div>
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col s12 m12 l3">
              <div class="card big hoverable">
                <div class="card-image">
                    <a href="tecnologia" class="brand-logo"> <img src="images/tecnologia.jpg"></a>
                    <a href="tecnologia" class="brand-logo">   <span class="card-title ">Technology</span></a>
                </div>
                <div class="card-content">
                  <a href="independent" class="brand-logo">  <p class="grey-text text-darken-2">Technology and Innovation</p></a>
                </div>

                <div class="card-action">
                  <a href="tecnologia">See more...</a>
                </div>
              </div>
            </div>

            <div class="col s12 m12 l3">
              <div class="card big hoverable">
                <div class="card-image">
                  <a href="healthcare" class="brand-logo"> <img src="images/healthcare.jpg"></a>
                  <a href="healthcare" class="brand-logo">  <span class="card-title">HealthCare</span></a>
                </div>
                <div class="card-content">
                    <a href="healthcare" class="brand-logo">   <p class="grey-text text-darken-2">The best HealtCare services</p></a>
                </div>
                <div class="card-action">
                  <a href="healthcare">See more...</a>
                </div>
              </div>
            </div>

            <div class="col s12 m12 l3 ">
              <div class="card big hoverable ">
                <div class="card-image">
                  <a href="amenities" class="brand-logo"><img src="images/amenities.jpg"></a>
                 <a href="amenities" class="brand-logo"> <span class="card-title">Amenities</span></a>
                </div>
                <div class="card-content">
                 <a href="amenities" class="brand-logo"> <p class="grey-text text-darken-2">Las mejores instalaciones y servicios del mercado</p></a>
                </div>
                <div class="card-action">
                  <a href="amenities">See more...</a>
                </div>
              </div>
            </div>
          </div>

             <div class="divider col s12 m8 l9 "></div>
             <div class="section ">
                <img src="images/LogoSolyLuna.png" class="responsive-img" width="6%" alt="">
                <img src="images/sanjavier.png" class="responsive-img" width="5%" alt="">
                <img src="images/pv.jpg" class="responsive-img" width="8%" alt="">
                <img src="images/medasist.png" class="responsive-img" width="12%" alt="">
             </div>
        </div><!--Section-->
  <!-- Note that "m8 l9" was added -->
      </div>

  <!-- Page Layout here -->
  </div>
        <footer class="page-footer grey lighten-3">
          <div class="footer-copyright">
            <div class="container">
            <b class="black-text text-ligthen-4">© 2015 Copyright Sol & Luna Health Exclusive Resorts</b>
            <a class="black-text text-lighten-3" href="#!">| About Us |</a>
            <a class="black-text text-lighten-3" href="#!"> Inversionistas |</a>
            <a class="black-text text-lighten-3" href="#!"> Terms |</a>
            <a class="black-text text-lighten-3" href="#!"> Privacy |</a>
            <a class="black-text text-lighten-3" href="{{ url('/auth/login') }}"> ADM |</a>
            </div>
          </div>
        </footer>

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

</body>
</html>