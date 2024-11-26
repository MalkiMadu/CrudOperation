@extends('layouts.app')

@section('content')

<h1>Food Item</h1>
<div>
    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>

    @endif
</div>
<form action="{{route('product.view',['product'=>$product])}}" method="post">
@csrf

      <div class="mb-3 row">
        <label  class="col-sm-2 col-form-label" >Name</label>
        <div class="col-lg-6">
          <input type="text" class="form-control"  name="name" value="{{$product->name}}">
        </div>
      </div>
      <div class="mb-3 row">
        <label  class="col-sm-2 col-form-label">Quantity</label>
        <div class="col-lg-6">
          <input type="text" class="form-control"  name="qty" value="{{$product->qty}}">
        </div>
      </div>
      <div class="mb-3 row">
        <label  class="col-sm-2 col-form-label">Price</label>
        <div class="col-lg-6">
          <input type="text" class="form-control"  name="price" value="{{$product->price}}">
        </div>
      </div>
      <div class="mb-3 row">
        <label  class="col-sm-2 col-form-label">description</label>
        <div class="col-lg-6">
          <input type="text" class="form-control"  name="description" value="{{$product->description}}">
        </div>
      </div>

</form>





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
        color: red;

    }
    input{
        margin: auto;
    }
    table{
        margin: 10px;
        margin-left: 100px
    }

</style>
@endpush


