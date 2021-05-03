<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SavedJobs;
use App\Models\FollowedJobs;
use App\Models\JobLikes;
use Overtrue\LaravelLike\Traits\Likeable;

class Jobs extends Model
{
    use HasFactory;

    use Likeable;

    public function savedJobs()
    {
        return $this->hasOne(SavedJobs::class);
    }

    public function followedJobs()
    {
        return $this->hasOne(FollowedJobs::class);
    }

    public function jobLikes()
    {
        return $this->hasOne(JobLikes::class);
    }
}
