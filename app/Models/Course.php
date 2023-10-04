<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'course_title',
        'user_id',
    ];
    public function user(): BelongsTo {
        return $this->belongsTo( User::class, 'User_id' );
    }

}
