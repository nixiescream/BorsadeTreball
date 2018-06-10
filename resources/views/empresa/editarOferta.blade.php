@extends('layouts.panel')


<!-- Barra Superior -->
@section('header')
<header class="app-header navbar">
    <ul class="nav navbar-nav d-md-down-none">
        <li class="nav-item px-3">
        <li class="breadcrumb-item">Empresa</li>
        <li class="breadcrumb-item"><a href="{{ secure_url('/empresa', $empresa->user_id) }}">{{ $empresa->empresa_nom }}</a></li>
        <li class="breadcrumb-item active">Editar oferta</li>
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

@section('content')
<form method="post" action="{{ secure_url('/empresa') }}">
    {{ csrf_field() }}
    <input type="hidden" value="{{ $empresa->user_id }}" name="id">
</form>
<div class="content container-fluid">
    <div class="card border-info mb-3 rounded">
        <div class="card-header bg-info">
            Crear oferta
        </div>
        <div class="card-body">
            <form method="POST" action="{{ secure_url('empresa/editarOferta') }}">
                {{ csrf_field() }}
                <input type="hidden" value="{{ $empresa->user_id }}" name="idE">
                <input type="hidden" value="{{ $oferta->id }}" name="idO">
                <div class="card">
                        <div class="row card-body">
                            <div class="col-md-12 input-group mb-3 {{ $errors->has('titol') ? ' has-error' : '' }}">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-user"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Títol" name="titol" value="{{ $oferta->titol }}" required autofocus>
                                @if($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-12 input-group mb-3 {{ $errors->has('descripcio') ? ' has-error' : '' }}">
                                <textarea class="form-control" name="descripcio" placeholder="Descripció" rows="3">{{ $oferta->descripcio }}</textarea>
                                @if($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-6 input-group mb-3 {{ $errors->has('sou') ? ' has-error' : '' }}">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$$</span>
                                </div>
                                <input type="text" class="form-control" placeholder="Salari" name="sou" value="{{ $oferta->sou }}" required>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-6 input-group mb-3 {{ $errors->has('horari') ? ' has-error' : '' }}">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">#</span>
                                </div>
                                <input type="text" class="form-control" placeholder="Horari" name="horari" value="{{ $oferta->horari }}" required>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-6 input-group mb-3 {{ $errors->has('tipus') ? ' has-error' : '' }}">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-user"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Tipus de feina" name="tipus" value="{{ $oferta->tipus }}" required>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-6 input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-pencil"></i></span>
                                </div>
                                <select name="estudis_emprats" class="custom-select form-control">
                                    @foreach($estudis as $estudi)
                                    @if($estudi->sigles == $oferta->estudis_sigles)
                    				<option value="{{ $estudi->sigles }}" selected>
                    				@else
                    					<option value="{{ $estudi->sigles }}">
                    				@endif
                                    {{ $estudi->nom }}</option>
                                    @endforeach
                                </select>
                            </div>
                        <button type="submit" value="guardar" class="col-4 offset-md-4 btn btn-block btn-success">Guardar</button>
                    </div>
                </div>
        </form>
    </div>
</div>
@endsection

@section('footer')
<footer class="app-footer">
    <span class="ml-auto">INS F. Vidal i Barraquer &copy;.</span>
  </footer>
@endsection
