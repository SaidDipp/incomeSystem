@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        
                        
<!--       Nombre completo-->
                        
                        <div class="form-group{{ $errors->has('NombreCompleto') ? ' has-error' : '' }}">
                            <label for="NombreCompleto" class="col-md-4 control-label">Nombre Completo</label>

                            <div class="col-md-6">
                                <input id="NombreCompleto" type="text" class="form-control" name="NombreCompleto" value="{{ old('NombreCompleto') }}" required autofocus>

                                @if ($errors->has('NombreCompleto'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('NombreCompleto') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

<!--        E-Mail address-->
                        
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
<!--                Telefono        -->
                        
                        
                          <div class="form-group{{ $errors->has('Telefono') ? ' has-error' : '' }}">
                            <label for="Telefono" class="col-md-4 control-label">Telefono</label>

                            <div class="col-md-6">
                                <input id="Telefono" type="Telefono" class="form-control" name="Telefono" value="{{ old('Telefono') }}" required>

                                @if ($errors->has('Telefono'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Telefono') }}</strong>
                                    </span>
                                @endif
                            </div>
                         </div>
                        
<!--                    Estado    -->
                        
                         <div class="form-group{{ $errors->has('estado') ? ' has-error' : '' }}">
                            <label for="estado" class="col-md-4 control-label">Estado</label>

                            <div class="col-md-6">
                                <input id="estado" type="estado" class="form-control" name="estado" value="{{ old('estado') }}" required>

                                @if ($errors->has('estado'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('estado') }}</strong>
                                    </span>
                                @endif
                            </div>
                         </div>
                        
<!--        UserName-->
                        
                        <div class="form-group{{ $errors->has('UserName') ? ' has-error' : '' }}">
                            <label for="UserName" class="col-md-4 control-label">UserName</label>

                            <div class="col-md-6">
                                <input id="UserName" type="text" class="form-control" name="UserName" value="{{ old('UserName') }}" required autofocus>

                                @if ($errors->has('UserName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('UserName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        

<!--            Password-->
                        
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Ci*</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Ci*</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
