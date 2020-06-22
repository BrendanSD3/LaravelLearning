@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome, {{ Auth::user()->name }}</div>
            
                </div>
            </div>
        </div>
    </div>
    </div>
    <h3 style="text-align:center;">Latest Blog Posts</h3>
    @foreach ($blogs as $blog)
    <br>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="latestCards card-header">
                <div style="float:left;">{{ $blog->title }} </div>
                <div style="float:right;"> {{$blog->updated_at}}</div>
               
                </div>
                <div class="card-body">
                    {{ $blog->description }}
                </div>
            </div>
        </div>
    </div>
    </div>
         @endforeach
   
         <h3 style="text-align:center;">Latest Products </h3>
    @foreach ($products as $prod)
    <br>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="latestprods card-header">
                <div style="float:left;">{{ $prod->name }} </div>
                <div style="float:right;"> {{$prod->updated_at}}</div>
               
                </div>
                <div class="card-body">
                    {{ $prod->description }}
                </div>
            </div>
        </div>
    </div>
    </div>
         @endforeach
        
    

@endsection
