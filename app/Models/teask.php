<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teask extends Model
{
    use HasFactory;

    protected $fillable =[
        'title',
        'description',
        'execution_date',
        'completed',
        'priority',
        'tags'

    ];

}
