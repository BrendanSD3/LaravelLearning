@extends('products.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
  <title>Trello-Like</title>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
   <style>
       /* This is based on the work of Joshua Saunders */
.board-layout {
    background-color: lightgray;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 15px;
    display: grid;
    grid-template-rows: max-content auto;
    grid-gap: 10px;
    padding: 10px;
    height:800px;
  }
.list-layout {
    display: grid;
    grid-gap: 10px;
   
  }
.board-text {
    font-weight: bold;
    font-size: 28px;
    padding: 5px;
  }
.board-lists {
    display: grid;
    grid-auto-columns: 275px;
    grid-auto-flow: column;
    grid-gap: 10px;
    height: 400px;
 
  }
  
  .board-list {
    background-color: rgb(235, 236, 240);
    border-radius: 3px;
    display: grid;
    grid-auto-rows: max-content;
    grid-gap: 10px;
/* Chrome use a fixed height */
height: max-content;
    padding: 10px;
  }
  
  .list-title {
    font-size: 18px;
    font-weight: bold;
  }
.card {
    background-color: white;
    border-radius: 3px;
    box-shadow: 0 1px 0 rgba(9,30,66,.25);
    padding: 10px;
    cursor:pointer;
  }
       </style>
</head>
<body>  <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    <div class="board-layout">
    
      
   
        <div class="left">
          <div class="board-text">Today Board</div>
         
        </div>
       
      <div id='boardlists' class="board-lists">
        <div id='list1' class="board-list" ondrop="dropIt(event)" ondragover="allowDrop(event)">
          <div class="list-title">
            To Do
          </div>
          
            
            <div  id='card2' class="card" draggable="true" ondragstart="dragStart(event)">
            <p onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Back up database</p>
            </div>
            <div id='card3' class="card" draggable="true" ondragstart="dragStart(event)">
            Build Lambda function
            </div>
            <div id='card4' class="card" draggable="true" ondragstart="dragStart(event)">
            Work on course content
            </div>
            <div id='card5' class="card" draggable="true" ondragstart="dragStart(event)">
           <p contenteditable='true'> Debug SQL code</p>
            </div>
         
        </div>
        <div  id='list2' class="board-list" ondrop="dropIt(event)" ondragover="allowDrop(event)">
          <div  class="list-title">
          In Progress
          </div>
          <div  id='card1' class="card" draggable="true" ondragstart="dragStart(event)">
            Work on article
            </div>
          
        </div>
        <div  id='list3' class="board-list"  ondrop="dropIt(event)" ondragover="allowDrop(event)">
          <div  class="list-title">
            Done
            </div>
            <div  id='card6' class="card" draggable="true" ondragstart="dragStart(event)">
            Add New Card 
            </div>
            </div>
      </div>
    </div>
<script >
function allowDrop(ev) {
    ev.preventDefault();  // default is not to allow drop
  }
  function dragStart(ev) {
    // The 'text/plain' is referring the Data Type (DOMString) 
    // of the Object being dragged.
    // ev.target.id is the id of the Object being dragged
    ev.dataTransfer.setData("text/plain", ev.target.id);
  }
  function dropIt(ev) {
    ev.preventDefault();  // default is not to allow drop
    let sourceId = ev.dataTransfer.getData("text/plain");
    let sourceIdEl=document.getElementById(sourceId);
    let sourceIdParentEl=sourceIdEl.parentElement;
    // ev.target.id here is the id of target Object of the drop
    let targetEl=document.getElementById(ev.target.id)
    let targetParentEl=targetEl.parentElement;
  
    // Compare List names to see if we are going between lists
    // or within the same list
    if (targetParentEl.id!==sourceIdParentEl.id){
// If the source and destination have the same 
        // className (card), then we risk dropping a Card in to a Card
        // That may be a cool feature, but not for us!
        if (targetEl.className === sourceIdEl.className ){
          // Append to parent Object (list), not to a 
          // Card in the list
          // This is in case you drag and drop a Card on top 
          // of a Card in a different list
           targetParentEl.appendChild(sourceIdEl);
         
        }else{
            // Append to the list
             targetEl.appendChild(sourceIdEl);
           
        }
       
    }else{
        // Same list. Swap the text of the two cards
        // Just like swapping the values in two variables
      
        // Temporary holder of the destination Object
        let holder=targetEl;
        // The text of the destination Object. 
        // We are really just moving the text, not the Card
        let holderText=holder.textContent;
        // Replace the destination Objects text with the sources text
        targetEl.textContent=sourceIdEl.textContent;
        // Replace the sources text with the original destinations
        sourceIdEl.textContent=holderText;
        holderText='';
}
    
  }
 
</script>
</body>
</html>
@endsection