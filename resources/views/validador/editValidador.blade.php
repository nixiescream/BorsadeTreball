@extends('layouts.panel')

<!-- Barra Superior -->
@section('header')
<header class="app-header navbar">
    <ul class="nav navbar-nav d-md-down-none">
        <li class="nav-item px-3">
        <li class="breadcrumb-item">Validador</li>
        <li class="breadcrumb-item"><a href="{{ secure_url('/validador', $validador->user_id) }}">{{ $validador->email }}</a></li>
        <li class="breadcrumb-item active">Editar perfil</li>
    </ul>
    <ul class="nav navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <i class="far fa-user"></i></a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header text-center">
                    <strong>Compte</strong>
                </div>
                <a class="dropdown-item" href="{{ secure_url('/validador', $validador->user_id) }}"><i class="fa fa-user"></i> Perfil</a>
                <a class="dropdown-item" href="{{ secure_url('/validador/editarValidador',$validador->user_id) }}"><i class="fa fa-wrench"></i> Editar perfil</a>
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
            <a class="nav-link" href="{{ secure_url('/validador', $validador->user_id) }}"><i class="icon-speedometer"></i> Panell d'usuari </a>
          </li>

          <li class="nav-title">
            Perfil
          </li>
          <li class="nav-item">
            <a href="{{ secure_url('/validador/editarValidador',$validador->user_id) }}" class="nav-link" active><i class="icon-pencil"></i> Editar perfil</a>
          </li>

          <li class="nav-title">
            Usuaris
          </li>
          <li class="nav-item">
            <a href="{{ secure_url('/validador/validarAlumnes', $validador->user_id) }}" class="nav-link"><i class="icon-list"></i> Validar alumnes </a>
          </li>
          <li class="nav-item">
            <a href="{{ secure_url('/validador/validarEmpreses', $validador->user_id) }}" class="nav-link"><i class="icon-list"></i> Validar empreses </a>
          </li>

          <li class="nav-title">
            Ofertes
          </li>
          <li class="nav-item">
            <a href="{{ secure_url('/validador/validarOfertes', $validador->user_id) }}" class="nav-link"><i class="icon-graph"></i> Validar ofertes </a>
          </li>
        </ul>
      </nav>
    </div>
@endsection

<!-- Contingut central -->
@section('content')
<form method="post" action="{{ secure_url('/validador') }}">
    {{ csrf_field() }}
    <input type="hidden" value="{{ $validador->user_id }}" name="id">
</form>
<div class="content container-fluid">
    <div class="card border-info mb-3 rounded">
        <div class="card-header bg-info">
            Editar Perfil
        </div>
        <div class="card-body">
            <form method="POST" action="{{ secure_url('validador/editarAlumne') }}">
                {{ csrf_field() }}
                <input type="hidden" value="{{ $validador->user_id }}" name="id">
                <div class="card">
                     <div class="row card-body">
                            <!-- EMAIL -->
                            <div class="col-md-6 input-group mb-4 {{ $errors->has('email') ? ' has-error' : '' }}">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">@</span>
                                </div>
                                <input type="email" class="form-control" placeholder="Email" name="email" value="{{ $validador->email }}" required>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <!-- PASSWORD -->
                            <div class="col-md-6 input-group mb-4 {{ $errors->has('password') ? ' has-error' : '' }}">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-lock"></i></span>
                                </div>
                                <input type="password" class="form-control" placeholder="Password" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <!-- PASSWORD CONFIRMATION -->
                            <div class="col-md-6 input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-lock"></i></span>
                                </div>
                                <input type="password" class="form-control" placeholder="Repeat password" name="password_confirmation" required>
                            </div>

                    </div>
            </div>
        <button type="submit" value="guardar" class="col-4 offset-md-4 btn btn-block btn-success">Guardar</button>
    </div>
</div>
@endsection

@section('footer')
<footer class="app-footer">
    <span class="ml-auto">INS F. Vidal i Barraquer &copy;.</span>
  </footer>
@endsection
