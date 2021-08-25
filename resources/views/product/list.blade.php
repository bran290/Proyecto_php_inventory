@extends('layout')
@section('content')
@section('title' , 'Lista Productos')
@section('h1' , 'Listado de productos')

<div class="mb-3 row">
    <div class="col-sm-10"></div>
    <div class="col-sm-3">
        <a href="{{route('product.form')}}" class="btn btn-primary">Nuevo producto</a>
    @if(Session::has('message'))
        <p class="text-danger">{{ Session::get('message') }}</p>
    @endif
    @if(Session::has('message_new'))
        <p class="text-warning">{{ Session::get('message_new') }}</p>
    @endif
    </div>
</div>


<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Cost</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Brand</th>
            <th>Category</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($list as $product)
            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->cost}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->quantity}}</td>
                <td>{{$product->brand->brand}}</td>
                <td>{{$product->category->name}}</td>
                <td>
                    <a href="{{route('product.form' , ['id' =>$product->id])}}" class="btn btn-warning">Editar</a>
                    <a href="{{route('product.delete', ['id'=>$product->id])}}" class="btn btn-danger">Borrar</a>
                </td>
            </tr>
        @endforeach


    </tbody>
</table>
@endsection

