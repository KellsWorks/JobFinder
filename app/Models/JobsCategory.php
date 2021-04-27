<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Jobs;

class JobsCategory extends Model
{
    use HasFactory;

    protected $fillable = ['category'];

    public function jobs(){
        return $this->hasOne(Jobs::class);
    }
}
