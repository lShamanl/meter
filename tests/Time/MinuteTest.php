<?php

namespace lShamanl\Meter\Time;


use PHPUnit\Framework\TestCase;

class MinuteTest extends TestCase
{
    public static $minute = 1;
    public static $hour = 60;
    public static $day = 60 * 24;
    public static $week = 60 * 24 * 7;
    public static $month = 60 * 24 * 30;
    public static $year = 60 * 24 * 365;

    public function testMinuteInMinute()
    {
        $this->assertEquals(self::$minute,Minute::MINUTE);
    }

    public function testMinuteInHour()
    {
        $this->assertEquals(self::$hour,Minute::HOUR);
    }

    public function testMinuteInDay()
    {
        $this->assertEquals(self::$day,Minute::DAY);
    }

    public function testMinuteInWeek()
    {
        $this->assertEquals(self::$week,Minute::WEEK);
    }

    public function testMinuteInMonth()
    {
        $this->assertEquals(self::$month,Minute::MONTH);
    }

    public function testMinuteInYear()
    {
        $this->assertEquals(self::$year,Minute::YEAR);
    }
}
