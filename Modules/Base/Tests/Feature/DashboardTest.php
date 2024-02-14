<?php

use App\Models\User;
use Tests\TestCase;

use function Pest\Laravel\actingAs;
use function Pest\Laravel\get;

uses(TestCase::class)->in(__DIR__);

test('dashboard redirects to login when user is a guest', function () {
    get('dashboard')->assertRedirect('login');
});

test('dashboard screen can be rendered', function () {
    $user = User::factory()->create();
    actingAs($user)->get('dashboard')->assertOk();
});
