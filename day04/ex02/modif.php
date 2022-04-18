<?PHP

	function check_pw($pw1, $pw2)
	{
		return ($pw1 === hash("whirlpool", $pw2));
	}

	$path = "../private";
	$file_path = $path . "/passwd";
	if ($_POST["login"] && $_POST["oldpw"] && $_POST["newpw"] && $_POST["submit"] === "OK")
	{
		$array = unserialize(file_get_contents($file_path));
		if ($array)
		{
			foreach ($array as $key => $value)
			{
				if ($value["login"] === $_POST["login"] && check_pw($value["passwd"], $_POST["oldpw"]))
				{
					$array[$key]["passwd"] = hash("whirlpool", $_POST["newpw"]); 
					file_put_contents($file_path, serialize($array));
					echo "OK\n";
					exit();
				}
			}
		}
	}
	echo "ERROR\n";

?>