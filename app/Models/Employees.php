<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employees extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function sub_division()
    {
        return $this->belongsTo(Sub_divisions::class, 'sub_division_id')->withTrashed();
    }

    public function evaluations()
    {
        return $this->hasMany(Evaluations::class, 'employee_id')->withTrashed();
    }

    public function contract()
    {
        return $this->hasOne(Contracts::class, 'employee_id')->withTrashed();
    }
}
