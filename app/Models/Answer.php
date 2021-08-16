<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Answer extends Model
{
    use HasFactory;

    public function question(): BelongsToMany
    {
        return $this->belongsToMany(Question::class, 'questions_answers', 'answer_id', 'question_id');

    }
}
