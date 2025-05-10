<?php

use Tests\TestCase;

uses(TestCase::class)
    ->in(__DIR__, dirname(__DIR__).'/Modules');

beforeEach(function () {
    Http::preventStrayRequests();
});
