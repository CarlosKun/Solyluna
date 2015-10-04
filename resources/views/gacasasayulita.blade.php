@extends('master')
@section('navbar_menu')

  <div class="row">
    <div class="parallax-container">
      <div class="parallax"><img src="images/parallax.jpg"></div>
      <div class="caption center-align">
            <h3 class="white-text text-darken-2" style="margin-top: 250px">Gastronomy ...</h3>
            <h5 class="light grey-text text-lighten-3">Sol & Luna Health Exclusive Resorts</h5>
        </div>
    </div>
  </div>

@stop
@section('form_residencias')

  <!--Aqui va el contenido de la pagina-->

<div class="row"> <!-- row derecho -->
  <div class="col s12 m12 l7   "> <!-- cols -->
    <div class="card-panel white"> <!-- Card panel -->
      <center>
        <img src="images/cheforopeza.jpg" alt="" class="circle responsive-img" width="30%" > 
          <h5>Chef Oropeza</h5>
      </center>
      <ul class="collapsible" data-collapsible="accordion">
        <li>
          <div class="collapsible-header"><i class="material-icons">perm_identity</i>Acerca del chef</div>
          <div class="collapsible-body"><p align="justify"><b>Nombre completo:</b>Juan Alfredo Oropeza Mercado<br><br>
              <b>Lugar de nacimiento:</b> Ciudad de Mexico, Mexico<br><br>



              Empezo su carrera prestando servicios de alimentos a empresas aereas de vuelos privados.
              Despues estudio en la Universidad Anahuac del Sur y en algunas de las mejores escuelas de gastronomia del mundo, como el Culinary Institute of America de Nueva York, La Baipai de Tailandia y La Academia Raffles de Singapur.
              Ademas de ser uno de los chefs mas reconocidos en Mexico, por su trabajo en television, escribe articulos gastronomicos para algunas de las principales revistas femeninas y continua en el servicio de banquetes y alimentacion en su propia empresa. Tambien cuenta con su propio restaurante, el Cafe Arte, ubicado al sur de la Ciudad de Mexico.
              Actualmente es el conductor de Al Sabor del Chef, programa que se transmite de lunes a viernes por el Canal de las Estrellas, en el que enseña como cocinar cientos de platillos.</p></div>
        </li>
        <li>
          <div class="collapsible-header"><i class="material-icons">label_outline</i>Experiencia Laboral</div>
          <div class="collapsible-body"><p>
              <b>--</b>Participó en ‘Culinary Communications’, una producción de
                programas sobre alimentos para la televisión, libros y páginas
                web.<br><br>
              <b>--</b> Ha publicado artículos para algunas de las principales revistas
              femeninas.<br><br>
              <b>--</b> Desde hace años, este guapo chef mexicano brinda uno de los
              mejores servicios de banquetes y alimentación en su propia
              empresa.<br><br>
              <b>--</b> Participó en el canal ‘El Gourmet’ en un programa de televisión
              dedicado a la gastronomía mexicana llamado ‘México Culinario’.
              Actualmente, el chef Oropeza es el titular de la sección COCINA
              dentro del programa ‘HOY’, la cual se transmite los días lunes,
              miércoles y viernes.</p></div>
        </li>
        <li>
          <div class="collapsible-header"><i class="material-icons">grade</i>Especialidades</div>
          <div class="collapsible-body"><p>

            <div class="card-panel white col s12">
              <center>
                <b><h3> Pollo a la Naranja</h3></b>
              <img src="images/pollo.jpg" class="responsive-img" width="40%" alt="">
                </center>
              <p align="justify"> El pollo a la naranja es un plato chino-estadounidense originario de Hunan. La variedad de pollo a la naranja más frecuente en los restaurantes de comida rápida chino-estadounidenses consiste en trozos de pollo rebozados y fritos cubiertos con salsa agripicante con sabor a naranja, que se espesa o carameliza.</p>


            </div>

            </div>
        </li>

        <li>
          <div class="collapsible-header"><i class="material-icons">work</i>Docencia</div>
          <div class="collapsible-body"><p>
              <b>--</b> Estudió la carrera de Administración de Empresas y realizó el
              Diplomado ‘Cordon D’Or’ en la Universidad Anáhuac del Sur.<br><br>
              <b>--</b> En The Culinary Institute of America de Nueva York, estudió:
              ‘Healthy Cooking’, ‘Modern Buffet’, ‘American Bistro’, ‘Cucina
              Creativa’, ‘Asian Cuisine’, ‘Global Cooking’ y ‘Food Product
              Development’.<br><br>
              <b>--</b> En el Baipai Thai Cooking School (Bangkok, Tailandia), realizó
              un curso de Cocina Tailandesa.<br><br>
              <b>--</b> En el Raffles Culinary Academy (Singapore), estudió las nuevas
              tendencias en la cocina oriental.
            </p></div>
        </li>
        <li>
          <div class="collapsible-header"><i class="material-icons">verified_user</i>Certificados</div>
          <div class="collapsible-body"><p>Tiene la certificacion de Baipai Thai Cooking que es una especialidad en comida Tailandesa</p></div>
        </li>
        <li>
          <div class="collapsible-header"><i class="material-icons">business</i>Hoteleria</div>
          <div class="collapsible-body"><p>Trabajo en Sol & Luna Health Resorts desde el 2015 </p></div>
        </li>
      </ul>
      <br>
      <div class="row">
        <div class="col s12">
          <div class="col s12 m4 l4 hoverable">
            <div class="col s12 m12 l12 ">
              <center><a href="makeyourmenu"><img src="images/personaliza tu menu.jpg" class="responsive-img z-depth-2" alt="" style="width: 207px; height: 231px;"></a></center>
            </div>
            <div class="col s12 m12 l12 ">
              <p class="center-align">You can prepare your menu during your stay</p>
            </div>
          </div>
          <div class="col s12 m4 l4 hoverable">
            <div class="col s12 m12 l12 ">
             <center> <a href="images/menucasasayulita.pdf" TARGET="_blank"><img src="images/menu semanal.jpg" class="responsive-img z-depth-2" alt="" style="width: 207px; height: 231px;"></a></center>
            </div>
            <div class="col s12 m12 l12 ">
              <p class="center-align">You can see the menu for this week</p>
            </div>
          </div>
          <div class="col s12 m4 l4 hoverable">
            <div class="col s12 m12 l12 ">
              <center><a href="images/bebidas.pdf"><img src="images/drinks.jpg" class="responsive-img z-depth-2" alt="" style="width: 207px; height: 231px;"></a></center>
            </div>
            <div class="col s12 m12 l12 ">
              <p class="center-align">Wine, Beer, Alcoholic Drinks, beverages prepared...!</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col s12 m12 l12">
          <blockquote>
            <p><h4>Membresias y certificaciones</h4></p>
          </blockquote>
          <div class="divider"></div>
          <br>
          <div class="row hoverable">
            <div class="col s3">
              <img src="images/tif.png" class="responsive-img" alt="">
            </div>
            <div class="col s8">
              <p>El sello de Certificación Tipo Inspección Federal (TIF), garantiza, por medio de un Inspector Federal, que se cumplen controles rigurosos de calidad, sanidad e higiene en la producción de alimentos.

              Las instalaciones, el equipo utilizado, el manejo de residuos y los procedimientos de sanitización se apegan a estándares internacionales para garantizar una producción saludable y con riesgo mínimo de contaminación.</p>
            </div>
          </div>
          <div class="divider"></div>
          <div class="row hoverable">
            <div class="col s3">
              <img src="images/haccp.png" class="responsive-img" alt="">
            </div>
            <div class="col s8">
              <p>El sello de Análisis de Peligros y Puntos Críticos de Control (HACCP) asegura el cumplimiento de
                estándares internacionales para un sistema de gestión de seguridad alimentaria mediante la evaluación de
                riesgos y definición de sistemas de control centrados en la prevención, garantizando inocuidad en los alimentos.

              Estos Sistemas de Control proveen las herramientas necesarias para prevenir situaciones que pongan en peligro la
                inocuidad de los alimentos y los lineamientos específicos para tratar con tales situaciones garantizando un proceso eficiente y seguro.</p>
            </div>
          </div>
          <div class="divider"></div>
          <div class="row hoverable">
            <div class="col s3">
              <img src="images/usda-crt.png" class="responsive-img" alt="">
            </div>
            <div class="col s8">
              <p>USDA es la Norma Americana que certifica el proceso productivo de las carnes, garantizando un alimento sano y natural.</p>
            </div>
          </div>
          <div class="divider"></div>
          <div class="row hoverable">
            <div class="col s3">
              <img src="images/maff-crt.png" class="responsive-img" alt="" style="padding-top: 40px">
            </div>
            <div class="col s8">
              <p>Ministerio de Agricultura, Silvicultura e Industria Pesquera, cuya función primaria es la de fijar las normas de calidad para los productos alimenticios, supervisa los mercados comerciales y la venta de comida, y emprender proyectos sobre la recuperación y mejora de la tierra.</p>
            </div>
          </div>
          <div class="divider"></div>
          <div class="row hoverable">
            <div class="col s3">
              <img src="images/merieux.png" class="responsive-img" alt="" style="padding-top: 20px">
            </div>
            <div class="col s8">
              <p>"Good Manufacture Practices and Food Safety Systems Audit", consiste en la auditoría de los sistemas de seguridad alimentaria como son el HACCP y sus pre requisitos: Prácticas de seguridad de los alimentos, Registros de Control de Calidad, Buenas Prácticas de Manufactura, Control de Plagas, Procedimientos de Limpieza y Sanitización; Trazabilidad y Recuperación de Productos. Así mismo se audita el estado de las instalaciones y equipo de la planta, todo esto para asegurar la inocuidad de los diversos productos cárnicos que elaboramos.</p>
            </div>
          </div>
          <div class="divider"></div>
          <div class="row hoverable">
            <div class="col s3">
              <img src="images/bpm.png" class="responsive-img" alt="">
            </div>
            <div class="col s8">
              <p>Las Buenas Prácticas de Manufactura (BPM) o Good Manufacturing Practices (GMP) se constituyen como regulaciones de carácter obligatorio en una gran cantidad de países; buscan evitar la presentación de riesgos de índole física, química y biológica durante el proceso de manufactura de alimentos, que pudieran repercutir en afectaciones a la salud del consumidor.</p>
            </div>
          </div>
          <div class="divider"></div>
          <div class="row hoverable">
            <div class="col s3">
              <img src="images/food-defense.png" class="responsive-img" alt="">
            </div>
            <div class="col s8">
              <p>Food Defense es un programa para evitar el bioterrorismo en las Plantas de Alimentos.
              Se registra y vigila al personal que manipula los alimentos, y de igual manera a los visitantes que entran a la planta.
              Es una certificación solicitada por el Gobierno de los Estados Unidos de América.</p>
            </div>
          </div>
          <div class="divider"></div>
          <div class="row hoverable">
            <div class="col s3">
              <img src="images/sagarpa-crt.png" class="responsive-img" alt="" style="padding-top: 20px">
            </div>
            <div class="col s8">
              <p>La SAGARPA nos certifica como un Proveedor Confiable cumpliendo con los siguientes criterios:
              <br>
              - Hato libre de tuberculosis y brucelosis
              <br>
              - Libre de Clembuterol</p>
            </div>
          </div>
          <div class="divider"></div>
          <div class="row hoverable">
            <div class="col s3">
              <img src="images/mexico-calidad-suprema-crt.png" class="responsive-img" alt="">
            </div>
            <div class="col s8">
              <p>Es un sello que certifica la calidad, inocuidad y sanidad de los productos agropecuarios.

                Una empresa que cuenta con el sello México Calidad Suprema debe pasar por rigurosos controles en todos sus procesos productivos, asegurando que se apegan a las Normas Oficiales Mexicanas (NOM) y se llevan a cabo en óptimas condiciones de sanidad que no permiten ningún tipo de contaminación en el alimento.

                El sello de México Calidad Suprema es una garantía de Calidad Total.</p>
            </div>
          </div>
          <div class="divider"></div>
          <div class="row hoverable">
            <div class="col s3">
              <img src="images/ameg.png" class="responsive-img" alt="">
            </div>
            <div class="col s8">
              <p>Miembro de la Asociación Mexicana de Engordadores de Ganado.</p>
            </div>
          </div>
          <div class="divider"></div>
          <div class="row hoverable">
            <div class="col s3">
              <img src="images/mexbeef.png" class="responsive-img" alt="">
            </div>
            <div class="col s8">
              <p>Miembros de la Asociación de Exportadores de carne Mexican Beef.</p>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- Card Panel fin -->
  </div> <!-- cols -->
</div> <!-- fin row derecho -->




@stop


@section('piepagina')
@stop