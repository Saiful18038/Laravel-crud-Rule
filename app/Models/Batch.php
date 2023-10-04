<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model {
    use HasFactory;
    protected $fillable = [
        'batchNo',
        'teacher_id',
    ];

    public function teacher(): BelongsTo {
        return $this->belongsTo( Teacher::class );
    }
}

