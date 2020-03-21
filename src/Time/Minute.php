<?php


namespace lShamanl\Meter\Time;

/**
 * Class Minute
 * @package lShamanl\Meter\Time
 */
class Minute
{
   const MINUTE = 1;
   const HOUR = 60;
   const DAY = self::HOUR * 24;
   const WEEK = self::DAY * 7;
   const MONTH = self::DAY * 30;
   const YEAR = self::DAY * 365;
}