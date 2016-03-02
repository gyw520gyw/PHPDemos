<?php

	$users = file('a1.txt');
	
	foreach($users as $user) {
		
		list($name, $email, $phone) = explode(',', $user);
		
		printf('<p>%s, (%s)TEL, %s</p>', $name, $email, $phone);
		
	}
	
	//fclose($users);
?>