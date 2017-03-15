{!! Form::open([ 'url' => '/colegios/'.$colegio->id, 'method' => 'DELETE' , 'style' => 'width:50px;margin:0;display:inline']) !!}

	<button type="submit" class="btn btn-danger" value="primary">
       <span class="fa fa-trash"></span> Eliminar
    </button>
	
{!! Form::close() !!}