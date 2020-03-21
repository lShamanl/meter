<?php


namespace lShamanl\Meter\Time;

/**
 * Class Second
 * @package lShamanl\Meter\Time
 */
class Second
{
   const SECOND = 1;
   const MINUTE = self::SECOND * 60;
   const HOUR = self::MINUTE * 60;
   const DAY = self::HOUR * 24;
   const WEEK = self::DAY * 7;
   const MONTH = self::DAY * 30;
   const YEAR = self::DAY * 365;
}