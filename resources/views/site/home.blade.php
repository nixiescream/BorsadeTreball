@extends('layouts.princ')

@section('header')
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <img src="{{ asset('images/ESCUTColor2.png') }}" id="logo"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#comunicacio">Comunicació</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#comoditat">Comoditat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#eficiencia">Eficiència</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#who">Qui som</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contact">Contacte</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fab fa-facebook-f" target="_blank" href="https://www.facebook.com/Institut-F-Vidal-I-Barraquer-1954702708100227/"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fab fa-twitter" target="_blank" href="https://twitter.com/VIDALIBARRAQUER"></a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-primary-outline" href="{{ url('login') }}">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
@endsection


@section('content')
<header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>Borsa de treball</strong>
            </h1>
            <h2 class="text-uppercase">
              <strong>INS F. Vidal i Barraquer</strong>
            </h2>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5 text-white" style="font-size:2rem"><Strong>Construïm futur</Strong></p>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#comunicacio">Endavant!</a>
          </div>
        </div>
      </div>
    </header>

    <section class="bg-primary" id="comunicacio">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white"><strong>Comuniquem-nos</strong></h2>
            <hr class="light my-4">
            <p class="text-faded mb-4"><strong>Coneixem la importància d'una bona comunicació, per això aconseguim que empreses, institut i alumnes estiguin en contacte constant.</strong></p>
          </div>
        </div>
      </div>
    </section>
    <section id="comoditat">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Comoditat</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-share-alt-square text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Publica</h3>
              <p class="text-muted mb-0">Registra la teva empresa en instants i publica què és el que necessites!</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-users  text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Selecciona</h3>
              <p class="text-muted mb-0">Ets una empresa activa? Selecciona a qui creguis més apte!</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fas fa-4x fa-comments  text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Contacta</h3>
              <p class="text-muted mb-0">Mantingues contacte constant amb l'institut. Ens encanta millorar!</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-handshake-o text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Treballa</h3>
              <p class="text-muted mb-0">Formem i treballem junts! Ens enorgullim dels nostres estudiants!</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-transparent text-white text-center">
        <h2 class="mb-4 text-white">Però sobretot</h2>
        <h2 class="fa fa-3x fa-angle-down text-white mb-3 sr-icons"></h2>
    </section>


    <section id="eficiencia">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Eficiència</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container" style="position:center">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fas fa-4x fa-thumbs-up  text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Fàcil</h3>
              <p class="text-muted mb-0">Realitza les operacions amb els menors pasos possibles.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-check text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Simple</h3>
              <p class="text-muted mb-0">Més treball en menys esforç. Res defineix millor la eficiència que la facilitat de realitzar operacions en un entorn simple.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-bolt  text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Intuïtiu</h3>
              <p class="text-muted mb-0">El temps és or. No et caldrà malgastar-lo adaptant-te al nostre entorn.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fas fa-4x fa-heart text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Atractiu</h3>
              <p class="text-muted mb-0">Un entorn atractiu sempre millora la productivitat.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-transparent text-white text-center">
        <h2 class="mb-4">Et trobes a un sol click de començar</h2>
        <a class="btn btn-primary js-scroll-trigger btn-xl sr-button" href="login">Treballem junts!</a>
      </div>

    </section>

    <section class="bg-primary" id="who">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white"><strong>Qui som?</strong></h2>
            <hr class="light my-4">
            <p class="text-faded mb-4"><strong>Un equip d'estudiants de Desenvolupament d'aplicacions web de l'institut Vidal i Barraquer</strong></p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 mr-auto text-center service-box mt-5 mx-auto">
            <i class="fas fa-5x fa-user text-white mb-3 sr-icons"></i>
            <h3 class="mb-3 text-white">Xavi Banús</h3>
          </div>
          <div class="col-lg-4 mr-auto text-center service-box mt-5 mx-auto">
            <i class="fas fa-5x fa-user text-white mb-3 sr-icons"></i>
            <h3 class="mb-3 text-white">Núria Balaguer</h3>
          </div>
        </div>
      </div>
    </section>
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Mantinguem-nos en contacte</h2>
            <hr class="my-4">
            <p class="mb-5">Tens algun dubte?<br> T'has topat amb algun problema?<br> fes-nos-ho saber!</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
            <p>977212836</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fas fa-3x fa-graduation-cap mb-3 sr-contact"></i>
            <p>
              <a href="mailto:http://www.vidalibarraquer.net@enborsat.com">http://www.vidalibarraquer.net</a>
            </p>
          </div>
        </div>
      </div>
</section>
@endsection
