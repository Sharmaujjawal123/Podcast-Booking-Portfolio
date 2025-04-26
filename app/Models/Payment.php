<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    use HasFactory;

protected $fillable = [
    'user_id',
    'name',
    'email',
    'podcast_type',
    'hours',
    'amount',
    'screenshot',
    'status',
];

// Optional: Relationship to the User model
public function user()
{
    return $this->belongsTo(User::class);
}
}

