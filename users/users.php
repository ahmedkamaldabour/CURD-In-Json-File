<?php

function getAllUsers()
{
	$all_users = file_get_contents(__DIR__.'/users.json');
	$all_users = json_decode($all_users, true);
	return $all_users;
}

function createUser($data)
{
	$users = getAllUsers();
	$users[] = $data;
	$users = json_encode($users, JSON_PRETTY_PRINT);
	file_put_contents('users/users.json', $users);
}


