@extends('admin.layout')
@section('content')

    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Fee Structure</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Fee Structure</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-12">
                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Fee Structure</h3>
                            </div>
                            <form action="{{ route('fee-structure.store') }}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="class_id">Select Class</label>
                                            <select name="class_id" class="form-control" id="class_id">
                                                <option value="">Select Class</option>
                                                @foreach($classes as $class)
                                                    <option value="{{ $class->id }}">{{ $class->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('class_id')
                                            <div class=" text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                
                                         <div class="form-group col-md-4">
                                            <label for="fee_head_id">Select feeheads</label>
                                            <select name="fee_head_id" class="form-control" >
                                                <option value="">Select Feeheads</option>
                                                @foreach($fee_heads as $fee_head)
                                                    <option value="{{ $fee_head->id }}">{{ $fee_head->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('fee_head_id')
                                            <p class=" text-danger">{{ $message }}</p>   
                                            @enderror
                                        </div>
                                                <div class="form-group col-md-4">
                                            <label for="academic_year_id">Select Academic-year</label>
                                            <select name="academic_year_id" class="form-control">
                                                <option value="">Select Academic-year</option>
                                                @foreach($academic_years as $academic_year)
                                                    <option value="{{ $academic_year->id }}">{{ $academic_year->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('academic_year_id')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror


                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputEmail1">april Fee </label>
                                            <input type="text" name="april" class="form-control" id="exampleInputEmail1"
                                                placeholder="Enter april fee">
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="exampleInputEmail1">May Fee</label>
                                            <input type="text" name="may" class="form-control" id="exampleInputEmail1"
                                                placeholder="Enter may fee">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputEmail1">june Fee</label>
                                            <input type="text" name="june" class="form-control" id="exampleInputEmail1"
                                                placeholder="Enter june fee">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputEmail1">july Fee</label>
                                            <input type="text" name="july" class="form-control" id="exampleInputEmail1"
                                                placeholder="Enter july fee">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputEmail1">August Fee</label>
                                            <input type="text" name="august" class="form-control" id="exampleInputEmail1"
                                                placeholder="Enter august fee">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputEmail1">September Fee</label>
                                            <input type="text" name="september" class="form-control" id="exampleInputEmail1"
                                                placeholder="Enter september fee">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputEmail1">October Fee</label>
                                            <input type="text" name="october" class="form-control" id="exampleInputEmail1"
                                                placeholder="Enter october fee">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputEmail1">November Fee</label>
                                            <input type="text" name="november" class="form-control" id="exampleInputEmail1"
                                                placeholder="Enter november fee">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputEmail1">December Fee</label>
                                            <input type="text" name="december" class="form-control" id="exampleInputEmail1"
                                                placeholder="Enter december fee">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputEmail1">Jan Fee</label>
                                            <input type="text" name="jan" class="form-control" id="exampleInputEmail1"
                                                placeholder="Enter jan fee">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputEmail1">February Fee</label>
                                            <input type="text" name="february" class="form-control" id="exampleInputEmail1"
                                                placeholder="Enter february fee">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputEmail1">march Fee</label>
                                            <input type="text" name="march" class="form-control" id="exampleInputEmail1"
                                                placeholder="Enter march fee">
                                        </div>
                                    </div>

                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Add Fee Structure</button>
                                </div>
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection