@extends('Admin.layout')
@section('content') 
        <div class="flex-center position-ref full-height">
           

            <div class="content">
                <div class="title m-b-md">
                   Products
                </div>

                <div class="links" style="background-color:white; border:1px solid black;">
                <a href="{{ url('/Admin/products/create')}}">Create Product</a>
                <a href="{{ url('Admin/products/viewproducts') }}">View Products</a>
                </div>

         



            </div>
        </div>
@endsection
