@extends('products.layout')
@section('content')
<style>
    table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}
    </style>
        <div class="flex-center position-ref full-height">
            <div class="content" style="overflow-x:auto;">
                <h1>Here's a list of available products</h1>
                <table class="table table-bordered">
                    <tr class="tableHeader">
                      <!--  <td>Id</td> -->
                    <td>Name</td>
                        <td>Description</td>
                        <td>Count</td>
                        <td>Price</td>
                        <th width="250px">Action</th>
                </tr>
                   
                        @foreach ($allProducts as $product)
                            <tr>
                                
                                <td>{{ $product->name }}</td>
                                <td class="inner-table">{{ $product->description }}</td>
                                <td class="inner-table">{{ $product->count }}</td>
                                <td class="inner-table">{{ $product->price }}</td>
                                <td>
                                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>        
                            </td>
                            </tr>
                        @endforeach
               
                </table>
            </div>
        </div>
 @endsection