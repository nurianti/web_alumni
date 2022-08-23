<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Tracerstudy extends Model
{
    use HasFactory;
    protected $table = "tracerstudies";
    protected $guarded = ['id'];
    //protected $fillable = ['alumni_id','kegiatan_stlh_lulus','nama_pt','nama_tmpt_kerja','jabatan','alamat_bekerja','saran_masukan'];

    public function alumni(){
        return $this->belongsTo(Alumni::class);
    }
}
