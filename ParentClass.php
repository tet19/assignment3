<?php
	// This is the file for the parent class

	class ParentClass {
		protected $name;
		protected $breed;
		protected $color;
		protected $food;

		public function __construct($n, $b, $c, $f) {
			$this->name  = $n;
			$this->breed = $b;
			$this->color = $c;
			$this->food  = $f;
		}
		//accessor methods
		public function getName(){
			return $this->name;
		}
		public function getBreed(){
			return $this->breed;
		}
		public function getColor(){
			return $this->color;
		}
		public function getFood(){
			return $this->food;
		}
		//mutators
		public function setName($newName){
			echo "<!--Changing " . $this->getName() ."'s name to " . $newName . ".-->";
			$this->name = $newName;
		}
		public function setFood($newFood){
			echo "<!-- Changing " . $this->getName() . "'s favourite food to " . $newFood . ".-->";
			$this->food = $newFood;
		}
		public function setColor($newColor){
			echo "<!-- Changing " . $this->getName() . "'s color to " . $newColor . ".-->";
			$this->color = $newColor;
		}
		public function __toString(){
			$s = $this->getName() . " is a " . $this->getColor() . " colored " . $this->getBreed() . ".";
			$t = $this->getName() . " also really likes to eat " . $this->getFood() . ".";
			return $s . "<br>" . $t . "<br>";
		}

	}
