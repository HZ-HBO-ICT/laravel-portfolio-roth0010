<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function addResult($result)
    {
        if($result >= $this->best_grade)
        {
            $this->best_grade = $result;
            $this->course->assignCredits();
        }
        $this->save();
        return 'Done!';
    }
}
