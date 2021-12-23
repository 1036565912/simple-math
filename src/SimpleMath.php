<?php
declare(strict_types=1);
namespace Simple\MathFunction;

class SimpleMath
{
    /**
     * 整型相加
     * @param int $num1
     * @param int $num2
     * @return int
     * @author chenlin
     * @date 2021/12/23
     */
    public function add(int $num1, int $num2): int
    {
        return $num1 + $num2;
    }


    /**
     * 整型相减
     * @param int $num1
     * @param int $num2
     * @return int
     * @author chenlin
     * @date 2021/12/23
     */
    public function subtract(int $num1, int $num2): int
    {
        return $num1 - $num2;
    }

    /**
     * 整型相乘
     * @param int $num1
     * @param int $num2
     * @return int
     * @author chenlin
     * @date 2021/12/23
     */
    public function multiplic(int $num1, int $num2): int
    {
        return $num1 * $num2;
    }
}