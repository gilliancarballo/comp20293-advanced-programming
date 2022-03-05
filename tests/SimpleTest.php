<?php
require_once __DIR__ . '/../src/Simple.php';

class SimpleTest extends \PHPUnit\Framework\TestCase
{
    public function testDivide()
    {
        $simple = new Simple(10);
        $result = $simple->divide(2);

        $this->assertEquals(5, $result);
    }

    public function testDivideWithException()
    {
        $this->expectException(InvalidArgumentException::class);

        $simple = new Simple(10);
        $result = $simple->divide(0);
    }
}
