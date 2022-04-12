#!/usr/bin/php
<?PHP
    if ($argc == 1)
        exit();
    $i = 1;
    while ($i < $argc) {
        $word = preg_split("/ +/", trim($argv[$i]));
        $result = array_merge((array)$result, (array)$word);
        $i++;
    }
    sort($result);
    print_r(implode("\n", $result));
    echo "\n";
?>