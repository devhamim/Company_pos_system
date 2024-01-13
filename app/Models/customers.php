<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customers extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    function rel_to_customer() {
        return $this->belongsTo(User::class, 'added_by');
    }
}
