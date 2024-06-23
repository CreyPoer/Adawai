<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    use HasFactory;
    protected $table = "divisis";
    protected $guarded = ['id'];

    public function employees()
    {
        return $this->hasMany(Employee::class, 'divisi_id');
    }
}
