<?PHP

	if ($_POST['submit'] == "OK" && $_POST['login'] && $_POST['oldpw'] && $_POST['newpw'])
	{
		$user = $_POST['login'];
		$pass_old = $_POST['oldpw'];
		$pass_new = $_POST['newpw'];
		$pass_old = hash('whirlpool', $pass_old);
		$pass_new = hash('whirlpool', $pass_new);
		$path = '../private';
		$file = $path . '/passwd';

		if (!file_exists($file)) {
			echo 'ERROR' . "\n";
			return;
		}
		$data = file_get_contents($file);
		$userdata = unserialize($data);

		if (!$userdata[$user]) {
			echo 'ERROR' . "\n";
			return;
		}
		if ($userdata[$user]['passwd'] !== $pass_old) {
			echo 'ERROR' . "\n";
			return;
		}
		$userdata[$user] = [
		'login' => $user,
		'passwd' => $pass_new
		];
		$data = serialize($userdata);
		file_put_contents($file, $data);
		echo 'OK' . "\n";

	} 
	else {
		echo 'ERROR' . "\n";
		return;
	}
?>