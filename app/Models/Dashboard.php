<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['truckNumber','driverName','driverPhone','consigner','loadDate','cityFrom','cityTo'];
}
