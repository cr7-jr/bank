<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class receipt extends Model
{
    protected $fillable = ['number', 'relase_date', 'course_number', 'name_payment', 'value', 'bill_type', 'bank_id'];
    public $timestamps = false;
}
