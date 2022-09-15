<?php

declare(strict_types=1);

it('test the home page')->get('/')
    ->assertOk();
