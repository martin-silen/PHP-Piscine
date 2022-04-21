<?php
	require_once('IFighter.class.php');

	class Nightswatch implements IFighter {
		private $fighters = array();

		public function fight() {
			foreach ($this->fighters as $f)
				if (get_class($f) != 'MaesterAemon')
					$f->fight();
		}
		public function recruit($new) {
			$this->fighters[] = $new;
		}
	}
?>