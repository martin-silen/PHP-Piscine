<?php
	function ft_is_sort($argv)
    {
        if (count($argv) == 1)
            return (true);
        $tmp = $argv;
        sort($tmp);
		$i = 0;
        while ($i < count($tmp))
        {
            if (strcmp($tmp[$i], $argv[$i]))
                return (false);
			$i++;
        }
        return (true);
    }
?>
