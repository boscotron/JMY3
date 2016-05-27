@extends('include.templet_material_admin')
@section('title', 'Ingresa al sistema JMY-API v3')
@section('description', 'Formulario de ingreos al sistema JMY-API v3')
@section('keywords', 'login')

@section('content')


<!-- BEGIN LOGIN SECTION -->
		<section class="section-account">
			<div class="img-backdrop" style="background-image: url('{{$url}}/assets/img/img16.jpg')"></div>
			<div class="spacer"></div>
			<div class="card contain-sm style-transparent">
				<div class="card-body">
					<div class="row">
						<div class="col-sm-6">
							<br/>
							<span class="text-lg text-bold text-primary-dark">JMY-API v3</span>
							<br/><br/>
							<form class="form floating-label" action="{{$url}}/html/dashboards/dashboard.html" accept-charset="utf-8" method="post">
								<div class="form-group">
									<input type="text" class="form-control" id="username" name="username" required>
									<label for="username">Usuario</label>
								</div>
								<div class="form-group">
									<input type="password" class="form-control" id="password" name="password" required>
									<label for="password">Contrase&ntilde;a</label>
									<p class="help-block"><a href="#">Olvidaste tu contrase&ntilde;a?</a></p>
								</div>
								<br/>
								<div class="row">
									<div class="col-xs-6 text-left">
										<div class="checkbox checkbox-inline checkbox-styled">
											<label>
												<input type="checkbox"> <span>Recu&eacute;rdame</span>
											</label>
										</div>
									</div><!--end .col -->
									<div class="col-xs-6 text-right">
										<button class="btn btn-primary-dark btn-raised" type="submit">Entrar</button>
									</div><!--end .col -->
								</div><!--end .row -->
							</form>
						</div><!--end .col -->
						<div class="col-sm-5 col-sm-offset-1 text-center">
							<br><br>
								<h3 class="text-light">
									A&uacute;n no tienes cuenta?
								</h3>
								<a class="btn btn-block btn-raised btn-primary-dark" href="#">Registrate aqu&iacute;</a>
								<br><br>
									<h3 class="text-light">
										o tambi&eacute;n por redes sociales
									</h3>
									<p>
										<a href="#" class="btn btn-block btn-raised btn-danger"><i class="fa fa-facebook pull-left"></i>Google</a>
									</p>
									<p>
										<a href="#" class="btn btn-block btn-raised btn-info"><i class="fa fa-twitter pull-left"></i>Facebok</a>
									</p>
								</div><!--end .col -->
							</div><!--end .row -->
						</div><!--end .card-body -->
					</div><!--end .card -->
				</section>
				<!-- END LOGIN SECTION -->
				
@stop