<?php


namespace lShamanl\Meter\Time;

/**
 * Class Hour
 * @package lShamanl\Meter\Time
 */
class Hour
{
   const HOUR = 1;
   const DAY = self::HOUR * 24;
   const WEEK = self::DAY * 7;
   const MONTH = self::DAY * 30;
   const YEAR = self::DAY * 365;
}