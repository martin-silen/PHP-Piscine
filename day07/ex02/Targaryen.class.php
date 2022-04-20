<?php
	class Targaryen {
		protected function resistFire() {
			return false;
		}

		public function getBurned() {
			if (!$this->resistFire()) {
				return "burns alive";
			} else {
				return "emerges naked but unharmed";
			}
		}
	}
?>