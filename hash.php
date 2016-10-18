<?php
	function hashPassword($password) {
		$salt = "ThisIsASalt";
		$pepper = "ThisIsAPepper";
		
		$hash1 = hash('sha256', $password . $salt);
		$hash2 = hash('sha256', $password . $pepper);
		$hash3 = hash('sha256', $pepper . $salt);
		$hash4 = hash('sha256', $salt . $pepper);
		
		$finalhash = hash('sha256', $hash1 . $hash2 . $hash3 . $hash4);
		return $finalhash;
	}
?>