@extends('layouts.app')

@section('content')

<h1>Fill the food details</h1>

<div>
    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>

    @endif
</div>
<form action="{{route('product.store')}}" method="post">
@csrf
@method('post')
      <div class="mb-3 row ">
        <label  class="col-sm-2 col-form-label" >Name</label>
        <div class="col-lg-6">
          <input type="text" class="form-control"  name="name" >
        </div>
      </div>
      <div class="mb-3 row">
        <label  class="col-sm-2 col-form-label">Quantity</label>
        <div class="col-lg-6">
          <input type="text" class="form-control"  name="qty" >
        </div>
      </div>
      <div class="mb-3 row">
        <label  class="col-sm-2 col-form-label">Price</label>
        <div class="col-lg-6">
          <input type="text" class="form-control"  name="price" >
        </div>
      </div>
      <div class="mb-3 row">
        <label  class="col-sm-2 col-form-label">description</label>
        <div class="col-lg-6">
          <input type="text" class="form-control"  name="description" >
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
</form>
<div>
    @if (session()->has('success'))
        <div class="col-lg-12 text-center">
            {{session('success')}}
        </div>
    @endif
</div>
<div class="col-lg-10 mt-5">
    <div class="">
        <table class="table table-striped">
            <thead class="table-primary">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>


              </tr>
            </thead>
            @foreach ($products as $key=>$product )
                <tr>
                    <td>{{++$key}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->qty}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->description}}</td>
                    <td>
                        <a href="{{route('product.edit',['product'=>$product])}}" class="btn btn-success">Edit</a>
                        <a href="{{route('product.destory',$product->id)}}" class="btn btn-danger">Delete</a>
                        <a href="{{route('product.view',$product->id)}}" class="btn btn-warning">View</a>



                </tr>
            @endforeach
          </table>
    </div>
</div>

@endsection

@push('css')
<style>
    h1{
        text-align: center;
    }
    form{

        margin-top: 20px;
        margin-left: 200px
    }
    label{
        margin: 10px;
        margin-top: 10px;

    }
    input{
        margin: auto;
    }
    table{
        margin: 10px;
        margin-left: 130px;
    }
    button{
        margin-left: 450px;
        font-size: 16px;
        width: 200px;

    }
</style>
@endpush


