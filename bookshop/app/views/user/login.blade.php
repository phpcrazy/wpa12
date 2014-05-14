@extends ('layouts.master')
@section('content')

<div class="row">
    <div class="container">
        <div class="col-md-4 col-md-offset-4" style="margin-top:100px;">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Admin Log in Area</h3>
                </div>
                <div class="panel-body">
                {{ Form::open(array('url' => 'login')) }}
                <fieldset>
                    <div class="form-group">                        
                        @foreach($errors->get('username') as $error )
                        <div class="alert alert-danger">
                                    {{ $error }}
                    </div>
                        @endforeach
                        {{ Form::text('username', null , array('class' => 'form-control', 'placeholder' => 'Enter Name')) }} 
                    </div>
                    <div class="form-group">
                    @foreach($errors->get('password') as $error )
                        <div class="alert alert-danger">
                                {{ $error }}
                        </div>
                    @endforeach
                        {{ Form::password('password' , array('class' => 'form-control','placeholder'    => 'Enter Password'))  }} <br />
                    </div>
                    <div class="checkbox">
                        <label>
                            <input name="remember" type="checkbox" value="Remember Me"> Remember Me
                        </label>
                    </div>
                    {{ Form::submit('Submit', array('class' => 'btn btn-lg btn-success btn-block')) }}
                </fieldset>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
</div>
@stop
