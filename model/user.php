<?php
/**
* This class is used to store the users info
*/
require_once "/config/config.php";

class user 
{
	private $userID;
	private $UserFullName;
	private $UserEmail;

	function AddUser($userID,$UserFullName,$UserEmail)
	{

		$checkUser=$conx->query("select * from users where userId='$userID' ");
		if (empty($checkUser)) {
		$q=$conx->query("insert into users(userId,UserFullName,UserEmail) values('$userId',$UserFullName,$UserEmail) ");
		if (!$q) {
					# code...
			echo "Insert to db failed .";
				}

		}		
	}

}




