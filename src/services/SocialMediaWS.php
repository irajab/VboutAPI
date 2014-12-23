<?php

require_once dirname(dirname(__FILE__)) . '/base/Vbout.php';
require_once dirname(dirname(__FILE__)) . '/VboutException.php';

class ApplicationWS extends Vbout {
    private $api_url = '/socialmedia/';
	
	/**
     * Response type: JSON / XML
     */
	private $api_response = 'json';
	
	public function getCalendar($params = array())
    {	
		
    }
	
	public function getChannels($params = array())
    {	
		
    }
	
	public function getPost($params = array())
    {	
		
    }
	
	public function getStats($params = array())
    {	
		
    }
	
	public function deletePost($params = array())
    {	
		
    }
	
	public function addPost($params = array())
    {	
		
    }
}