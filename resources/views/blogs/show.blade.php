@extends('blogs.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> {{$blog->title}}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('blogs.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <div class="jumbotron jumbotron-fluid">
  <div class="container">
  <p style="float:right">Updated: {{ $blog->updated_at }}</p>
    <h1>{{ $blog->title }}</h1> 
         
    <p>{{ $blog->description }}</p>
  </div>
</div>
   <!--  <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <h2>{{ $blog->title }}</h2>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                {{ $blog->description }}
            </div>
        </div>
    </div> -->
@endsection