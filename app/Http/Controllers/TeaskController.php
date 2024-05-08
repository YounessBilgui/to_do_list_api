<?php

namespace App\Http\Controllers;

use App\Models\teask;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class TeaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teask = teask::all();
        return response()->json($teask);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


       $teask = new teask();

       $teask->title = $request->title;
       $teask->description = $request->description;
       $teask->execution_date = date("Y-m-d", strtotime($request->execution_date));
       $teask->completed = (boolean) $request->completed;
       $teask->priority = $request->priority;
       $teask->tags = $request->tags;

       
       $save = $teask->save();
        if($save){
            return response()->json(['message'=>'data saved'],200);
        }else{
            return response()->json(['message'=>'Error 404'],404);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $teask = teask::find($id);
        return response()->json($teask);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        //
        $teask = teask::find($id);

        $update = $teask->update([
            
            "title" => $request->title,
            "description" => $request->description,
            "execution_date" => date("Y-m-d", strtotime($request->execution_date)),
            "completed" => (boolean) $request->completed,
            "priority" => $request->priority,
            "tags" => $request->tags
        ]);

        if ($update){
            return response()->json(["Message" =>"3amaliya naji7a"],200);
        }
        else{
            return response()->json(["Message" =>"khata2 fi nidam"],404);
    }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $teask = teask::find($id);

        $delete = $teask->delete();

        if ($delete){
            return response()->json(["Message" =>"3amaliya naji7a"],200);
        }
        else{
            return response()->json(["Message" =>"khata2 fi nidam"],404);
        }
    }
}
