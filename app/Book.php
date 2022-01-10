<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $table = 'books';

    protected $fillable = [
        'name', 'qty', 'category', 'ticket_id', 'email', 'mobile', 'time_slot', 'book_date', 'total','payment'
    ];
}
