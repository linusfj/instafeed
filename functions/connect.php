<?php

	function connectToInstagram($url){
			$ch = curl_init();

			curl_setopt_array($ch, array (
				CURLOPT_URL				=>	$url,
				CURLOPT_RETURNTRANSFER 	=>	true,
				CURLOPT_SSL_VERIFYPEER	=>	false, //farligt enl. säkerhet?
				CURLOPT_SSL_VERIFYHOST	=>	2
			));

			$result = curl_exec($ch);

			curl_close($ch);

			return $result;
		}
		
?>