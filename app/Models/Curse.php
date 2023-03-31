<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curse extends Model
{
    use HasFactory;

    protected $table = 'curses';
    protected $primaryKey = 'id';
    protected $fillable = ['curse', 'address', 'price'];
    protected $guarded = false;
}
