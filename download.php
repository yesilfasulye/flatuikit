<?php

	$hit_count = @file_get_contents('count.txt');
	$hit_count++;
	@file_put_contents('count.txt', $hit_count);

	header('Location: http://www.burakkaya.com/lab/flat/Flat_UI_Kit.zip');

?>