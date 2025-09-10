<?php

namespace App\Http\Controllers;

use App\Models\AccademicYear;
use App\Models\Classes;
use App\Models\FeeHead;
use App\Models\FeeStructer;
use Illuminate\Http\Request;

class FeeStructerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data ['classes'] = Classes::all();
        $data['fee_heads'] = FeeHead::all();
        $data['academic_years'] = AccademicYear::all();

        return view('admin.fee-structure.fee-structur',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'class_id' => 'required',
            'fee_head_id' => 'required',
            'academic_year_id' => 'required',

        ]);
        // dd($request->all());
        FeeStructer::create($request->all());
        return redirect()->back()->with('success', 'Fee Structure Added successfully');
        
    }
    public function read()
    {
        $data['feestructur'] = FeeStructer::with(['class', 'feeHead', 'academicYear'])->get();
        // dd($data);
        return view('admin.fee-structure.fee-structer-list', $data);
    }

    /**
     * Display the specified resource.
     */
    public function show(FeeStructer $feeStructer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FeeStructer $feeStructer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FeeStructer $feeStructer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FeeStructer $feeStructer)
    {
        //
    }
}
