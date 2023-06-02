<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;

    protected $table = "employes";

    protected $fillable = ["name", "email", "phone_no", "gender"];

    public $timestamps = false;

}
