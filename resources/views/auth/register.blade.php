@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mx-4">
                <div class="card-body p-4">
                    <h1>Registra't</h1>
                    <p class="text-muted">Crea el teu compte</p>
                    <form method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="card">
                                <div class="card-body">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" class="message_pri" type="radio" onchange="testFunction()" name="rol" id="rol1" value="alumne">
                                        <label class="form-check-label" for="rol1">Alumne</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" class="message_pri" type="radio" onchange="testFunction()" name="rol" id="rol2" value="empresa">
                                        <label class="form-check-label" for="rol2">Empresa</label>
                                    </div>
                                    <div class="input-group mb-3 {{ $errors->has('username') ? ' has-error' : '' }}">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="icon-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Nom d'usuari" name="name" value="{{ old('name') }}" required autofocus>
                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="input-group mb-3 {{ $errors->has('email') ? ' has-error' : '' }}">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">@</span>
                                        </div>
                                        <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required>
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <script id="blockOfStuff" type="text/html">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="icon-pencil"></i></span>
                                        </div>
                                        <select name="estudis" class="custom-select form-control">
                                            @foreach($estudis as $estudi)
                                                <option value="{{ $estudi->sigles }}">{{ $estudi->nom }}</option>
                                            @endforeach
                                        </select>
                                    </script>
                                    <script id="blockOfStuff2" type="text/html">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="icon-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="DNI" name="dni" value="{{ old('dni') }}" required>
                                        @if ($errors->has('dni'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('dni') }}</strong>
                                            </span>
                                        @endif
                                    </script>
                                    <script id="blockOfStuff3" type="text/html">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="icon-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="CIF" name="cif" value="{{ old('cif') }}" required>
                                        @if ($errors->has('cif'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('cif') }}</strong>
                                            </span>
                                        @endif
                                    </script>
                                    <script>
                                    function radioSeleccionado(name){
                                      var elements=document.getElementsByName(name)
                                      for(x=0;x<elements.length;x++){
                                          if(elements[x].checked)
                                             return elements[x].value;
                                          }
                                    }
                                    function estudis(){
                                        rol = radioSeleccionado('rol');
                                        if(rol == 'alumne'){
                                            var div = document.createElement('div');
                                            div.setAttribute('class', 'input-group-prepend');
                                            div.setAttribute('id', 'divRaro');
                                            div.innerHTML = document.querySelector('#blockOfStuff').innerHTML;
                                            document.querySelector('#selection').appendChild(div);
                                        } else if(rol == 'empresa'){
                                            if(document.querySelector('#divRaro') !== null){
                                                var div = document.querySelector('#divRaro');
                                                document.querySelector('#selection').removeChild(divRaro);
                                            }
                                        }
                                    }
                                    function dni(){
                                        rol = radioSeleccionado('rol');
                                        if(rol == 'alumne'){
                                            if(document.querySelector('#divRaro3') !== null){
                                                var div2 = document.querySelector('#divRaro3');
                                                document.querySelector('#identificacio').removeChild(div2);
                                            }
                                            var div1 = document.createElement('div');
                                            div1.setAttribute('class', 'input-group-prepend');
                                            div1.setAttribute('id', 'divRaro2');
                                            div1.innerHTML = document.querySelector('#blockOfStuff2').innerHTML;
                                            document.querySelector('#identificacio').appendChild(div1);
                                        } else if(rol == 'empresa'){
                                            if(document.querySelector('#divRaro2') !== null){
                                                var div1 = document.querySelector('#divRaro2');
                                                document.querySelector('#identificacio').removeChild(div1);
                                            }
                                            var div2 = document.createElement('div');
                                            div2.setAttribute('class', 'input-group-prepend');
                                            div2.setAttribute('id', 'divRaro3');
                                            div2.innerHTML = document.querySelector('#blockOfStuff3').innerHTML;
                                            document.querySelector('#identificacio').appendChild(div2);
                                        }
                                    }
                                    function testFunction() {
                                        estudis();
                                        dni();
                                    }
                                    </script>
                                    <div class="input-group mb-3" id="selection"></div>
                                    <div class="input-group mb-3" id="identificacio"></div>
                                    <div class="input-group mb-3 {{ $errors->has('password') ? ' has-error' : '' }}">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="icon-lock"></i></span>
                                        </div>
                                        <input type="password" class="form-control" placeholder="Contrasenya" name="password" required>
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="icon-lock"></i></span>
                                        </div>
                                        <input type="password" class="form-control" placeholder="Repeteix la contrasenya" name="password_confirmation" required>
                                    </div>
                                    <div class="input-group mb-4">
                                        <div class="g-recaptcha" data-sitekey="6Lfg81sUAAAAAJQcwhEq_awlX4__UKTpy1ssFSo5"></div>
                                    </div>
                                <button type="submit" value="register" class="btn btn-block btn-success">Crear compte</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
