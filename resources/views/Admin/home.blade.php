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
         <h3 style="text-align:center;">Latest Board updates</h3>
    @foreach ($boards as $board)
    <br>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="latestCards card-header">
                <div style="float:left;">{{ $board->title }} </div>
                <div style="float:right;">Edited by: {{$board->edited_by}}</div>
               
                </div>
                <div class="card-body">
                    Edited on :  {{$board->updated_at}}
                    {{ $board->status}}
                </div>
            </div>
        </div>
    </div>
    </div>
         @endforeach
        <!-- Fill this with updates to board(s) -->
    

@endsection
