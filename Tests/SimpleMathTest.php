<?php
declare(strict_types=1);

namespace Test;

use PHPUnit\Framework\TestCase;
use Simple\MathFunction\SimpleMath;

/**
 * @covers \Simple\MathFunction\SimpleMath
 */
class SimpleMathTest extends TestCase
{
    protected $math = null;

    /**
     * @covers \Simple\MathFunction\SimpleMath::__construct
     */
    public function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $this->math = new SimpleMath();
    }

    /**
     * @dataProvider addData
     * @covers \Simple\MathFunction\SimpleMath::add
     */
    public function testAdd(int $num1, int $num2, int $sum): void
    {
        $this->assertEquals($sum, $this->math->add($num1, $num2));
    }

    /**
     * @param int $num1
     * @param int $num2
     * @param int $result
     * @dataProvider subtractData
     * @covers \Simple\MathFunction\SimpleMath::subtract
     */
    public function testSubtract(int $num1, int $num2, int $result): void
    {
        $this->assertEquals($result, $this->math->subtract($num1, $num2));
    }

    /**
     * @param int $num1
     * @param int $num2
     * @param int $result
     * @dataProvider multiplicData
     * @covers \Simple\MathFunction\SimpleMath::multiplic
     */
    public function testMultiplic(int $num1, int $num2, int $result): void
    {
        $this->assertEquals($result, $this->math->multiplic($num1, $num2));
    }


    public function tearDown(): void
    {
        $this->math = null;
        parent::tearDown(); // TODO: Change the autogenerated stub
    }

    public function addData(): array
    {
        return [
            [1, 2, 3],
            [2, 3, 5],
            [3, 4, 7]
        ];
    }
    public function subtractData(): array
    {
        return [
            [1, 2, -1],
            [3, 2, 1],
            [100, 100, 0]
        ];
    }
    public function multiplicData(): array
    {
        return [
            [1, 2, 2],
            [1, 0, 0],
            [1, -1, -1]
        ];
    }
}