<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class DataDiri extends Model {

    protected $table    = "data-diri";

    protected $fillable = [
        'nama_lengkap',
        'tempat_lahir',
        'tanggal_lahir',
        'email',
        'phone',
        'pekerjaan',
        'gaji'
    ];
}

?>