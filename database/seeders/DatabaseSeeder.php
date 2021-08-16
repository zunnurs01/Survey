<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('answers')->insert([
            ['answer' => '<18'],
            ['answer' => '18 to 35'],
            ['answer' => '35 to 60'],
            ['answer' => 'Above 60'],
            ['answer' => 'Secondary school and below'],
            ['answer' => 'Diploma'],
            ['answer' => 'Degree'],
            ['answer' => 'Post graduate degree'],
            ['answer' => 'Less than RM 1000'],
            ['answer' => 'Between RM1000 to RM3000'],
            ['answer' => 'Between RM3000 to RM5000'],
            ['answer' => 'More than RM5000'],
            ['answer' => 'Male'],
            ['answer' => 'Female'],
        ]);

        DB::table('questions')->insert([
            ['question' => 'What is your age group?'],
            ['question' => 'What is your education level?'],
            ['question' => 'What is your monthly income?'],
            ['question' => 'Your gender :'],
        ]);
        DB::table('questions_answers')->insert([
            ['question_id' => '1', 'answer_id' => '1'],
            ['question_id' => '1', 'answer_id' => '2'],
            ['question_id' => '1', 'answer_id' => '3'],
            ['question_id' => '1', 'answer_id' => '4'],
            ['question_id' => '2', 'answer_id' => '5'],
            ['question_id' => '2', 'answer_id' => '6'],
            ['question_id' => '2', 'answer_id' => '7'],
            ['question_id' => '2', 'answer_id' => '8'],
            ['question_id' => '3', 'answer_id' => '9'],
            ['question_id' => '3', 'answer_id' => '10'],
            ['question_id' => '3', 'answer_id' => '11'],
            ['question_id' => '3', 'answer_id' => '12'],
            ['question_id' => '4', 'answer_id' => '13'],
            ['question_id' => '4', 'answer_id' => '14'],
        ]);
    }
}
