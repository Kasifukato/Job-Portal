<?php

use App\Models\Employer;
use App\Models\Job;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

// These lines are crucial for Laravel tests
uses(TestCase::class);
uses(DatabaseMigrations::class);

it('belongs to an employer', function () {
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id,
    ]);

    expect($job->employer->is($employer))->toBeTrue();
});

it('can have tags', function () {
    $job = Job::factory()->create();

    $job->tag('Frontend');

    expect($job->tags)->toHaveCount(1);
});

