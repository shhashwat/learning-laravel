<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job {
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title'=> 'Director of Sales',
                'salary'=> '$100,000',
            ],
            [
                'id' => 2,
                'title'=> 'Software Engineer',
                'salary'=> '$80,000',
            ],
            [
                'id' => 3,
                'title'=> 'Accountant',
                'salary'=> '$60,000',
            ],
        ];
    }

    public static function find(int $id): array
    {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);

        if(!$job){
            abort(404);
        } else {
            return $job;
        }

    }
}