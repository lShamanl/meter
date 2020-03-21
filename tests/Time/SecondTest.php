<?php

namespace lShamanl\Meter\Time;


use PHPUnit\Framework\TestCase;

class SecondTest extends TestCase
{
    public static $second = 1;
    public static $minute = 60;
    public static $hour = 60 * 60;
    public static $day = 60 * 60 * 24;
    public static $week = 60 * 60 * 24 * 7;
    public static $month = 60 * 60 * 24 * 30;
    public static $year = 60 * 60 * 24 * 365;

    public function testSecondInSecond()
    {
        $this->assertEquals(self::$second,Second::SECOND);
    }

    public function testSecondInMinute()
    {
        $this->assertEquals(self::$minute,Second::MINUTE);
    }

    public function testSecondInHour()
    {
        $this->assertEquals(self::$hour,Second::HOUR);
    }

    public function testSecondInDay()
    {
        $this->assertEquals(self::$day,Second::DAY);
    }

    public function testSecondInWeek()
    {
        $this->assertEquals(self::$week,Second::WEEK);
    }

    public function testSecondInMonth()
    {
        $this->assertEquals(self::$month,Second::MONTH);
    }

    public function testSecondInYear()
    {
        $this->assertEquals(self::$year,Second::YEAR);
    }
}
