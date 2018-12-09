<?php

function cw($startYear) {
    $currentYear = date('Y');
    return "©$startYear - ©$currentYear";
}

echo (cw(2015));