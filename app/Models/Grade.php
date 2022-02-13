<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
//    use HasFactory;
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
    }

    function setLPG(){
        // TODO This should set itself on its own in the migrate file, but it's not working. No clue why.
        $this->lowest_passing_grade = 5.5;
    }
}
