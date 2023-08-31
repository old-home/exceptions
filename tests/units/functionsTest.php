<?php

declare(strict_types=1);

namespace Graywings\Exceptions\Tests\Units;

use ErrorException;
use PHPUnit\Framework\TestCase;
use function Graywings\Exceptions\initHandler;

class functionsTest extends TestCase
{
    /**
     * @covers \Graywings\Exceptions\initHandler
     * @return never
     * @throws ErrorException
     */
    public function testInitHandler(): never
    {
        $this->expectException(ErrorException::class);
        $this->expectExceptionMessage('test');
        $this->expectExceptionCode(0);
        initHandler();
        trigger_error('test', E_USER_ERROR);
    }
}
