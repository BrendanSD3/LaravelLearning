@extends('products.layout')
@section('content') 
        <div class="flex-center position-ref full-height">
           

            <div class="content">
                <div class="title m-b-md">
                   Products
                </div>
                @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
             @endif
                <div class="links" style="background-color:white; border:1px solid black;">
                <a href="{{ url('/products/create')}}">Create Product</a>
                <a href="{{ url('/products/viewproducts') }}">View Products</a>
                </div>

         



            </div>
        </div>
@endsection
