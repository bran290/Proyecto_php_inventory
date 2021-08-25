@extends('layout')
@section('title' , $product->id ? 'Editar producto':'Nuevo Producto')
@section('h1' , $product->id ? 'Editar producto':'Nuevo Producto')
@section('content')
<form action="{{route('product.save')}}" method="POST">
    <input type="hidden" name='id' value="{{ $product->id }}">
    @csrf
    <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name='name' value="{{ @old('name') ? @old('name') : $product->name}}">
        </div>
    </div>
    @error('name')
    <p class="text-danger">
        {{$message}}
    </p>
    @enderror
    <div class="mb-3 row">
        <label for="cost" class="col-sm-2 col-form-label">Cost</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="cost" name='cost' value="{{ @old('cost') ? @old('cost') : $product->cost}}">
        </div>
    </div>
    @error('cost')
    <p class="text-danger">
        {{$message}}
    </p>
    @enderror
    <div class="mb-3 row">
        <label for="price" class="col-sm-2 col-form-label">Price</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="price" name='price' value="{{ @old('price') ? @old('price') : $product->price}}">
        </div>
    </div>
    @error('price')
    <p class="text-danger">
        {{$message}}
    </p>
    @enderror
    <div class="mb-3 row">
        <label for="quantity" class="col-sm-2 col-form-label">Quantity</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="quantity" name='quantity' value="{{ @old('quantity') ? @old('quantity') : $product->quantity}}">
        </div>
    </div>
    @error('quantity')
    <p class="text-danger">
        {{$message}}
    </p>
    @enderror
    <div class="mb-3 row">
        <label for="brand" class="col-sm-2 col-form-label">Brand</label>
        <div class="col-sm-10">
            <select name="brand" id="" class="form-select">
                @foreach ($brands as $brand)
                    <option value="{{$brand->id}}" {{$brand->id == $product->brand_id ? "selected" : ""}} >{{$brand->brand}}</option>
                @endforeach
            </select>
        </div>
    </div>
    @error('brand')
    <p class="text-danger">
        {{$message}}
    </p>
    @enderror

    <div class="mb-3 row">
        <label for="brand" class="col-sm-2 col-form-label">Category</label>
        <div class="col-sm-10">
            <select name="name" id="" class="form-select">
                @foreach ($categories as $category)
                    <option value="{{$category->id}}" {{$category->id == $product->category_id ? "selected" : ""}} >{{$category->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    @error('brand')
    <p class="text-danger">
        {{$message}}
    </p>
    @enderror
    <div class="mb-3 row">
        <div class="col-sm-9"></div>
        <div class="col-sm-3">
            <a href="/products" class="btn btn-success">Volver</a>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
</form>
@endsection
