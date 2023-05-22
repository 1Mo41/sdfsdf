<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class divisions_view extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'division_view_id',
        'name'
    ];

    protected $table = 'divisions_view';
}
