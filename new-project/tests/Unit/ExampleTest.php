<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\mobileSANumber;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }

    public function testCheckSingleNumberWithoutPrefix(): void
    {
        $number = '333333333';

        $mobileNumber = new mobileSANumber();
        $result = $mobileNumber->check_number($number);

        print_r("---------->>>>>>>>>>".$result."<<<<<<<<<<-------");

        $this->assertSame("Valid number, added +27",$result);
    }

    public function testCheckSingleNumberWithoutPlus(): void
    {
        $number = '27333333333';

        $mobileNumber = new mobileSANumber();
        $result = $mobileNumber->check_number($number);

        print_r("---------->>>>>>>>>>".$result."<<<<<<<<<<-------");

        $this->assertSame( "Valid number, added +",$result);
    }

    public function testCheckSingleNumberInvalid(): void
    {
        $number = 'asdckjbansdc';

        $mobileNumber = new mobileSANumber();
        $result = $mobileNumber->check_number($number);

        print_r("---------->>>>>>>>>>".$result."<<<<<<<<<<-------");

        $this->assertSame("Invalid number",$result);
    }
}
