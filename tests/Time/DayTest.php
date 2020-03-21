<?php

namespace lShamanl\Meter\Time;


use PHPUnit\Framework\TestCase;

class DayTest extends TestCase
{
    public static $day = 1;
    public static $week = 7;
    public static $month = 30;
    public static $year = 365;

    public function testDayInDay()
    {
        $this->assertEquals(self::$day,Day::DAY);
    }

    public function testDayInWeek()
    {
        $this->assertEquals(self::$week,Day::WEEK);
    }

    public function testDayInMonth()
    {
        $this->assertEquals(self::$month,Day::MONTH);
    }

    public function testDayInYear()
    {
        $this->assertEquals(self::$year,Day::YEAR);
    }
}
