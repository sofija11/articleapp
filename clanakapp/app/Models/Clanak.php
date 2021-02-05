<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Clanak extends Model
{
    use HasFactory;

    protected $table="clanaks";

    public $timestamps = false; 

    public function korisnik()
    {
        return $this->belongsTo(Korisnik::class);

    }


}
