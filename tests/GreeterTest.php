<?php

declare(strict_types=1);

namespace App\Tests;

use App\Greeter;
use PHPUnit\Framework\TestCase;

class Feat_1_GreeterTest extends TestCase
{
    public function testGreetReturnsExpectedMessage(): void
    {
        $this->assertSame('Hello, LaneSync!', Greeter::greet('LaneSync'));
    }

    public function testGreetHandlesEmptyString(): void
    {
        $this->assertSame('Hello, !', Greeter::greet(''));
    }
}
