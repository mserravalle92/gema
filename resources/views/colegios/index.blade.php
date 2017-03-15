@extends('layouts.app')
@section('body')

@if (session()->has('flash_notification.message'))
<div class="col-md-12">
    <div class="alert alert-{{ session('flash_notification.level') }} alert-3d alert-dismissible fade in text-center" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
             {!! session('flash_notification.message') !!}
        </div>
    </div>
@endif

<div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading" style="background-color:#2196F3"><h3 style="color:white">Colegios</h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatable" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Descripción</th>
                          <th>Telefono</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($colegios as $colegio)
                        	<tr>
                        		<td>{{$colegio->id}}</td>
                        		<td>{{$colegio->descripcion}}</td>
                        		<td>{{$colegio->text}}</td>
                        		<td>
                              <a href="{{url('/colegios/'.$colegio->id.'/edit')}}" class="">
                                    <button class=" btn btn-circle btn-mn btn-success" data-toggle="tooltip" data-placement="top" title="Ver Cursos" value="primary">
                                  <span class="fa fa-search"></span>
                                </button>
                              </a> 
                              <a href="{{url('/colegios/'.$colegio->id.'/edit')}}" class="">
                                    <button class=" btn btn-circle btn-mn btn-primary" data-toggle="tooltip" data-placement="top" title="Editar Colegio" value="primary">
                                  <span class="fa fa-edit"></span>
                                </button>
                              </a> 
                              <button type="button" class=" btn btn-circle btn-mn btn-danger" data-toggle="tooltip" data-placement="top" title="Eliminar Colegio" data-toggle="modal" data-target='#{{$colegio->id}}' value="primary">
                                 <span class="fa fa-trash"></span>
                              </button>

                            </td>
                        	</tr>

              <!-- *********************************************************************************
                   **********************  VENTANA MODAL ELIMINACIÓN   *****************************
                   *********************************************************************************-->

             <div class="col-md-12">
                <div class="modal fade" id={{$colegio->id}} tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header bg-blue-grey" style="color:white">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Eliminar Colegio</h4>
                      </div>
                      <div class="modal-body">
                        <p><i class="fa fa-warning" style="color:orange"></i> Está seguro que desea eliminar el colegio: <strong>{{$colegio->descripcion}}</strong> </p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        @include('colegios.partials.delete',['colegio' => $colegio])
                      </div>
                    </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
              </div>
                        @endforeach
                      </tbody>
                        </table>
                      </div>
                      <form method="GET" action="{{url('/colegios/create')}}" class="inline-block">
                         <button  class="btn btn-circle ripple-infinite btn-sm  btn-success"><div><span class="fa fa-plus"></span></div></button>
                      </form>

                  </div>
                </div>
              </div>  
              </div>


              


@endsection