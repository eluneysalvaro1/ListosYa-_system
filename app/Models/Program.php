<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
     /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'start_date',
        'finish_date',
        'start_time',
        'finish_time',
        'volunteer_limit',
        'place_event',
        'program_image',
        'program_points',
        'state',
        'duo',
        'turn',
        'category_id'
    ];
   
}
