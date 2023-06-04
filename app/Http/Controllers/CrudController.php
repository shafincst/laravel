<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;

class CrudController extends Controller
{
   
    public function index()
    {
        $employees = DB::table('employees')->get();
        return view('crud.index',compact('employees'));
    }
    public function indexhome()
    {
        
        return view('crud.index');
    }


    public function store(Request $request)
    { 
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'message' => 'required',
        ]);


        DB::table('employees')->insert(
            [
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'message' => $request->message,
            ]
        );
        return redirect()->route('crud');
    }


   
}
