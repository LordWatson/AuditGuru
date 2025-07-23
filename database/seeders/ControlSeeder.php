<?php

namespace Database\Seeders;

use App\Actions\Control\CreateControlAction;
use App\Models\ControlQuestion;
use App\Models\Framework;
use Illuminate\Database\Seeder;

class ControlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(CreateControlAction $createControlAction): void
    {
        $controls = json_decode(file_get_contents(database_path('data/controls.json')), true);

        foreach($controls as $control){
            // get the questions array
            $questions = $control['questions'];

            // remove it from the data array passed to create the control
            unset($control['questions']);

            // create the control
            $createdControl = $createControlAction->execute($control);

            // now put the questions array into a new array we can use to bulk create the questions
            $questionsData = array_map(fn($question) => [
                'question' => $question,
                'control_id' => $createdControl['control']->id,
                'created_at' => now(),
                'updated_at' => now(),
            ], $questions);

            ControlQuestion::insert($questionsData);
        }
    }
}
