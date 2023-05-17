<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prodiModel extends Model
{
    use HasFactory;
    protected $table = 'tb_prodi';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
}
