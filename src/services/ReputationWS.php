<?php

require_once dirname(dirname(__FILE__)) . '/base/Vbout.php';
require_once dirname(dirname(__FILE__)) . '/VboutException.php';

class ApplicationWS extends Vbout {
    private $api_url = '/reputation/';
	
	/**
     * Response type: JSON / XML
     */
	private $api_response = 'json';
	
	public function getDirectReviews($params = array())
    {	
		$result = array();
		
		$this->api_url .= 'direct.'.$this->api_response;
		
		try {
			$reviews = $this->direct($params);

            if ($reviews != null && isset($reviews['response'])) {
                $result = array_merge($result, $reviews['data']['reviews']['items']);
            }

		} catch (VboutException $ex) {
			throw new VboutException($ex);
        }
		
       return $result;
    }
	
	public function getOnlineReviews($params = array())
    {	
		
    }
	
	public function getFeedback($params = array())
    {	
		
    }
	
	public function getSentiments($params = array())
    {	
		
    }
	
	public function getStats($params = array())
    {	
		
    }
	
	public function deleteFeedback($params = array())
    {	
		
    }
	
}