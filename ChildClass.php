<?php
	// this file will extend ParentClass.php

	class ChildClass extends ParentClass {
			private $owner;

			public function __construct($n, $b, $c, $f, $o){
				parent::__construct($n, $b, $c, $f);
				$this->owner = $o;
			}

			public function getOwner(){
				return $this->owner;
			}
			public function setOwner($newOwner){
				echo "<!--Setting new owner for " . $this->getName() .".-->";
				$this->owner = $newOwner;
			}
			public function __toString(){
				$s = parent::__toString();
				$t = parent::getName() . " is also a housecat owned by " . $this->getOwner() . ".<br>";
				return $s . $t;
			}
	}
