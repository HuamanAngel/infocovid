@extends('layouts.template2')

@section('contenidoCSS')
    
@endsection

@section('contenido')
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">


  <div id="wrapper">

   
    <!-- Section: intro -->
    <section id="intro" class="intro">
      <div class="intro-content">
        <div class="container">
          <div class="row">
            <div id="carousel-reviews" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="item active">
                  <div class="col-lg-6">
                    <div class="block-text rel zmin" style="padding-left: 100px;">
                    <h3 class="h-light">Farmacias serán multadas por no informar a autoridad, precios de medicamentos contra COVID-19.</h3>
                      <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="col-lg-6">
                    <div class="block-text rel zmin" style="padding-left: 100px;">
                    <h3 class="h-light">Laboratorios podrán vender medicamentos para tratamiento del COVID-19 directamente a usuarios.</h3>
                      <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                    </div>
                  </div>
                </div>

                <div class="item">
                  <div class="col-lg-6">
                    <div class="block-text rel zmin" style="padding-left: 100px;">
                    <h3 class="h-light">Pueblo Libre: Clausuran almacén clandestino que vendian productos farmacéuticos en Pueblo Libre.</h3>
                      <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                    </div>
                  </div>
                </div>

                <div class="item">
                  <div class="col-lg-6">
                    <div class="block-text rel zmin" style="padding-left: 100px;">
                    <h3 class="h-light">Demanda de medicinas para tratar síntomas de COVID-19 aumentó en cinco veces. ¿cuál es la respuesta de Inkafarma?</h3>
                      <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                    </div>
                  </div>
                </div>

                <div class="item">
                  <div class="col-lg-6">
                    <div class="block-text rel zmin" style="padding-left: 100px;">
                    <h3 class="h-light">Ensayos clínicos de vacunas candidatas contra COVID-19 empezarían a finales de octubre en Perú.</h3>
                      <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                    </div>
                  </div>
                </div>

                <div class="item">
                  <div class="col-lg-6">
                    <div class="block-text rel zmin" style="padding-left: 100px;">
                    <h3 class="h-light">Inkafarma: 48 de sus locales atenderán al público las 24 horas durante la emergencia sanitaria.</h3>
                      <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                    </div>
                  </div>
                </div>

              </div>
              <a class="left carousel-control" href="#carousel-reviews" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
              </a>
              <a class="right carousel-control" href="#carousel-reviews" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
            </div>
            <br>
            <div class="wow fadeInRight" data-wow-delay="0.1s">
                  <p class="text-left" data-wow-delay="0.1s" style="padding-left: 100px;">
                    <a href="{{ route('noticias') }}" class="btn btn-skin btn-lg" >CONOCE MÁS<i class="fa fa-angle-right"></i></a>
                  </p>
              </div>
          </div> 
        </div> 
      </div>
    </section>

    <!-- /Section: intro -->

    <!-- Section: boxes -->

    <section id="boxes" class="home-section paddingtop-80">   
    <h1 align="center">DENUNCIA ALGUNA IRREGULARIDAD</h1>
              <p align="center" style="color:#249571";> <b> Si ves que alguna farmacia o botica aumenta el precio <br/>de sus medicamentos de manera inescrupulosa hazlo saber <br/>mediante una denuncia pública.</b>
      <div class="container">
        <div class="row">
          
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <div class="box text-center">

                <img src="img/secuencia.png" class="img-responsive center" alt="" width="787" height="153">
              
              </div>
            </div>
         
        </div>
      </div>
      <br/>
    </section>
    <!-- /Section: boxes -->

    <br/>

    <!-- Section: denuncias -->
    <section id="service" class="home-section nopadding paddingtop-60">

      <div class="container">

        <div class="row">
          <div class="col-sm-7 col-md-7">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <h2>¿DÓNDE PUEDO DENUNCIAR?</h2>
              <p style="color:#249571";><b>Existen instituciones del estado al que puedes acudir, estos delitos son <br/>investigados por el Ministerio Publico, tambien puedes comunicarte con <br/>DIGEMID que pertenece al MINSA, y puedes pedir información a INDECOPI.</b></p>
            </div>
          </div>
          <div class="col-sm-2 col-md-2">

            <div class="wow fadeInRight" data-wow-delay="0.1s">
                <div class="service-icon">
                  <img src="img/ministerio.png" class="center" alt="" width="130" height="110" />
                </div>
            </div>

            <div class="wow fadeInRight" data-wow-delay="0.1s">
                <div class="service-icon">
                  <img src="img/salud.png" class="center" alt="" width="150" height="110" />
                </div>
            </div>

          </div>


          <div class="col-sm-2 col-md-2">

            <div class="wow fadeInRight" data-wow-delay="0.1s">
                <div class="service-icon">
                  <img src="img/digemid.png" class="center" alt="" width="150" height="110" />
                </div>
            </div>

            <div class="wow fadeInRight" data-wow-delay="0.1s">
                <div class="service-icon">
                  <img src="img/indecopi.png" class="center" alt="" width="110" height="110" />
                </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- /Section: denuncias -->
  </div>
  <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>    
@endsection
