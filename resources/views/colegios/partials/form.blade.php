
{!! Form::open([ 'url' => $url, 'method' => $method ]) !!}

{{ csrf_field() }}

<div class="form-group form-animate-text" style="margin-top:40px !important;">
	{{Form::text('descripcion',$colegio->descripcion,['class' => 'form-text'])}}
	<span class="bar"></span>
	<label style="color:green">Descripción</label>
	
</div>

<div class="form-group form-animate-text" style="margin-top:40px !important;">
	{{Form::text('direccion',$colegio->direccion,['class' => 'form-text'])
	}}
	<span class="bar"></span>
	<label style="color:green">Dirección</label>
</div>

<div class="form-group form-animate-text" style="margin-top:40px !important;">
	{{Form::text('telefono',$colegio->telefono,['class' => 'form-text'])
	}}
	<span class="bar"></span>
	<label style="color:green">Teléfono</label>
</div>

<div class="col-md-6">
	<a href="{{url('/colegios')}}" class="btn btn-primary ripple btn-3d">Volver</a>
</div>
<div class="col-md-6">
	<input type="submit" Value="Cargar" class="btn btn-success ripple btn-3d">
</div>



{!! Form::close() !!}
