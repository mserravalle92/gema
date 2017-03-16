@extends("layouts.app")

@section('body')

@if(count($errors)>0)

		<div class="col-md-6 col-md-offset-3">
    <div class="alert alert-danger alert-border alert-dismissible fade in" role="alert">
    		<h3>Errores
            	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            </h3>
	@foreach($errors->all() as $error)
	<ul>
		<li>{{$error}}</li>
	</ul>
		
	@endforeach
        </div>
    </div>

@endif



<div class="col-md-6 top-20 padding-0 col-md-offset-3">
	<div class="col-md-12">
	  <div class="panel">
	    <div class="panel-heading"><h3>Editar Datos de Colegio</h3></div>
	    <div class="panel-body">

			@include('colegios.partials.form',
					['colegio'=>$colegio , 
					 'url'=> '/colegios/'.$colegio->id,
					 'method' => 'PUT'])
		</div>
	  </div>
	</div>
</div>


@endsection