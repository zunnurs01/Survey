<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;

    public function answers()
    {
        return $this->belongsToMany(Answer::class, 'results', 'participant_id', 'answer_id');
    }

    public function questions()
    {
        return $this->belongsToMany(Question::class, 'results', 'participant_id', 'question_id');
    }
}
