<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\insert;

class insertController extends Controller
{
    function Insert(Request $request){
        $table = new insert();
        $table->Name=$request->name;
        $table->Email=$request->email;
        $table->Number=$request->number;
        $table->save();
        if($table){
          return  redirect('userInsert');
        }else{
            return "Failed";
        }
    }

    function Delete(Request $request){
      $delete = insert::find($request->id);
      $delete->delete();
        
      if($delete){
        return redirect('readData');
      }else{
        return "delete nhi howa he";
      }



    }

    function Update(Request $request){
        $update = insert::find($request->id);
        $update->first();

        return view('LaravelDatabase.update', ["update" => $update]);
    }

    function DataUpdate(Request $request){
         $update = insert::find($request->id);

         $update->Name = $request->name;
         $update->Email = $request->email;
         $update->Number = $request->number;
         $update->save();
         return redirect('readData');

    }

    function search(Request $request){
        $search = insert::where("Name", 'like', "%$request->search%")->get();

        return view('LaravelDatabase.read', ["data" => $search], ["search" => $request->search]);

    }

    function deletes(Request $request){
        $delete = insert::destroy($request->checkbox);

        return redirect('readData');
    }
}
