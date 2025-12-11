<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Model;

#[ObservedBy([])]
class ContactSubmission extends Model
{
    protected $guarded = [];

    protected $casts = [
        'read_at' => 'datetime',
    ];
}
