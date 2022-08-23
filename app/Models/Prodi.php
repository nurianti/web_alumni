<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Prodi extends Model
{
    use HasFactory;
    protected $table = "prodis";
    protected $guarded = ['id'];

    public function fakultas(){
        return $this->belongsTo(Fakultas::class);
    }

    public function alumni_tbl(){
        return $this->hasMany(Alumni::class);
    }
}
