<?php

function positive_sum($arr) {
    return array_reduce($arr, function ($carry, $value) {
        return $value > 0 ? $carry + $value : $carry;
    });
}
