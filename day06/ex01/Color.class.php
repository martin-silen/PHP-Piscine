<?php
	class Color {
		public $red;
		public $green;
		public $blue;
		static $verbose = false;

		//65536 is a dark color | https://convertingcolors.com/decimal-color-65536.html
		public function __construct(array $kwargs) {
			if (isset($kwargs['rgb'])) {			// Take the color from the long string and store it
				$color = intval($kwargs['rgb'], 10);
				$this->red = $color / 65536;
				$this->green = $color % 65536 / 256;
				$this->blue = $color % 65536 % 256;

			} else if (isset($kwargs['red']) && isset($kwargs['green']) && isset($kwargs['blue'])) { //simply store the colors
				$this->red = intval($kwargs['red'], 10);
				$this->green = intval($kwargs['green'], 10);
				$this->blue = intval($kwargs['blue'], 10);
			}
			if (self::$verbose) { //Check value of verbose
				printf($this . " constructed.\n"); //or maybe use printf here?
			}
		}
		
		public function __destruct() {
			if (self::$verbose) {
				printf($this . " destructed.\n"); //printf ?
			}
		}

		// 
		public function __toString() {
			$ret = sprintf("Color( red: %3d, green: %3d, blue: %3d )",
						$this->red, $this->green, $this->blue);
			return $ret;
		}

		// Prints out the .doc
		public function doc() {
			if ($str = file_get_contents('Color.doc.txt')) {
				echo $str;
			}
			else {
				echo "Error: .doc file doesn't exist.\n";
			}
		}

		// Addition
		public function add($col) {
			$new = new Color( array(
				'red' => $this->red + $col->red,
				'green' => $this->green + $col->green,
				'blue' => $this->blue + $col->blue, 
			) );
			return $new;
		}

		// Subtraction
		public function sub($col) {
			$new = new Color( array(
				'red' => $this->red - $col->red,
				'green' => $this->green - $col->green,
				'blue' => $this->blue - $col->blue, 
			) );
			return $new;
		}

		// Multiply
		public function mult($factor) {
			$new = new Color( array(
				'red' => $this->red * $factor,
				'green' => $this->green * $factor,
				'blue' => $this->blue * $factor, 
			) );
			return $new;
		}
	}
?>