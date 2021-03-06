<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Evaluations extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id')->withTrashed();;
    }

    public function employees()
    {
        return $this->belongsTo(Employees::class, 'employee_id')->withTrashed();;
    }
}
