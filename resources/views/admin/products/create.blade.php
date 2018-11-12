@extends('admin.base')

@section('content')
<h1>
        Productos
        <small>Producto</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('products.index') }}"><i class="fa fa-dashboard"></i> Listado de Productos</a></li>
        <li class="active">Producto</li>
      </ol>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Nuevo Producto
                </div>

                <div class="panel-body">
                
                {!! Form::open(['route'=> 'products.store']) !!}

                @include('admin.products.partials.form')
                
                {!! Form::close() !!}
                
                
                </div>
            </div>
        </div>
    </div>

@endsection 