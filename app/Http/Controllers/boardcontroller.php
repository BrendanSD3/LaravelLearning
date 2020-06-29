<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Boards;
use Illuminate\Support\Facades\Log;
class boardcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Todos = DB::table('boards')->select('id','title','desc','status')->where('status', 'ToDo')->get();
        $inprogress = DB::table('boards')->select('id','title','desc','status')->where('status', 'inprogress')->get();
        $dones = DB::table('boards')->select('id','title','desc','status')->where('status', 'Done')->get();
        return view('boards.todayboard', compact('Todos','inprogress','dones'));
                     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('boards.create');
    }
    public function success()
    {
        return view('boards.success');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    function save(Request $request)
    {
        
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'status'=>'required',
        ]);
  
        Boards::create($request->all());
          
        return redirect()->route('boards.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Board $board)
    {
        return view('boards.edit',compact('board'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Board $board)
    {
        $request->validate([
            'title' => 'required',
            'status'=>'required',
            'description' => 'required',
        ]);
  
        $board->update($request->all());
  
        return redirect()->route('blogs.index')
                        ->with('success','Blog updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
