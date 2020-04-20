<?php

function periodIsLate($last, $today, $cycleLength) {
  $days = ($last)->diff($today)->days;

  return $days > $cycleLength;
}
