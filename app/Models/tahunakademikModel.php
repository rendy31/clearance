<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tahunakademikModel extends Model
{
    use HasFactory;
    protected $table = 'tb_tahunakademik';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
}
