<?php

declare(strict_types=1);

/*
 * This file is part of Payload.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use BrianFaust\Payload\Serialisers\YamlSerialiser;

uses(BrianFaust\Tests\Payload\Serialisers\TestCase::class);


// Helpers
function getExpectedOutput(): string
{
    return '{ hello: world }';
}

function getSerialiser(): YamlSerialiser
{
    return new YamlSerialiser();
}