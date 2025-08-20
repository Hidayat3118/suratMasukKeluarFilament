<?php

namespace App\Models;

use App\Models\Surat;
use Illuminate\Database\Eloquent\Model;

class Pengesah extends Model
{
    protected $guarded = ['id'];

    public function surat()
    {
        return $this->hasMany(Surat::class);
    }
}
