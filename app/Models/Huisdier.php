<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Huisdier extends Model
{
    public $timestamps = false;
    protected $table="huisdier";
    use HasFactory;
}
