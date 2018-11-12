@extends('admin.base')

@section('content')

<h1>
        Editar 
        <small>Producto</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('products.index') }}"><i class="fa fa-dashboard"></i> Listado de Productos</a></li>
        <li class="active">Producto  ID-> {{ $product->id }}</li>
      </ol>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Nuevo Producto
                </div>

                <div class="panel-body">
                
                {!! Form::model($product, ['route'=> ['products.update', $product->id],
                 'method'=>'PUT']) !!}

                @include('admin.products.partials.form')
                
                {!! Form::close() !!}
                
                
                </div>
            </div>
        </div>
    </div>

@endsection 