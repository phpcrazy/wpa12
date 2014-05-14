@extends ('layouts.master')
@section('content')
<div class="container">
	<div class="col-md-8 col-md-offset-2">
		{{ Form::open(array('url' => 'register')) }}
		<h2>Please Sign Up <small>It's free and always will be.</small></h2>
		<hr class="colorgraph">
		<div class="row">
			<div class="form-group">
			@foreach($errors->get('name') as $error )
			             <div class="alert alert-danger">
		                                {{ $error }}
		                          </div>
		             @endforeach
			{{ Form::text('name', null , array('class' => 'form-control', 'placeholder' => 'Your Name')) }} 
			</div>
			<div class="form-group">
			@foreach($errors->get('email') as $error )
			             <div class="alert alert-danger">
		                                {{ $error }}
		                          </div>
		             @endforeach
			{{ Form::text('email', null , array('class' => 'form-control', 'placeholder' => 'Your Email')) }} 
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					@foreach($errors->get('password') as $error )
					             <div class="alert alert-danger">
				                                {{ $error }}
				                          </div>
				             @endforeach
					<div class="form-group">
						{{ Form::password('password' , array('class' => 'form-control' , 'placeholder'	=> 'Password'))  }} 
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
					@foreach($errors->get('password-confirmation') as $error )
					             <div class="alert alert-danger">
				                                {{ $error }}
				                          </div>
				             @endforeach
						{{ Form::password('password-confirmation' , array('class' => 'form-control', 'placeholder'=> 'Comfirm Password'))  }} 
					</div>
				</div>
			</div>			
			<div class="row">
				<div class="col-xs-12 col-md-12">
					{{ Form::submit('Register' , array('class' => 'btn btn-primary btn-block btn-lg' ))}}
				</div>
			</div>
			{{ Form::close() }}
		</div>
	</div>
</div>
@stop