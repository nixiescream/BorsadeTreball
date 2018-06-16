@extends('layouts.panel')

<!-- Barra Superior -->
@section('header')
<header class="app-header navbar">
    <ul class="nav navbar-nav d-md-down-none">
        <li class="nav-item px-3">
        <li class="breadcrumb-item">Alumne</li>
        <li class="breadcrumb-item"><a href="{{ secure_url('/alumne', $alumne->user_id) }}">{{ $alumne->alumne_nom }}</a></li>
        <li class="breadcrumb-item active">Llistar ofertes</li>
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
            <a class="nav-link" href="{{ secure_url('/alumne', $alumne->user_id) }}"><i class="icon-speedometer"></i> Panell d'usuari </a>
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

@section('content')
<form method="POST" action="{{ secure_url('/alumne') }}">
    {{ csrf_field() }}
    <input type="hidden" value="{{ $alumne->user_id }}" name="id">
</form>
<div class="content container-fluid">
    @foreach($ofertes as $oferta)
    <div class="card border-info mb-3 rounded">
        <div class="card-header bg-info">
            {{ $oferta->titol }}
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('/alumne/aplicarOferta') }}">
                {{ csrf_field() }}
                    <input type="hidden" value="{{ $alumne->user_id }}" name="idA">
                    <input type="hidden" value="{{ $oferta->id }}" name="idO">
                    <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">{{ $oferta->descripcio }}</li>
                                <li class="list-group-item">{{ $oferta->sou }}€/hora</li>
                                <li class="list-group-item">{{ $oferta->horari }}</li>
                                <li class="list-group-item">{{ $oferta->tipus }}</li>
                                <li class="list-group-item">@foreach($estudis as $estudi)
                                                            @if($oferta->estudis_sigles == $estudi->sigles)
                                                                {{ $estudi->nom }}
                                                            @endif
                                                            @endforeach</li>
                            </ul>
                            <br>
                            <button type="submit" value="aplicar" class="btn btn-success">Inscriure's</button>
                            {{$str}}
                    </div>
            </form>
        </div>
    </div>
@endforeach
@if($ofertes->isEmpty())
<h3>No hi ha ofertes disponibles</h3>
@endif
</div>
@endsection

@section('footer')
<footer class="app-footer">
    <span class="ml-auto">INS F. Vidal i Barraquer &copy;.</span>
  </footer>
@endsection
