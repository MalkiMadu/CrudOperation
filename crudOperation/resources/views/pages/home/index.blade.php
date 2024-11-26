@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-log-12 text-center" >
           
        </div>
    </div>
</div>

<h3><a class="nav-link" href="{{route('product.create')}}">View CrudOperation</a></h3>
@endsection

@push('css')
<style>
   .page-title{

   }
   h3{
    text-align: center;
    margin: 100px;
    color: rgb(77, 77, 233);
    text-decoration: underline;
   }
</style>
@endpush
