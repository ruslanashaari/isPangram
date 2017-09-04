<?php

	function isPangram($param) {
		
		$sentences = strtolower(trim($param));
		$letters = str_split("thequickbrownfoxjumpsoverthelazydog");

		foreach ($letters as $letter) {
			if (strstr($sentences, $letter)) {
				$status = true;
			} else {
				$status = false;
				break;
			}

		}

		return $status;
	}

?>
