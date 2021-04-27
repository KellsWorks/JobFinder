<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SavedJobs;

class Jobs extends Model
{
    use HasFactory;

    public function savedJobs()
    {
        return $this->hasOne(SavedJobs::class);
    }
}
