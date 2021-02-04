<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Korisnik extends Model
{
    use HasFactory;

    protected $table="korisniks";

    public function clanci()
    {
        return $this->hasMany(Clanak::class);
    }
}
