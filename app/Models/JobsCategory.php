<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Jobs;
use App\Models\CategoryIcons;

class JobsCategory extends Model
{
    use HasFactory;

    protected $fillable = ['category'];

    public function jobs(){
        return $this->hasOne(Jobs::class);
    }

    public function icons(){
        return $this->hasMany(CategoryIcons::class);
    }
}
