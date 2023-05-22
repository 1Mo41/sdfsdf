<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Room_view extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'name',
        'room_view_Id'
    ];

    protected $table = 'room_view';
}
