<?php

namespace App\Models;

use App\Models\User;
use App\Models\Pengesah;
use App\Models\UnitPenerbit;
use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    protected $guarded = ['id'];

    public function unitPenerbit()
    {
        return $this->belongsTo(UnitPenerbit::class);
    }

    public function pengesah()
    {
        return $this->belongsTo(Pengesah::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // public function tembusan()
    // {
    //     return $this->hasMany(TembusanSurat::class);
    // }
}
