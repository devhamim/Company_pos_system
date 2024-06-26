<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class customers extends Authenticatable
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $guard = 'customerauth';

    function rel_to_customer() {
        return $this->belongsTo(User::class, 'added_by');
    }
}
