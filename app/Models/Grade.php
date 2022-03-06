<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Eloquent connection stuff to connect the course and grade models?
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    /**
     * Business logic for determining if a new result needs to overwrite an old result
     * while also determining if it is a passing grade
     * @param $result
     * @return string
     */
    public function addResult($result)
    {
        if ($result >= $this->best_grade) {
            $this->best_grade = $result;
            $this->course->assignCredits();
        }
        $this->save();
        return 'Done!';
    }
}
