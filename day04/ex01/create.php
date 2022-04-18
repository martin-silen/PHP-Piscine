<?php
$path = "../private";
$file_path = $path . "/passwd";
if ($_POST["login"] && $_POST["passwd"] && $_POST["submit"] === "OK")
{
	if (!file_exists($path) && !mkdir($path))
		exit();
	if (!file_exists($file_path))
		file_put_contents($file_path, null);
	$array = unserialize(file_get_contents($file_path));
	if ($array)
	{
		foreach ($array as $key => $value)
		{
			if ($value["login"] === $_POST["login"])
			{
				echo "ERROR\n";	
				exit();
			}
		}
	}
	$db["login"] = $_POST["login"];
	$db["passwd"] = hash("whirlpool", $_POST["passwd"]);
	$array[] = $db;
	file_put_contents($file_path, serialize($array));
	echo "OK\n";
}
else
	echo "ERROR\n";
?>