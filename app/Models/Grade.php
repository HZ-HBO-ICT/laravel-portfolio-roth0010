<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    protected $guarded = [];

    function addResult($result)
    {
        $now = now();
        if($result >= $this->best_grade)
        {
            $this->best_grade = $result;
            if($this->best_grade > $this->lowest_passing_grade){
                $this->passed_at = $now;
            }
        }
        $this->save();
        return 'Done!';
    }
}
