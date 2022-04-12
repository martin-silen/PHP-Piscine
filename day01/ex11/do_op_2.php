#!/usr/bin/php
<?php
    function ft_super_split($str)
    {
        $pattern = "/(-|\/|%|\*|\+)/";
        $arr = preg_split($pattern, $str, -1, PREG_SPLIT_NO_EMPTY);
        return ($arr);
    }

    function find_op($str){
        $i = 1;
        while ($i < strlen($str))
        {

            if ($str[$i] == "+")
                return 1;
            if ($str[$i] == "-")
                return 2;
            if ($str[$i] == "*")
                return 3;
            if ($str[$i] == "/")
                return 4;
            if ($str[$i] == "%")
                return 5;
            $i++;
        }
        return (0);
    }
    
    if ($argc != 2){
        echo "Incorrect parameters\n";
        exit();
    }
    $argv[1] = preg_replace('/\s+/', '', $argv[1]);
    $op = find_op($argv[1]);
    if ($op == 0)
    {
        echo "Syntax Error\n";
        exit();
    }
    $arr = ft_super_split($argv[1]);
    if(is_numeric($arr[0]) && is_numeric($arr[1]))
    {
        if ($op == 1)
            $res = $arr[0] + $arr[1];
        else if ($op == 2)
            $res = $arr[0] - $arr[1];
        else if ($op == 3)
            $res = $arr[0] * $arr[1];
        else if ($op == 4)
            $res = $arr[0] / $arr[1];
        else if ($op == 5)
            $res = $arr[0] % $arr[1];
        else
            echo "Incorrect parameters\n";
        echo "$res\n";
    }
    else
        echo "Syntax Error\n";
?>