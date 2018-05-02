@extends('layouts.panel')

<!-- Barra Superior -->
@section('header')
<header class="app-header navbar">
    <ul class="nav navbar-nav d-md-down-none">
        <li class="nav-item px-3">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item"><a href="#">Admin</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
    </ul>
    <ul class="nav navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <i class="far fa-user"></i><span class="badge badge-pill badge-danger" alt="{{ Auth::user()->email }}">5</span></a>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header text-center">
                    <strong>Compte</strong>
                </div>
                <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Perfil</a>
                <a class="dropdown-item" href="#"><i class="fa fa-comment"></i> Missatges<span class="badge badge-primary">42</span></a>
                <a class="dropdown-item" href="#"><i class="fa fa-wrench"></i> Configuració</a>                
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
            <a class="nav-link" href="{{ url('/alumne', $alumne->user_id) }}"><i class="icon-speedometer"></i> Panell d'usuari <span class="badge badge-primary">NEW</span></a>
          </li>

          <li class="nav-title">
            Perfil
          </li>
          <li class="nav-item">
            <a href="{{ url('/alumne/editarAlumne',$alumne->user_id) }}" class="nav-link" active><i class="icon-pencil"></i> Editar perfil</a>
          </li>
          <li class="nav-item">
            <a href="typography.html" class="nav-link"><i class="icon-settings"></i> Configuració</a>
          </li>

          <li class="nav-title">
            Les meves ofertes
          </li>
          <li class="nav-item">
            <a href="{{ url('/alumne/editarAlumne',$alumne->user_id) }}" class="nav-link" active><i class="icon-graph"></i>Ofertes aplicades </a>
          </li>

          <li class="nav-title">
            Ofertes
          </li>
          <li class="nav-item">
            <a href="{{ url('/alumne/editarAlumne',$alumne->user_id) }}" class="nav-link" active><i class="icon-list"></i>Llistat d'ofertes </a>
          </li>
        </ul>
      </nav>
    </div>
@endsection

<!-- Contingut central -->
@section('content')
<form method="post" action="{{ url('/alumne') }}">
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
        </div>
    </div>
</div>
<div class="content container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="card border-info mb-3 rounded">
                <div class="card-header bg-info">
                    Estudis
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-info mb-3 rounded">
                <div class="card-header bg-info">
                    Idiomes
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Idioma</th>
                                <th scope="col">Nivell</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Català</td>
                                <td>Natiu</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Castellà</td>
                                <td>Natiu</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Anglès</td>
                                <td>B2</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-info mb-3 rounded">
                <div class="card-header bg-info">
                    Extras
                </div>
                <div class="card-body">
                    <h5 class="card-title">Extra 1</h5>
                    <ul class="list-group">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
   </div>
</div>
@endsection

@section('footer')
<footer class="app-footer">
    <span>Enborsa't &copy;.</span>
    <span class="ml-auto"><a href="#">Enborsa't</a></span>
  </footer>
@endsection
