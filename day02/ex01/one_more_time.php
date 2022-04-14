#!/usr/bin/php
<?php

    date_default_timezone_set('europe/paris');
    function    ft_get_index($array, $name)
    {
        $i = 1;
        foreach($array as $key)
        {
            if ($key == $name)
                return $i;
            ++$i;
        }
        return (-1);
    }

    if ($argc != 2)
        return;
    $day = array("lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi", "dimanche");
    $month = array ("janvier" , "février", "mars" , "april", "mai" 
        , "juin", "juillet" , "août", "septembre", "octobre" , "novembre" , "décembre");
    if (preg_match("/^([A-Za-z]+) (\d{1,2}) ([A-Za-z]+) (\d{4}) (\d{2}):(\d{2}):(\d{2})$/", $argv[1], $out))
    {
        $out[1][0] = strtolower($out[1][0]);
        $out[3][0] = strtolower($out[3][0]);
        if (!in_array($out[1], $day) || !in_array($out[3], $month))
        {
            echo "Wrong Format\n";
            return;
        }
        $index = ft_get_index($month, $out[3]);
        if ((checkdate($index ,$out[2], $out[4]) == false))
        { 
            echo "Wrong Format\n";
            return ;
        }

        $stamp = mktime($out[5], $out[6], $out[7], $index, $out[2],  $out[4]);
        echo $stamp."\n";
    }
    else
        echo "Wrong Format\n";

/*
    First we set the timezone settings
    Then we have (line 16) an error check
    Then IF we match the inputted date by using regex and store it to $out and make the letters lowercase
        Then we check inside the IF statement that if the month or day is not in Argv[1] we echo "wrong format"
        Then we assign to $index the return value of ft_get_index() where we use a foreach loop 

    preg_match  = Performs a regular expression match
    in_array    = Checks if a value exists in an array
    checkdate   = Validate a Gregorian date
    mktime      = Get Unix timestamp for a date

*/

?>