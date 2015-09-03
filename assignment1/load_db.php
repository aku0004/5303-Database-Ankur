<?php

$db = new mysqli('localhost', 'apatel', 'apatel2015', 'apatel');

if($db->connect_errno > 0)
{
    die('Unable to connect to database [' . $db->connect_error . ']');
}

// Gets 1000 users from the randomuser api, and loads it into a variable called $json
$json = file_get_contents("http://api.randomuser.me/?results=10");

// This turns the variable into a PHP object
$json_array = json_decode($json);


for($i=0;$i<sizeof($json_array->results);$i++)
{
    $gender = $json_array->results[$i]->user->gender;
    $title = $json_array->results[$i]->user->name->title;
    $first = $json_array->results[$i]->user->name->first;
    $last = $json_array->results[$i]->user->name->last;
    $street = $json_array->results[$i]->user->location->street;
    $city = $json_array->results[$i]->user->location->city;
    $state = $json_array->results[$i]->user->location->state;
    $zip = $json_array->results[$i]->user->location->zip;
    $email = $json_array->results[$i]->user->email;
    $username = $json_array->results[$i]->user->username;
    $password = $json_array->results[$i]->user->password;
    $dob = $json_array->results[$i]->user->dob;
    $phone = $json_array->results[$i]->user->phone;
    $picture = $json_array->results[$i]->user->picture->medium;
    
    $sql = "
		SELECT *
		FROM user
		WHERE email = '{$email}'
		";
	
	#echo $sql."\n";	
		
	if(!$result = $db->query($sql))
	{
	die('There was an error running the query [' . $db->error . ']');
	}
	
	if(!$results->num_rows > 0)
	{
		$sqls = "
   	 	INSERT INTO user
    	VALUES('$gender','$title','$first','$last','$street','$city','$state','$zip','$email','$username','$password','$dob','$phone','$picture')
   		";
  
   #echo $sqls."\n";
  
   if(!$results = $db->query($sqls))
   {
   echo('['.$db->error.']');
   }
   }
   }
   