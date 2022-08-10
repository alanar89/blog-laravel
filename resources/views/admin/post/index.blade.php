
@extends('admin.layout')

@section('header')
 <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Todos los posts</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Posts</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
@stop
@section('contenido')

  

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Listado de publicaciones</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="posts-table" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                      <th>Extracto</th>
                        <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>
                  	@foreach($posts as $post)
                  	<tr>
                  		<td>{{$post->id}}</td>
                  		<td>{{$post->titulo}}</td>
                  		<td>{{$post->vistaPrevia}}</td>
                  		<td>
                  		<a href="" class="btn btn-info btn-sm"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                  		<a href="" class="btn btn-danger btn-sm"><i class="fa fa-times" aria-hidden="true"></i></a>
                  		</td>
                  	</tr>
                  	@endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  
@stop