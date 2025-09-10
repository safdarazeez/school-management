<?php

namespace App\Http\Controllers;

use App\Models\AccademicYear;
use Illuminate\Http\Request;

class AccademicYearController extends Controller
{
    public function index()
    {
        return view('admin.accademic-year'); 
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required'
        ]);
        $data = new AccademicYear();
        $data->name = $request->name;
        $data->save();
        return back()->with('success', 'Academic Year created successfully');
    }
    public function read(){
        $data = AccademicYear::all();
       
        return view('admin.academic-year-list', compact('data'));
    }
    public function delete($id){
        $data = AccademicYear::find($id);
            $data->delete();
            return back()->with('success', 'Academic Year deleted successfully');
        
    }
    public function edit($id){
        $data = AccademicYear::find($id);
        return view('admin.academic-year-edit', compact('data'));
}
public function update(Request $request, $id){
        $request->validate([
            'name' => 'required'
        ]);
        $data = AccademicYear::find($id);
        $data->name = $request->name;
        $data->save();
        return redirect()->route('read')->with('success', 'Academic Year updated successfully');
}
}
