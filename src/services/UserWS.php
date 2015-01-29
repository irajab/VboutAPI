<?php

require_once dirname(dirname(__FILE__)) . '/base/Vbout.php';
require_once dirname(dirname(__FILE__)) . '/base/VboutException.php';

class UserWS extends Vbout 
{
	protected function init()
	{
		$this->api_url = '/user/';
	}
	
	public function getUsers($params = array())
    {	
		$result = array();
		
		try {
			$users = $this->lists($params);

            if ($users != null && isset($users['data'])) {
                $result = array_merge($result, $users['data']['users']);
            }

		} catch (VboutException $ex) {
			$result = $ex->getData();
        }
		
       return $result;
    }
		
	public function getManagers($params = array())
    {	
		$result = array();
		
		try {
			$managers = $this->managers($params);

            if ($managers != null && isset($managers['data'])) {
                $result = array_merge($result, $managers['data']['users']);
            }

		} catch (VboutException $ex) {
			$result = $ex->getData();
        }
		
       return $result;
    }
	
	public function removeUser($params = array())
    {	
		$result = array();
		
		try {
			$user = $this->delete($params);

            if ($user != null && isset($user['data'])) {
                $result = $user['data']['item'];
            }

		} catch (VboutException $ex) {
			$result = $ex->getData();
        }
		
       return $result;
    }
	
	public function addNewUser($params = array())
    {	
		$result = array();
		
		try {
			$this->set_method('POST');
			
			$user = $this->add($params);

            if ($user != null && isset($user['data'])) {
                $result = $user['data']['item'];
            }

		} catch (VboutException $ex) {
			$result = $ex->getData();
        }
		
       return $result;
    }
	
	public function updateUser($params = array())
    {	
		$result = array();
		
		try {
			$this->set_method('POST');
			
			$user = $this->edit($params);

            if ($user != null && isset($user['data'])) {
                $result = $user['data']['item'];
            }

		} catch (VboutException $ex) {
			$result = $ex->getData();
        }
		
       return $result;
    }
	
	public function changeStatus($params = array())
    {	
		$result = array();
		
		try {
			$this->set_method('POST');
			
			$user = $this->add($params);

            if ($user != null && isset($user['data'])) {
                $result = $user['data']['item'];
            }

		} catch (VboutException $ex) {
			$result = $ex->getData();
        }
		
       return $result;
    }
	
}