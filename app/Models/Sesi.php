<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CekProses extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_sesi';
    public $incrementing = false;
}
