<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perumahan extends Model
{
    use HasFactory;

    protected $table = 'perumahan';
    protected $primaryKey = 'id_perumahan';
    protected $fillable = ['luas_perumahan','harga_perumahan','created_at','updated_at'];
}

