@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mx-4">
                <div class="card-body p-4">
                    <h1>Register</h1>
                    <p class="text-muted">Create your account</p>
                    <form method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="card">
                                <div class="card-body">
                                    <div class="input-group mb-3 {{ $errors->has('username') ? ' has-error' : '' }}">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="icon-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Username" name="name" value="{{ old('name') }}" required autofocus>
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
                                    <script>
                                    /*$('.message_pri').change(function(){
                                        console.log("asada")
                                        if($(this).val() == 'alumne'){
                                            var div = document.createElement('div');
                                            div.innerHTML = $('#blockOfStuff').innerHTML;
                                            document.getElementById('selection').appendChild(div);
                                        }
                                    });*/
                                    function radioSeleccionado(name){
                                      var elements=document.getElementsByName(name)
                                      for(x=0;x<elements.length;x++){
                                          if(elements[x].checked)
                                             return elements[x].value
                                          }
                                    }
                                    function prueba(){
                                        rol = radioSeleccionado('rol');
                                        if(rol == 'alumne'){
                                            var div = document.createElement('div');
                                            div.setAttribute('class', 'input-group-prepend');
                                            div.setAttribute('id', 'divRaro');
                                            div.innerHTML = document.querySelector('#blockOfStuff').innerHTML;
                                            document.querySelector('#selection').appendChild(div);
                                        } else if(rol == 'empresa'){
                                            var div = document.querySelector('#divRaro');
                                            document.querySelector('#selection').removeChild(divRaro);
                                        }
                                    }
                                    </script>
                                    <div class="input-group mb-3" id="selection"></div>
                                    <div class="input-group mb-3 {{ $errors->has('password') ? ' has-error' : '' }}">
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
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="icon-lock"></i></span>
                                        </div>
                                        <input type="password" class="form-control" placeholder="Repeat password" name="password_confirmation" required>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" class="message_pri" type="radio" onchange="prueba()" name="rol" id="rol1" value="alumne">
                                        <label class="form-check-label" for="rol1">Alumne</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" class="message_pri" type="radio" onchange="prueba()" name="rol" id="rol2" value="empresa">
                                        <label class="form-check-label" for="rol2">Empresa</label>
                                    </div>
                                <button type="submit" value="register" class="btn btn-block btn-success">Create Account</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
