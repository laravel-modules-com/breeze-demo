<?php

use Tests\TestCase;

pest()->extend(TestCase::class)
    ->in(dirname(__DIR__))
    ->in(dirname(__DIR__).'/Modules')
    ->beforeEach(function () {
        Http::preventStrayRequests();
    });
