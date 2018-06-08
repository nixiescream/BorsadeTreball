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
            <a class="nav-link" href="{{ secure_url('/alumne', $alumne->user_id) }}"><i class="icon-speedometer"></i> Panell d'usuari <span class="badge badge-primary">NEW</span></a>
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
<form method="post" action="{{ secure_url('alumne/editarAlumne') }}">
    {{ csrf_field() }}
    <input type="hidden" value="{{ $alumne->id }}" name="id">
</form>
<div class="content container-fluid">
    <div class="card border-info mb-3 rounded">
        <div class="card-header bg-info">
            Editar Perfil
        </div>
        <div class="card-body">
            <form method="POST" action="{{ secure_url('alumne/editarAlumne') }}">
                {{ csrf_field() }}
                <input type="hidden" value="{{ $alumne->user_id }}" name="id">
                <div class="card">
                     <div class="row card-body">

                       <!-- NOM -->
                       <div class="col-md-6 input-group mb-4 {{ $errors->has('nom') ? ' has-error' : '' }}">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="icon-user"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Nom" name="nom" value="{{ $alumne->alumne_nom }}" required autofocus>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                            </div>

                            <!-- DNI -->
                            <div class="col col-md-6 input-group mb-4 {{ $errors->has('dni') ? ' has-error' : '' }}">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-user"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="DNI" name="dni" value="{{ $alumne->alumne_dni }}" required>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <!-- COGNOM 1 -->
                            <div class="col-md-6 input-group mb-4 {{ $errors->has('cognom1') ? ' has-error' : '' }}">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-user"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Cognom 1" name="cognom1" value="{{ $alumne->alumne_cognom1 }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

                             <!-- TELEFON -->
                            <div class="col-md-6 input-group mb-4 {{ $errors->has('bio') ? ' has-error' : '' }}">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-user"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Telèfon" name="telf" value="{{ $alumne->alumne_telefon }}" required>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <!-- COGNOM 2 -->
                            <div class="col-md-6 input-group mb-4 {{ $errors->has('cognom2') ? ' has-error' : '' }}">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-user"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Cognom 2" name="cognom2" value="{{ $alumne->alumne_cognom2 }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <!-- EMAIL -->
                            <div class="col-md-6 input-group mb-4 {{ $errors->has('email') ? ' has-error' : '' }}">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">@</span>
                                </div>
                                <input type="email" class="form-control" placeholder="Email" name="email" value="{{ $alumne->alumne_email }}" required>
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
                                <input type="password" class="form-control" placeholder="Password" name="password">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <!-- ESTUDIS -->
                            <div class="col-md-6 input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-pencil"></i></span>
                                </div>
                                    <select name="estudis" class="custom-select form-control">
                                        @foreach($estudis as $estudi)
                                        @if($estudi->sigles == $alumne->estudis_sigles)
                                        <option value="{{ $estudi->sigles }}" selected>
                                        @else
                                            <option value="{{ $estudi->sigles }}">
                                        @endif
                                        {{ $estudi->nom }}</option>
                                        @endforeach
                                    </select>
                            </div>

                            <!-- PASSWORD CONFIRMATION -->
                            <div class="col-md-6 input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-lock"></i></span>
                                </div>
                                <input type="password" class="form-control" placeholder="Repeat password" name="password_confirmation">
                            </div>

                            <!-- BIOGRAFIA -->
                            <div class="col-md-6 input-group mb-4 {{ $errors->has('bio') ? ' has-error' : '' }}">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-user"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Biografia" name="biografia" value="{{ $alumne->alumne_biografia }}" required>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="offset-md-2 form-check form-check-inline">
                            Tens carnet? (
                                <input class="form-check-input" type="radio" name="carnet" id="carnet1" value=1>
                                <label class="form-check-label" for="carnet1">Si</label>
                            </div>
                            <div class="col-md-4 form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="carnet" id="carnet2" value=0>
                                <label class="form-check-label" for="carnet2">No</label>
                            )
                            </div>


                            <div class="form-check form-check-inline">
                            Tens disponibilitat completa? (
                                <input class="form-check-input" type="radio" name="disponibilitat" id="disponibilitat1" value=1>
                                <label class="form-check-label" for="disponibilitat1">Si</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="disponibilitat" id="disponibilitat2" value=0>
                                <label class="form-check-label" for="disponibilitat2">No</label>
                            )
                            </div>

                            <!--<div class="form-check form-check-inline" enctype="multipart/form-data">
                                <label for="upload_file" class="control-label col-sm-3">Selecciona fitxer</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="file" name="upload_file" id="upload_file">
                                </div>
                            </div>-->
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
