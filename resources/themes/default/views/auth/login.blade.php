@extends('layouts.dialog')

@section('content')
    <p class="login-box-msg">{!! trans('general.login-form.note-login') !!}</p>
        <form class="form-signin" method="POST" action="/auth/login" >
            {!! csrf_field() !!}

            <div class="form-group has-feedback">
                <input type="text" id="username" name="username" class="form-control" placeholder="{!! trans('general.login-form.username') !!}" value="{{ old('username') }}" required autofocus/>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" id="password" name="password" class="form-control" placeholder="{!! trans('general.login-form.password') !!}" required/>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox" id="remember" name="remember"> {!! trans('general.login-form.remember') !!}
                        </label>
                    </div>
                </div><!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">{!! trans('general.login-form.sign-in') !!}</button>
                </div><!-- /.col -->
            </div>
        </form>

        <!--{!! link_to_route('recover_password', 'I forgot my password', [], ['class' => "text-center"]) !!}<br>
        {!! link_to_route('register', 'Register a new membership', [], ['class' => "text-center"]) !!}*/-->
@endsection