<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobTags extends Model
{
    use HasFactory;

    protected $fillable = ['tag', 'jobs_id'];
}
