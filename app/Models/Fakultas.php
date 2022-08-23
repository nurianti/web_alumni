<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Fakultas extends Model
{
    use HasFactory;
    protected $table = "fakultas";
    protected $guarded = ['id'];

    public function prodi(){
        return $this->hasMany(Prodi::class);
    }

    public function alumni_tbl(){
        return $this->hasMany(Alumni_tbl::class);
    }
}
