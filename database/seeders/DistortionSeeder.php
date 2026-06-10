<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistortionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $distortions = [
            [
                'name' => 'Overgeneralisation',
                'label' => 'Drawing big conclusions from one event',
                'description' => 'Taking a single negative event and assuming it reflects a never-ending pattern of defeat.',
                'example' => 'I failed that interview. I always mess up interviews.',
            ],
            [
                'name' => 'Mental Filter',
                'label' => 'Fixating on one negative detail',
                'description' => 'Picking out a single negative detail and dwelling on it exclusively, so your whole view of a situation becomes darkened.',
                'example' => 'One person gave me critical feedback. The whole presentation must have been terrible.',
            ],
            [
                'name' => 'Discounting the Positive',
                'label' => 'Brushing off good things',
                'description' => 'Rejecting positive experiences by insisting they don\'t count for some reason or another.',
                'example' => 'They only said my work was good to be nice. It doesn\'t really mean anything.',
            ],
            [
                'name' => 'Jumping to Conclusions',
                'label' => 'Assuming the worst without evidence',
                'description' => 'Making a negative interpretation even though there are no definite facts to support your conclusion.',
                'example' => 'They haven\'t replied to my message. They must be annoyed with me.',
            ],
            [
                'name' => 'Mind Reading',
                'label' => 'Assuming you know what others think',
                'description' => 'Believing you know what someone else is thinking, usually assuming it is something negative about you.',
                'example' => 'I could tell from their face that they thought I was boring.',
            ],
            [
                'name' => 'Predictive Thinking',
                'label' => 'Predicting things will go wrong',
                'description' => 'Anticipating that things will turn out badly and treating that prediction as an established fact.',
                'example' => 'There\'s no point applying. I won\'t get the job anyway.',
            ],
            [
                'name' => 'Magnification',
                'label' => 'Blowing things out of proportion',
                'description' => 'Exaggerating the importance of your problems, mistakes, or shortcomings.',
                'example' => 'I made a small error in that report. My manager is going to think I\'m completely incompetent.',
            ],
            [
                'name' => 'Emotional Reasoning',
                'label' => 'Treating feelings as facts',
                'description' => 'Assuming that your negative emotions reflect the way things really are.',
                'example' => 'I feel stupid so I must actually be stupid.',
            ],
            [
                'name' => 'Should and Must Statements',
                'label' => 'Living by rigid rules',
                'description' => 'Holding yourself or others to strict rules about how things must be, and feeling guilty or angry when those rules are broken.',
                'example' => 'I should always know the answer. I must never show weakness.',
            ],
            [
                'name' => 'Labelling',
                'label' => 'Defining yourself by your mistakes',
                'description' => 'Attaching a negative global label to yourself based on a single event or mistake.',
                'example' => 'I got that wrong. I\'m a failure.',
            ],
            [
                'name' => 'Personalisation and Blame',
                'label' => 'Taking too much or too little responsibility',
                'description' => 'Holding yourself personally responsible for events that weren\'t entirely your fault, or blaming others entirely when you played a part.',
                'example' => 'My friend is in a bad mood. It must be something I did.',
            ],
            [
                'name' => 'Catastrophising',
                'label' => 'Assuming the worst will happen',
                'description' => 'Expecting disaster to strike and exaggerating how bad the consequences will be.',
                'example' => 'I made one mistake. I\'m going to get fired and never find another job.',
            ],
            [
                'name' => 'Black and White Thinking',
                'label' => 'Seeing things as all good or all bad',
                'description' => 'Seeing things in absolutes with no middle ground. If something isn\'t perfect it\'s a total failure.',
                'example' => 'I didn\'t finish everything today. The whole day was completely wasted.',
            ],
        ];

        DB::table('distortions')->insert($distortions);
    }
}
