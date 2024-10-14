<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'start_date',
        'end_date',
        'description',
        'image',
        'category_id',
    ];

    /**
     * Get the category that owns the event.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}