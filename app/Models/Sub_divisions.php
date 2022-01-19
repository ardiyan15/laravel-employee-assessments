<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sub_divisions extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function divisions()
    {
        return $this->belongsTo(Divisions::class, 'division_id')->withTrashed();
    }

    public function employees()
    {
        return $this->hasMany(Employees::class, 'sub_division_id')->withTrashed();
    }

    public function managers()
    {
        return $this->hasMany(Managers::class, 'sub_division_id')->withTrashed();
    }

    public function supervisors()
    {
        return $this->hasMany(Supervisor::class, 'sub_division_id')->withTrashed();
    }
}
