<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personData extends Model
{
    protected $table = 'dummyTable';
    protected $primaryKey = 'name_id';

    protected $fillable = [
        'name_id',
        'name',
        'age',
        'status',
    ];
}
