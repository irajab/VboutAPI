<?php

require_once dirname(dirname(__FILE__)) . '/base/Vbout.php';
require_once dirname(dirname(__FILE__)) . '/VboutException.php';

class ApplicationWS extends Vbout 
{
    private $api_url = '/app/';
	
	/**
     * Response type: JSON / XML
     */
	private $api_response = 'json';
	
    public function getBusinessInfo()
    {	
		$result = array();
		
		$this->api_url .= 'me.'.$this->api_response;
		
		try {
			$business = $this->me();

            if ($business != null && isset($business['response'])) {
                $result = array_merge($result, $business['data']['business']);
            }

		} catch (VboutException $ex) {
			throw new VboutException($ex);
        }
		
       return $result;
    }
}