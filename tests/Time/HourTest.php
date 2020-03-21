<?php

namespace lShamanl\Meter\Time;


use PHPUnit\Framework\TestCase;

class HourTest extends TestCase
{
    public static $hour = 1;
    public static $day = 24;
    public static $week = 24 * 7;
    public static $month = 24 * 30;
    public static $year = 24 * 365;

    public function testHourInHour()
    {
        $this->assertEquals(self::$hour,Hour::HOUR);
    }

    public function testHourInDay()
    {
        $this->assertEquals(self::$day,Hour::DAY);
    }

    public function testHourInWeek()
    {
        $this->assertEquals(self::$week,Hour::WEEK);
    }

    public function testHourInMonth()
    {
        $this->assertEquals(self::$month,Hour::MONTH);
    }

    public function testHourInYear()
    {
        $this->assertEquals(self::$year,Hour::YEAR);
    }
}
