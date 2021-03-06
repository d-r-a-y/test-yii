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
    public $password;
    public $firstName;
    public $lastName;
    private $_id;

    public function __construct($email,$password)
    {
        $this->email = $email;
        $this->password = $password;
    }

	public function authenticate()
	{
        $record=User::model()->findByAttributes(array('email'=>$this->email));

        if($record===null)
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        else if($record->password !== md5($this->password))
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        else
        {
            $this->_id=$record->id;
            $this->firstName=$record->firstName;
            $this->lastName=$record->lastName;
            $this->errorCode=self::ERROR_NONE;
        }
        return !$this->errorCode;
	}

    public function getName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }

    public function getId()
    {
        return $this->_id;
    }
}