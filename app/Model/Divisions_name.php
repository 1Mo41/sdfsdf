<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class divisions_name extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'division_id',
        'division_view_id'
    ];

    protected $table = 'divisions_name';
}
