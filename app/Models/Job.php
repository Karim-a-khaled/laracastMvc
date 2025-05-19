<?php

namespace App\Models;

class Job
{
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Frontend Engineer',
                'salary' => '$115,000',
                'description' => 'Build and maintain UI For Web Application.'
            ],
            [
                'id' => 2,
                'title' => 'UI/UX Designer',
                'salary' => '$110,000',
                'description' => 'Design intuitive user interfaces.'
            ],
            [
                'id' => 3,
                'title' => 'Backend Engineer',
                'salary' => '$125,000',
                'description' => 'Develop APIs and server-side logic.'
            ],
        ];
    }
}
