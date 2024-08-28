<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $table = 'users';

    protected $primary_key = 'id';

    protected $fillable = [
        'ip',
        'name',
        'created_at',
        'updated_at',
    ];

    public $timestamps = false;
}
