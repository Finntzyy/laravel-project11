<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Pelanggan extends Model
{
    use HasFactory;
    protected $table = "tb_pelanggan";
    protected $primaryKey = "pel_id";
    protected $fillable = ['pel_id_gol', 'pel_no', 'pel_nama', 'pel_alamat', 'pel_hp', 'pel_ktp', 'pel_seri', 'pel_meteran', 'pel_aktif', 'pel_id_user'];

    public function golongan()
    {
        return $this->belongsTo(Golongan::class, 'pel_id_gol', 'gol_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'pel_id_user', 'id');
    }
    protected $guarded = [];
}



