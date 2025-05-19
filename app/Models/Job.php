<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job
{
    public static function all(): array
    {
        return [
            ['id' => 1, 'title' => 'Frontend Engineer', 'salary' => '$115,000', 'description' => 'Build and maintain UI for web applications using modern JavaScript frameworks.'],
            ['id' => 2, 'title' => 'UI/UX Designer', 'salary' => '$110,000', 'description' => 'Design intuitive and visually appealing user interfaces and experiences.'],
            ['id' => 3, 'title' => 'Backend Engineer', 'salary' => '$125,000', 'description' => 'Develop scalable APIs and robust server-side logic.'],
            ['id' => 4, 'title' => 'Database Admin', 'salary' => '$105,000', 'description' => 'Manage, optimize, and secure database systems to ensure high availability and performance.'],
            ['id' => 5, 'title' => 'DevOps Engineer', 'salary' => '$120,000', 'description' => 'Automate deployment pipelines and manage cloud infrastructure.'],
            ['id' => 6, 'title' => 'Product Manager', 'salary' => '$130,000', 'description' => 'Define product strategy and coordinate cross-functional teams.'],
            ['id' => 7, 'title' => 'QA Engineer', 'salary' => '$100,000', 'description' => 'Design and execute tests to ensure software quality and reliability.'],
        ];
    }

    public static function find(int $id) : ?array
    {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);

        if(!$job)
        {
            abort(404);
        }

        return $job;
    }
}
