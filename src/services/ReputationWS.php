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
		$result = array();
		
		$this->api_url .= 'online.'.$this->api_response;
		
		try {
			$reviews = $this->online($params);

            if ($reviews != null && isset($reviews['response'])) {
                $result = array_merge($result, $reviews['data']['reviews']['items']);
            }

		} catch (VboutException $ex) {
			throw new VboutException($ex);
        }
		
       return $result;
    }
	
	public function getFeedback($params = array())
    {	
		$result = array();
		
		$this->api_url .= 'getfeedack.'.$this->api_response;
		
		try {
			$review = $this->getfeedack($params);

            if ($review != null && isset($review['response'])) {
                $result = array_merge($result, $review['data']['item']);
            }

		} catch (VboutException $ex) {
			throw new VboutException($ex);
        }
		
       return $result;
    }
	
	public function getSentiments($params = array())
    {	
		$result = array();
		
		$this->api_url .= 'sentiment.'.$this->api_response;
		
		try {
			$sentiment = $this->sentiment($params);

            if ($sentiment != null && isset($sentiment['response'])) {
                $result = array_merge($result, $sentiment['data']);
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
                $result = array_merge($result, $stats['data']['stats']);
            }

		} catch (VboutException $ex) {
			throw new VboutException($ex);
        }
		
       return $result;
    }
	
	public function deleteFeedback($params = array())
    {	
		$result = array();
		
		$this->api_url .= 'deletefeedback.'.$this->api_response;
		
		try {
			$this->deletefeedback($params);
		} catch (VboutException $ex) {
			throw new VboutException($ex);
        }
		
       return $result;
    }
	
}