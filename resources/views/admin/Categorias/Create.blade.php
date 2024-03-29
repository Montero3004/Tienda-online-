@extends('admin.diseños.app')


@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">					
    <div class="container-fluid my-2">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Crear Categorias</h1>
            </div>
            <div class="col-sm-6 text-right">
                <a href="categories.html" class="btn btn-primary">Atras</a>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">								
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Name">	
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="slug">Slug</label>
                            <input type="text" name="slug" id="slug" class="form-control" placeholder="Slug">	
                        </div>
                    </div>									
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="email">Status</label>
                        <select name="status" id="status" class="form-control"> 
                        <option value="1">Activo</option>
                        <option value="0">bloquedo</option> 
                        </select>	
                    </div>
                </div>			
            </div>							
        </div>
        <div class="pb-5 pt-3">
            <button class="btn btn-primary">Crear</button>
            <a href="brands.html" class="btn btn-outline-dark ml-3">Cancelar</a>
        </div>
    </div>
    <!-- /.card -->
</section>
<!-- /.content -->
@endsection

@section('customJs')
<script>  </script>
@endsection