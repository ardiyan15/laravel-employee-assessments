<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Divisions extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function sub_divisions()
    {
        return $this->hasMany(Sub_divisions::class, 'division_id')->withTrashed();
    }
}
