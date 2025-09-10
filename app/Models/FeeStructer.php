<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FeeStructer extends Model
{
    protected $fillable = [
        'class_id',
        'fee_head_id',
        'academic_year_id',
        'april',
        'may',
        'june',
        'july',
        'august',
        'september',
        'october',  
        'november',
        'december',
        'january',
        'february',
        'march',


    ];
    public function class()
    {
        return $this->belongsTo(Classes::class, 'class_id');
    }
    public function feeHead()
    {
        return $this->belongsTo(FeeHead::class, 'fee_head_id');
    }
    public function academicYear()
    {
        return $this->belongsTo(AccademicYear::class, 'academic_year_id');                  

    }
    
}
