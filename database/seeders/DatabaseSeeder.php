<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Added banks here
        \App\Models\Bank::insert([
            ['name' => 'php'],
            ['name' => 'ajax'],
            ['name' => 'jquery'],
            ['name' => 'html']
        ]);

        // Questions here
        \App\Models\Questions::insert([
            [
                'bank_id' => '1',
                'question' => 'PHP stands for -',
            ],
            [
                'bank_id' => '1',
                'question' => 'Who is known as the father of PHP?',
            ],
            [
                'bank_id' => '1',
                'question' => 'Variable name in PHP starts with -',
            ],
            [
                'bank_id' => '1',
                'question' => 'Which of the following is the default file extension of PHP?',
            ],
            [
                'bank_id' => '1',
                'question' => 'Which of the following is not a variable scope in PHP?',
            ]
            // Bank 2
            ,
            [
                'bank_id' => '2',
                'question' => 'What is AJAX?',
            ],
            [
                'bank_id' => '2',
                'question' => 'What are the advantages of AJAX?',
            ],
            [
                'bank_id' => '2',
                'question' => 'What are the disadvantages of AJAX?',
            ],
            [
                'bank_id' => '2',
                'question' => 'What are the real web applications of AJAX currently running in the market?',
            ],
            [
                'bank_id' => '2',
                'question' => 'What are the security issues with AJAX?',
            ]
            ,
            [
                'bank_id' => '3',
                'question' => 'Who developed jQuery, and in which year it was first released?',
            ],
            [
                'bank_id' => '3',
                'question' => 'jQuery is a -',
            ],
            [
                'bank_id' => '3',
                'question' => 'Which of the following sign is used as a shortcut for jQuery?',
            ],
            [
                'bank_id' => '3',
                'question' => '$(this) in jQuery is used when -',
            ],
            [
                'bank_id' => '3',
                'question' => 'Which of the following jQuery method is used to hide the selected elements?',
            ],
            [
                'bank_id' => '3',
                'question' => '',
            ],
            [
                'bank_id' => '4',
                'question' => 'HTML stands for -',
            ],
            [
                'bank_id' => '4',
                'question' => 'The correct sequence of HTML tags for starting a webpage is -',
            ],
            [
                'bank_id' => '4',
                'question' => 'Which of the following element is responsible for making the text bold in HTML?',
            ],
            [
                'bank_id' => '4',
                'question' => 'Which of the following tag is used for inserting the largest heading in HTML?',
            ],
            [
                'bank_id' => '4',
                'question' => 'Which of the following tag is used to insert a line-break in HTML?',
            ]
        ]);

        // Answers of questions
        \App\Models\Answers::insert([
            [
                'question_id' => '1',
                'answer' => 'Hypertext Preprocessor',
                'right_ans' => 1
            ],
            [
                'question_id' => '1',
                'answer' => 'Pretext Hypertext Preprocessor',
                'right_ans' => 0
            ],
            [
                'question_id' => '1',
                'answer' => 'Personal Home Processor',
                'right_ans' => 0
            ],
            [
                'question_id' => '1',
                'answer' => 'None of the above',
                'right_ans' => 0
            ],

            [
                'question_id' => '2',
                'answer' => 'Drek Kolkevi',
                'right_ans' => 0
            ],
            [
                'question_id' => '2',
                'answer' => 'List Barely',
                'right_ans' => 0
            ],
            [
                'question_id' => '2',
                'answer' => 'Rasmus Lerdrof',
                'right_ans' => 1
            ],
            [
                'question_id' => '2',
                'answer' => 'None of the above',
                'right_ans' => 0
            ],
            [
                'question_id' => '3',
                'answer' => '! (Exclamation)',
                'right_ans' => 0
            ],
            
            [
                'question_id' => '3',
                'answer' => '$ (Dollar)',
                'right_ans' => 1
            ],
            
            [
                'question_id' => '3',
                'answer' => '& (Ampersand)',
                'right_ans' => 0
            ],
            
            [
                'question_id' => '3',
                'answer' => '# (Hash)',
                'right_ans' => 0
            ],
            
            [
                'question_id' => '4',
                'answer' => '.php',
                'right_ans' => 1
            ],
            [
                'question_id' => '4',
                'answer' => '.hphp',
                'right_ans' => 0
            ],
            [
                'question_id' => '4',
                'answer' => '.xml',
                'right_ans' => 0
            ],
            [
                'question_id' => '4',
                'answer' => '.html',
                'right_ans' => 0
            ],
            [
                'question_id' => '5',
                'answer' => 'Extern',
                'right_ans' => 1
            ],
            [
                'question_id' => '5',
                'answer' => 'Local',
                'right_ans' => 0
            ],
            [
                'question_id' => '5',
                'answer' => 'Static',
                'right_ans' => 0
            ],
            [
                'question_id' => '5',
                'answer' => 'Global',
                'right_ans' => 0
            ],
            [
                'question_id' => '6',
                'answer' => 'is a program',
                'right_ans' => 1
            ],
            [
                'question_id' => '6',
                'answer' => 'is a country name',
                'right_ans' => 0
            ],
            [
                'question_id' => '6',
                'answer' => 'is a football club name',
                'right_ans' => 0
            ],
            [
                'question_id' => '6',
                'answer' => 'All of these',
                'right_ans' => 0
            ],
            [
                'question_id' => '7',
                'answer' => 'Live data binding',
                'right_ans' => 0
            ],
            [
                'question_id' => '7',
                'answer' => 'Declarative instantiation of client components',
                'right_ans' => 0
            ],
            [
                'question_id' => '7',
                'answer' => 'Client-side template rendering',
                'right_ans' => 0
            ],
            [
                'question_id' => '7',
                'answer' => 'All of the above',
                'right_ans' => 1
            ],
            [
                'question_id' => '8',
                'answer' => 'Bandwidth utilization',
                'right_ans' => 0
            ],
            
            [
                'question_id' => '8',
                'answer' => 'More interactive',
                'right_ans' => 0
            ],
            
            [
                'question_id' => '8',
                'answer' => 'Speeder retrieval of data',
                'right_ans' => 0
            ],
            [
                'question_id' => '8',
                'answer' => 'All of these',
                'right_ans' => 1
            ],
            [
                'question_id' => '9',
                'answer' => 'Twitter',
                'right_ans' => 1
            ],
            [
                'question_id' => '9',
                'answer' => 'BNN',
                'right_ans' => 0
            ],
            [
                'question_id' => '9',
                'answer' => 'AlJazeera',
                'right_ans' => 0
            ],
            [
                'question_id' => '9',
                'answer' => 'All of above',
                'right_ans' => 0
            ],
            [
                'question_id' => '10',
                'answer' => 'AJAX source code is readable',
                'right_ans' => 1
            ],
            [
                'question_id' => '10',
                'answer' => 'It shows Database schema',
                'right_ans' => 0
            ],
            [
                'question_id' => '10',
                'answer' => 'It exposes backend data',
                'right_ans' => 0
            ],
            [
                'question_id' => '10',
                'answer' => 'None of above',
                'right_ans' => 0
            ],
            [
                'question_id' => '11',
                'answer' => 'John Richard in 2001',
                'right_ans' => 0
            ],[
                'question_id' => '11',
                'answer' => 'Mark Bensman in 2004',
                'right_ans' => 0
            ],[
                'question_id' => '11',
                'answer' => 'John Resig in 2006',
                'right_ans' => 1
            ],[
                'question_id' => '11',
                'answer' => 'None of the above',
                'right_ans' => 0
            ],[
                'question_id' => '12',
                'answer' => 'JavaScript method',
                'right_ans' => 0
            ],[
                'question_id' => '12',
                'answer' => 'JavaScript library',
                'right_ans' => 1
            ],[
                'question_id' => '12',
                'answer' => 'JSON library',
                'right_ans' => 0
            ],[
                'question_id' => '12',
                'answer' => 'PHP method',
                'right_ans' => 0
            ],[
                'question_id' => '13',
                'answer' => 'the % sign',
                'right_ans' => 0
            ],[
                'question_id' => '13',
                'answer' => 'the & sign',
                'right_ans' => 0
            ],[
                'question_id' => '13',
                'answer' => 'the $ sign',
                'right_ans' => 1
            ],[
                'question_id' => '13',
                'answer' => 'the @ sign',
                'right_ans' => 0
            ],[
                'question_id' => '14',
                'answer' => 'an HTML element references the entire document',
                'right_ans' => 0
            ],[
                'question_id' => '14',
                'answer' => 'an HTML element references its own action',
                'right_ans' => 1
            ],[
                'question_id' => '14',
                'answer' => 'an HTML element references the action of its parent element',
                'right_ans' => 0
            ],[
                'question_id' => '14',
                'answer' => 'All of the above',
                'right_ans' => 0
            ],[
                'question_id' => '15',
                'answer' => 'The hidden() method',
                'right_ans' => 0
            ],[
                'question_id' => '15',
                'answer' => 'The hide() method',
                'right_ans' => 1
            ],[
                'question_id' => '15',
                'answer' => 'The visible(false) method',
                'right_ans' => 0
            ],[
                'question_id' => '15',
                'answer' => 'The display(none) method',
                'right_ans' => 0
            ],

            [
                'question_id' => '16',
                'answer' => 'HighText Machine Language',
                'right_ans' => 0
            ],
            [
                'question_id' => '16',
                'answer' => 'HyperText and links Markup Language',
                'right_ans' => 0
            ],[
                'question_id' => '16',
                'answer' => 'HyperText Markup Language',
                'right_ans' => 1
            ],[
                'question_id' => '16',
                'answer' => 'None of these',
                'right_ans' => 0
            ],[
                'question_id' => '17',
                'answer' => 'Head, Title, HTML, body',
                'right_ans' => 0
            ],[
                'question_id' => '17',
                'answer' => 'HTML, Body, Title, Head',
                'right_ans' => 0
            ],[
                'question_id' => '17',
                'answer' => 'HTML, Head, Title, Body',
                'right_ans' => 1
            ],[
                'question_id' => '17',
                'answer' => 'None',
                'right_ans' => 0
            ],[
                'question_id' => '18',
                'answer' => '<pre>',
                'right_ans' => 0
            ],[
                'question_id' => '18',
                'answer' => '<a>',
                'right_ans' => 0
            ],[
                'question_id' => '18',
                'answer' => '<b>',
                'right_ans' => 1
            ],[
                'question_id' => '18',
                'answer' => '<br>',
                'right_ans' => 0
            ],[
                'question_id' => '19',
                'answer' => '<h3>',
                'right_ans' => 0
            ],[
                'question_id' => '19',
                'answer' => '<h1>',
                'right_ans' => 1
            ],[
                'question_id' => '19',
                'answer' => '<h5>',
                'right_ans' => 0
            ],[
                'question_id' => '19',
                'answer' => '<h6>',
                'right_ans' => 0
            ],[
                'question_id' => '19',
                'answer' => '',
                'right_ans' => 0
            ],[
                'question_id' => '20',
                'answer' => '<br>',
                'right_ans' => 1
            ],[
                'question_id' => '20',
                'answer' => '<a>',
                'right_ans' => 0
            ],[
                'question_id' => '20',
                'answer' => '<pre>',
                'right_ans' => 0
            ],[
                'question_id' => '20',
                'answer' => '<b>',
                'right_ans' => 0
            ],
        ]);
        
    }
}
