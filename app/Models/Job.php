<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_title',
        'job_location',
        'job_link',
        'company_name',
        'company_logo',
        'highlighted',
        'pinned',
        'user_id'
    ];

    public function tags() :BelongsToMany
    {
        return $this->belongsToMany(Tag::class); 
    }

    public function user() :BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
