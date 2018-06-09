@extends('layouts.panel')

<!-- Barra Superior -->
@section('header')
<header class="app-header navbar">
    <ul class="nav navbar-nav d-md-down-none">
        <li class="nav-item px-3">
        <li class="breadcrumb-item">Empresa</li>
        <li class="breadcrumb-item"><a href="{{ secure_url('/empresa', $empresa->user_id) }}">{{ $empresa->empresa_nom }}</a></li>
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
                <a class="dropdown-item" href="{{ secure_url('/empresa', $empresa->user_id) }}"><i class="fa fa-user"></i> Perfil</a>
                <a class="dropdown-item" href="{{ secure_url('/empresa/editarEmpresa',$empresa->user_id) }}"><i class="fa fa-wrench"></i> Editar perfil</a>
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
            <a class="nav-link" href="{{ secure_url('/empresa', $empresa->user_id) }}"><i class="icon-speedometer"></i> Panell d'usuari </a>
          </li>

          <li class="nav-title">
            Perfil
          </li>
          <li class="nav-item">
            <a href="{{ secure_url('/empresa/editarEmpresa',$empresa->user_id) }}" class="nav-link" active><i class="icon-pencil"></i> Editar perfil</a>
          </li>

          <li class="nav-title">
            Les meves ofertes
          </li>
          <li class="nav-item">
            <a @if($empresa->empresa_validat == 1)
                href="{{ secure_url('/empresa/crearOferta', $empresa->user_id) }}"
                class="nav-link"
            @endif
            @if($empresa->empresa_validat == 0)
                class="nav-link disabled"
            @endif
            ><i class="icon-graph"></i> Crear oferta </a>
          </li>

          <li class="nav-title">
            Ofertes
          </li>
          <li class="nav-item">
            <a @if($empresa->empresa_validat == 1)
                href="{{ secure_url('/empresa/llistarOfertes', $empresa->user_id) }}"
                class="nav-link"
            @endif
            @if($empresa->empresa_validat == 0)
                class="nav-link disabled"
            @endif
            ><i class="icon-list"></i> Llistat d'ofertes</a>
          </li>
        </ul>
      </nav>
    </div>
@endsection

<!-- Contingut central -->
@section('content')
<form method="post" action="{{ secure_url('/empresa') }}">
    {{ csrf_field() }}
    <input type="hidden" value="{{ $empresa->user_id }}" name="id">
</form>
<div class="content container-fluid">
    <div class="card border-info mb-3 rounded">
        <div class="card-header bg-info">
            Empresa
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $empresa->empresa_nom }}</h5>
        </div>
    </div>
</div>
<div class="content container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="card border-info mb-3 rounded">
                <div class="card-header bg-info">
                    Informació
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">{{ $empresa->empresa_nom }}</li>
                        <li class="list-group-item">{{ $empresa->empresa_addr }}</li>
                        <li class="list-group-item">{{ $empresa->empresa_telefon }}</li>
                        <li class="list-group-item">{{ $empresa->empresa_email }}</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-info mb-3 rounded">
                <div class="card-header bg-info">
                    Ofertes creades
                </div>
                <div class="card-body">
                    @if(!$ofertes->isEmpty())
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col"></th>
                          <th scope="col">Oferta</th>
                          <th scope="col">Descripció</th>
                        </tr>
                      </thead>
                      <tbody>
                    @foreach($ofertes as $oferta)
                        <tr>
                          <th scope="row">{{ $oferta->id }}</th>
                          <td>{{ $oferta->titol }}</td>
                          <td>{{ $oferta->descripcio }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                    </table>
                    {{ $ofertes->appends(['o1' => $ofertes->currentPage(), 'o2' => $ofertesV->currentPage()])->links() }}
                    @else
                    No hi ha ofertes disponibles
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-info mb-3 rounded">
                <div class="card-header bg-info">
                    Ofertes validades
                </div>
                <div class="card-body">
                    @if(!$ofertesV->isEmpty())
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col"></th>
                          <th scope="col">Oferta</th>
                          <th scope="col">Descripció</th>
                        </tr>
                      </thead>
                      <tbody>
                    @foreach($ofertesV as $ofertaV)
                        <tr>
                          <th scope="row">{{ $ofertaV->id }}</th>
                          <td>{{ $ofertaV->titol }}</td>
                          <td>{{ $ofertaV->descripcio }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                    </table>
                    {{ $ofertes->appends(['o1' => $ofertes->currentPage(), 'o2' => $ofertesV->currentPage()])->links() }}
                    @else
                    No hi ha ofertes disponibles
                    @endif
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
