<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    public function index()
    {
        return view('admin.class.class'); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        $data = new Classes();
        $data->name = $request->name;
        $data->save();
        // Logic to store class data
        return back()->with('success', 'Class created successfully');
    }

    public function read()
    {
        $data = Classes::all();
        return view('admin.class.class-list', compact('data'));
    }
    public function delete($id)
    {
        $data = Classes::find($id);
            $data->delete();
            return back()->with('success', 'Class deleted successfully');
        }
    public function edit($id){
        $data = Classes::find($id);
        return view('admin.class.class-edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required'
        ]);
        $data = Classes::find($request->id);
        $data->name = $request->name;
        $data->update();
        return redirect()->route('class.read')->with('success', 'Class updated successfully');
    }
}





