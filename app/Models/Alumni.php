<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Alumni extends Model
{
    use HasFactory;
    protected $table = "alumnis";
    protected $guarded = ['id'];
    //protected $fillable = ['alumni_id','kegiatan_stlh_lulus','nama_pt','nama_tmpt_kerja','jabatan','alamat_bekerja','saran_masukan'];

    public function tracerstudy(){
        return $this->belongsTo(Tracerstudy::class);
    }

    public function fakultas(){
        return $this->belongsTo(Fakultas::class);
    }

    public function prodi(){
        return $this->belongsTo(Prodi::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function pekerjaan(){
        return $this->belongsTo(Pekerjaan::class);
    }

    public function kuesioner(){
        return $this->belongsTo(Kuesioner::class);
    }

    public function scopeFilter($query){
        if(request('search')){
            return $query->where('nama', 'like', '%' . request('search') . '%');
        }
    }
}
