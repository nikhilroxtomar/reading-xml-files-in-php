<?php
	$xml = simplexml_load_file('file.xml');
	
	//Simple ways to read and display

	//First Student
	$name = $xml->student[0]->name;
	$age = $xml->student[0]->age;
	
	echo $name . ' is ' . $age . ' years old. <br/>';

	//Second Student
	$name = $xml->student[1]->name;
	$age = $xml->student[1]->age;
	
	echo $name . ' is ' . $age . ' years old. <br/>';

	//Third Student
	$name = $xml->student[2]->name;
	$age = $xml->student[2]->age;
	
	echo $name . ' is ' . $age . ' years old. <br/>';

	echo '<br/>';
	
	//Read and Display data via loop
	foreach($xml->student as $data){
		$name = $data->name;
		$age = $data->age;
		echo $name . ' is ' . $age . ' years old. <br/>';
	}
?>
