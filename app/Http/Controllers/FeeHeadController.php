<?php

namespace App\Http\Controllers;

use App\Models\FeeHead;
use Illuminate\Http\Request;

class FeeHeadController extends Controller
{
   public function index()
   {
       return view('admin.Feehand.fee'); 
   }
   public function store(Request $request){
    // dd($request->all());
    $request->validate([
        'name' => 'required'
    ]);
    $data = new FeeHead();
    $data->name = $request->name;
    $data->save();
    return back()->with('success', 'FeeHead created successfully');


   }
   public function read(){
    $data = FeeHead::all();
    return view('admin.Feehand.fee-list', compact('data'));
   }
   public function delete($id){
    $data = FeeHead::find($id);
    $data->delete();
    return back()->with('success', 'FeeHead deleted successfully');
   }
   public function edit($id){
    $data = FeeHead::find($id);
    return view('admin.Feehand.fee-edit', compact('data'));
   }
    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required'
        ]);
        $data = FeeHead::find($id);
        $data->name = $request->name;
        $data->save();
        return redirect()->route('feehead.read')->with('success', 'FeeHead updated successfully');
    }
}
