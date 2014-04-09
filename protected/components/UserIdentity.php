<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */

    public $email;

    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

	public function authenticate()
	{
		$users=array(
			// username => password
			'demo@demo.com'=>'demo',
			'admin@admin.com'=>'admin',
		);
		if(!isset($users[$this->email]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif($users[$this->email]!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
			$this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;
	}
}