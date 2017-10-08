<?php

namespace App\Http\Controllers;

class GuzzleController extends Controller
{
    /**
     * sends HTTP request through Guzzle Http client
     *
     * @param String $url
     * @param String $method
     * @param array $data
     */
    public function request(String $url, String $method, array $data = null)
    {
    	$client = new \GuzzleHttp\Client();
		return $client->request($method, $url);
    }
}
