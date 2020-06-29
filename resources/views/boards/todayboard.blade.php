@extends('boards.layout')
@section('content')

<div class="board-layout" >
      
   
        <div class="left">
          <div class="board-text">Today Board</div>
         <button class="primary btn-primary"onclick="document.getElementById('id01').style.display='block'" style="width:auto;" >Add New</button>
        </div>
       
      <div id='boardlists' class="board-lists">
        <div id='list1' class="board-list" ondrop="dropIt(event)" ondragover="allowDrop(event)">
          <div class="list-title">
            To Do
          </div>
          @foreach ($Todos as $todo) 
          <div id="card{{$todo->id}}" class="card" draggable="true" ondragstart="dragStart(event)" ><a class="btn btn-primary" href="{{ route('boards.edit',$todo->id) }}">Edit</a> {{ $todo->id }}  {{ $todo->title }} {{ $todo->desc }}</div>

@endforeach
            
            <!-- <div  id='card' class="card" draggable="true" ondragstart="dragStart(event)">
            <p onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Back up database</p>
            </div>
            <div id='card' class="card" draggable="true" ondragstart="dragStart(event)">
            Build Lambda function
            </div>
            <div id='card' class="card" draggable="true" ondragstart="dragStart(event)">
            Work on course content
            </div>
            <div id='card' class="card" draggable="true" ondragstart="dragStart(event)">
           <p contenteditable='true'> Debug SQL code</p>
            </div> -->
         
        </div>
        <div  id='list2' class="board-list" ondrop="dropIt(event)" ondragover="allowDrop(event)">
          <div  class="list-title">
          In Progress
          </div>
         <!--  <div  id='card' class="card" draggable="true" ondragstart="dragStart(event)">
            Work on article
            </div> -->
<!--             </div>
 -->          @foreach ($inprogress as $inprog) 
          <div id="card{{$inprog->id}}" class="card" draggable="true" ondragstart="dragStart(event)"> {{ $inprog->id }}  {{ $inprog->title }} {{ $inprog->desc }}</div>
<!-- <td>{{ $todo->status }}</td> -->
@endforeach

        </div>
        <div  id='list3' class="board-list"  ondrop="dropIt(event)" ondragover="allowDrop(event)">
          <div  class="list-title">
            Done
            </div>

            
          @foreach ($dones as $done) 
          <div id="card{{$done->id}}" class="card" draggable="true" ondragstart="dragStart(event)"> {{ $done->id }}  {{ $done->title }} {{ $done->desc }}</div>

          @endforeach
           <!--  <div  id='card' class="card" draggable="true" ondragstart="dragStart(event)">
            Add New Card 
            </div> -->
            </div>
      </div>
    </div></div></div>  <div id="id01" class="modal">
    <form class="modal-content animate" method="POST" action="submit">
    
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      
   


  
    <div class="container">
    @csrf
                    <h1> Enter Details to create a new card</h1>
                    <div class="form-input">
                        <label>Title</label> <input type="text" name="name">
                    </div>

                    <div class="form-input">
                        <label>Description</label> <input type="text" name="description">
                    </div>
                    <div class="form-input">
                        <label>status</label> <input type="text" name="status">
                    </div>
                     <button type="submit">Submit</button>
    
   
    </div>
</div>

@endsection

