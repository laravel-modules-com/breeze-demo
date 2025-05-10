<?php

pest()->extend(Tests\TestCase::class)
    ->in(dirname(__DIR__))
    ->beforeEach(function () {
        Http::preventStrayRequests();
    });
