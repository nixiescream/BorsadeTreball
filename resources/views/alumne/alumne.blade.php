@extends('layouts.panel')

<!-- Barra Superior -->
@section('header')
<header class="app-header navbar">
    <ul class="nav navbar-nav d-md-down-none">
        <li class="nav-item px-3">
        <li class="breadcrumb-item">Alumne</li>
        <li class="breadcrumb-item"><a href="{{ secure_url('/alumne', $alumne->user_id) }}">{{ $alumne->alumne_nom }}</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
    </ul>
    <ul class="nav navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <i class="far fa-user"></i></a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header text-center">
                    <strong>Compte</strong>
                </div>
                <a class="dropdown-item" href="{{ secure_url('/alumne', $alumne->user_id) }}"><i class="fa fa-user"></i> Perfil</a>
                <a class="dropdown-item" href="{{ secure_url('/alumne/editarAlumne',$alumne->user_id) }}"><i class="fa fa-wrench"></i> Editar perfil</a>
                <div class="divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();"><i class="fa fa-lock"></i> Desconnecta</a><form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         {{ csrf_field() }}
                     </form>
            </div>
        </li>
    </ul>
  </header>
@endsection

<!-- Barra lateral -->

@section('sidebar')
<div class="sidebar">
      <nav class="sidebar-nav">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ secure_url('/alumne', $alumne->user_id) }}"><i class="icon-speedometer"></i> Panell d'usuari</a>
          </li>

          <li class="nav-title">
            Perfil
          </li>
          <li class="nav-item">
            <a href="{{ secure_url('/alumne/editarAlumne',$alumne->user_id) }}" class="nav-link" active><i class="icon-pencil"></i> Editar perfil</a>
          </li>

          <li class="nav-title">
            Les meves ofertes
          </li>
          <li class="nav-item">
            <a @if($alumne->alumne_validat == 1)
                href="{{ secure_url('/alumne/ofertesAplicades', $alumne->user_id) }}"
                class="nav-link"
            @endif
            @if($alumne->alumne_validat == 0)
                class="nav-link disabled"
            @endif><i class="icon-graph"></i> Ofertes aplicades </a>
          </li>

          <li class="nav-title">
            Ofertes
          </li>
          <li class="nav-item">
            <a @if($alumne->alumne_validat == 1)
                href="{{ secure_url('/alumne/llistarOfertes', $alumne->user_id) }}"
                class="nav-link"
            @endif
            @if($alumne->alumne_validat == 0)
                class="nav-link disabled"
            @endif><i class="icon-list"></i> Llistat d'ofertes </a>
          </li>
        </ul>
      </nav>
    </div>
@endsection

<!-- Contingut central -->
@section('content')
<form method="post" action="{{ secure_url('/alumne') }}">
    {{ csrf_field() }}
    <input type="hidden" value="{{ $alumne->user_id }}" name="id">
</form>
<div class="content container-fluid">
    <div class="card border-info mb-3 rounded">
        <div class="card-header bg-info">
            Perfil
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $alumne->alumne_nom }} {{ $alumne->alumne_cognom1 }} {{ $alumne->alumne_cognom2 }}</h5>
            @if($alumne->alumne_validat == 0) <p>(No validat)</p> @endif
        </div>
    </div>
</div>
<div class="content container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="card border-info mb-3 rounded">
                <div class="card-header bg-info">
                    Informació usuari
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">{{ $alumne->alumne_nom }} {{ $alumne->alumne_cognom1 }} {{ $alumne->alumne_cognom2 }}</li>
                        <li class="list-group-item">{{ $alumne->alumne_telefon }}</li>
                        <li class="list-group-item">{{ $alumne->alumne_email }}</li>
                        <li class="list-group-item">@foreach($estudis as $estudi)
                                                    @if($alumne->estudis_sigles == $estudi->sigles)
                                                        {{ $estudi->nom }}
                                                    @endif
                                                    @endforeach
                                                    </li>
                        <li class="list-group-item">@if($alumne->alumne_carnet == 1)
                                                        Té carnet de conduïr
                                                    @endif
                                                    @if($alumne->alumne_carnet == 0)
                                                        No té carnet de conduïr
                                                    @endif</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-info mb-3 rounded">
                <div class="card-header bg-info">
                    Ofertes inscrites
                </div>
                <div class="card-body">
                    @if(!$ofertes->isEmpty())
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">Oferta</th>
                          <th scope="col">Descripció</th>
                        </tr>
                      </thead>
                      <tbody>
                    @foreach($ofertes as $oferta)
                        <tr>
                          <td>{{ $oferta->titol }}</td>
                          <td>{{ $oferta->descripcio }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                    </table>
                    {{ $ofertes->links() }}
                    @else
                    No hi ha ofertes disponibles
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-4">
        <div class="card border-info mb-3 rounded">
                <div class="card-header bg-info">
                    Experiència
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">{{ $alumne->alumne_experiencia }} </li>
                    </ul>
                </div>
            </div>
        </div>
   </div>
</div>
@endsection

@section('footer')
<footer class="app-footer">
    <span class="ml-auto">INS F. Vidal i Barraquer &copy;.</span>
  </footer>
@endsection
