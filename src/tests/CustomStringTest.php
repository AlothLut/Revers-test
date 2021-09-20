<?php
namespace Tests;

use App\CustomString;
use PHPUnit\Framework\TestCase;

class CustomStringTest extends TestCase
{
    public function additionSuccessProvider()
    {
        return [
            ["Привет! Давно не виделись.", "Тевирп! Онвад ен ьсиледив."],
            ["Qwe?", "Ewq?"],
            [" ", " "]
        ];
    }

    /**
     * @dataProvider additionSuccessProvider
     */
    public function testSuccessRevers($input, $output)
    {
        $res = CustomString::revers($input);
        $this->assertSame($output, $res);
    }
}
