<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    /**
     * Stuff with Eloquent relations to get it to connect with
     * the course
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function grades()
    {
        return $this->hasMany(Grade::class);
    }

    /**
     * Determines if the course has been passed
     * @return void
     */
    public function assignCredits()
    {
        $now = now();
        if ($this->grade->best_grade > $this->lowest_passing_grade)
        {
            $this->passed_at = $now;
        }
    }
}
