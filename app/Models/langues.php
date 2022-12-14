<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class langues extends Model
{
    use HasFactory;
    public $table = "langues";
    public $primaryKey = "id";
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;
    public const PRIMARY_KEY = 'id';
}
