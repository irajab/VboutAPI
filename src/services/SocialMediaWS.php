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
		$result = array();
		
		$this->api_url .= 'calendar.'.$this->api_response;
		
		try {
			$calendar = $this->calendar($params);

            if ($calendar != null && isset($calendar['response'])) {
                $result = array_merge($result, $calendar['data']);
            }

		} catch (VboutException $ex) {
			throw new VboutException($ex);
        }
		
       return $result;
    }
	
	public function getChannels($params = array())
    {	
		$result = array();
		
		$this->api_url .= 'channels.'.$this->api_response;
		
		try {
			$channels = $this->channels($params);

            if ($channels != null && isset($channels['response'])) {
                $result = array_merge($result, $channels['data']);
            }

		} catch (VboutException $ex) {
			throw new VboutException($ex);
        }
		
       return $result;
    }
	
	public function getPost($params = array())
    {	
		$result = array();
		
		$this->api_url .= 'getpost.'.$this->api_response;
		
		try {
			$post = $this->getpost($params);

            if ($post != null && isset($post['response'])) {
                $result = array_merge($result, $post['data']);
            }

		} catch (VboutException $ex) {
			throw new VboutException($ex);
        }
		
       return $result;
    }
	
	public function getStats($params = array())
    {	
		$result = array();
		
		$this->api_url .= 'stats.'.$this->api_response;
		
		try {
			$stats = $this->stats($params);

            if ($stats != null && isset($stats['response'])) {
                $result = array_merge($result, $stats['data']);
            }

		} catch (VboutException $ex) {
			throw new VboutException($ex);
        }
		
       return $result;
    }
	
	public function deletePost($params = array())
    {	
		$result = array();
		
		$this->api_url .= 'deletepost.'.$this->api_response;
		
		try {
			$this->deletepost($params);
		} catch (VboutException $ex) {
			throw new VboutException($ex);
        }
		
       return $result;
    }
	
	public function addPost($params = array())
    {	
		$result = array();
		
		$this->api_url .= 'addpost.'.$this->api_response;
		
		try {
			$this->addpost($params);
		} catch (VboutException $ex) {
			throw new VboutException($ex);
        }
		
       return $result;
    }
}