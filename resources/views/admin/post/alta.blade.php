@extends('admin.layout')
@section('header')
 <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Crear Publicacion</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Nuevo Posts</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
@stop
@section('contenido')
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <!-- <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div> -->
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{route('guardar')}}">
              	{{csrf_field()}}
                <div class="card-body">
                  <div class="form-group {{$errors->has('titulo') ? 'has-error':''}}" >
                    <label for="titulo">Titulo</label>
                    <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Ingrese titulo">
                    {!! $errors->first('titulo','<span class="text-danger">:message</span>') !!}
                  </div>
                  <div class="form-group">
                    <label for="fragmento">Fragmento </label>
                     <textarea  class="form-control" id="fragmento" name="fragmento" placeholder="Ingrese Fragmento"></textarea>
                  </div>
                   <div class="form-group">
                    <label for="contenido">Contenido </label>
                    <textarea  class="form-control" name="contenido" id="contenido" placeholder="Ingrese Contenido"></textarea>
                  </div>
                   <div class="form-group">
                    <label for="contenido">Categorias </label>
                    <select  class="form-control" id="categoria" name="categoria">
                    	@foreach($categorias as $categoria)
                    	<option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                    	@endforeach
                    </select>
                  </div>
                   <div class="form-group">
                  <label>Multiple</label>
                  <select class="select2" multiple="multiple" name="etiquetas[]" data-placeholder="Seleccion una o mas etiquetas" style="width: 100%;">
                   @foreach($tags as $tag)
                   <option value="	{{$tag->id}}">
                   	{{$tag->nombre}}
                   </option>
                   @endforeach
                  </select>
                </div>
                   <div class="form-group">
                  <label>Fecha:</label>


                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" name="fecha" />
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                  <!-- /.input group -->
                </div>
                <!-- /.card-body -->
                </div>
                  

                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block">Guardar</button>
             </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

@stop

<!-- InputMask -->

<script>
 $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })	
</script>
