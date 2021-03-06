<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Calendar extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title', 
        'year',
        'academic_event',
        'notes',
    ];

    protected $cast = [
        'notes'          => 'array',
        'academic_event' => 'array'
    ];

    /**
     * Relations
     */
    public function school() {
        return $this->belongsTo(School::class, 'school_id', 'id');
    }
}
