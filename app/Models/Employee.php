<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = "employees";
    protected $guarded = ['id'];
    // public static $division = ['Produksi', 'Keuangan', 'SDM','Marketing','IT','Kreatif'];
    public static $maritalStatus = ['Belum Menikah', 'Menikah','Janda','Duda'];

    public function divisi()
    {
        return $this->belongsTo(Divisi::class, 'divisi_id');
    }

}
