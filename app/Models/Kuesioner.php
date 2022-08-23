<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kuesioner extends Model
{
    use HasFactory;
    protected $table = "kuesioners";
    protected $guarded = ['id'];

    public function alumni(){
        return $this->belongsTo(Alumni::class);
    }
}
