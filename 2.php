
<?php

function is_password_valid($password__)
{
if(preg_match("/^(?=.*[A-Z])(?=.*\W)(?=.*\d)(?=.*[a-z])[A-Z0-9a-z\S]{8,}$/", $password__)) {
  		return true;
	} else {
  		return false;
	}
}

function is_username_valid($username__)
{
	if(preg_match("/^[a-z]{8}$/", $username__)) {
  		return true;
	} else {
  		return false;
	}
}

echo is_username_valid("angganur"); //Data Valid | return true
echo is_username_valid("Angga@2001"); //Data Tidak Valid | return false

echo is_password_valid("Angga@2001"); //Data Valid | return true
echo is_password_valid("angganur"); //Data Tidak Valid | return false


?>