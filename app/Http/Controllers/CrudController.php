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
        return view('portfilio.crud.index',compact('employees'));
    }
    public function indexhome()
    {
        
        return view('crud');
    }
    public function create()
    {
        return view('portfilio.crud.create');
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

    public function edit($id)
    {
        $employee = DB::table('employees')->where('id',$id)->first();
        return view('portfilio.crud.edit',compact('employee'));
        
    }
    public function update (Request $request)
    { 
    //   dd( $request->all());
        DB::table('employees')->where('id',$request->employee_id)->update(
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


    public function delete($id)
    {
        DB::table('employees')->where('id', $id)->delete();
        return redirect()->route('crud');

    }
}
