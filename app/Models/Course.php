<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function grades()
    {
        return $this->hasMany(Grade::class);
    }

    public function assignCredits()
    {
        $now = now();
        if($this->grade->best_grade > $this->lowest_passing_grade){
            $this->passed_at = $now;
        }
    }
}
