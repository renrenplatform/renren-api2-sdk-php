<?php
require_once '../rennclient/RennClientBase.php';

require_once 'PHPUnit/Framework/TestCase.php';

/**
 * RennClientBase test case.
 */
class RennClientBaseTest extends PHPUnit_Framework_TestCase {
	const API_KEY = "fee11992a4ac4caabfca7800d233f814";
	const SECRET_KEY = "a617e78710454b12aab68576382e8e14";
	public function testAuthWithMACToken() {
		$accessToken = new AccessToken ( TokenType::MAC, "227720|2.K0UHjna9hjyGJiI5bH1IQhogPlKDVXJQ.318782080.1361525465413", null, "38c7412e45d34cf2b7b163b797706a14", "hmac-sha-1" );
		$client = new RennClientBase ( self::API_KEY, self::SECRET_KEY );
		$client->authWithToken ( $accessToken );
		
		$queryParams = array ();
		$queryParams ['userId'] = 222209506;
		$response = $client->execute ( "/v2/user/get", "GET", $queryParams );
		
		$this->assertEquals ( 222209506, $response ['id'] );
	}
	public function testAuthWithBearerToken() {
		$accessToken = new AccessToken ( TokenType::Bearer, "127089|6.b28878abaa86850658c31dba16a4c366.2592000.1364457600-318782080", null, null, null );
		$client = new RennClientBase ( self::API_KEY, self::SECRET_KEY );
		$client->authWithToken ( $accessToken );
		
		$queryParams = array ();
		$queryParams ['userId'] = 222209506;
		$response = $client->execute ( "/v2/user/get", "GET", $queryParams );
		
		$this->assertEquals ( 222209506, $response ['id'] );
	}
	public function testAuthWithAuthorizationCode() {
		// https://graph.renren.com/oauth/authorize?client_id=bb787da6f7b242fe8a3dfb17e4b221c5&response_type=code&redirect_uri=http://graph.renren.com/oauth/login_success.html
		// $code = "KlwGK2zJdXrQD5JoTaJSgiqpdhGLsntW";
		// $client = new RennClientBase ( self::API_KEY, self::SECRET_KEY );
		// $client->authWithAuthorizationCode($code, "http://graph.renren.com/oauth/login_success.html");
		
		// $queryParams = array ();
		// $queryParams ['userId'] = 222209506;
		// $response = $client->execute ( "/v2/user/get", "GET", $queryParams );
		
		// $this->assertEquals ( 222209506, $response ['id'] );
	}
	public function testAuthWithClientCredentials() {
		$client = new RennClientBase ( self::API_KEY, self::SECRET_KEY );
		$client->authWithClientCredentials ();
		
		$queryParams = array ();
		$queryParams ['userId'] = 222209506;
		$response = $client->execute ( "/v2/user/get", "GET", $queryParams );
		
		$this->assertEquals ( 222209506, $response ['id'] );
	}
	public function testAuthWithResourceOwnerPassword() {
		$client = new RennClientBase ( self::API_KEY, self::SECRET_KEY );
		$client->authWithResourceOwnerPassword ( "Opi.test1@foxmail.com", "Opi.test" );
		
		$queryParams = array ();
		$queryParams ['userId'] = 222209506;
		$response = $client->execute ( "/v2/user/get", "GET", $queryParams );
		
		$this->assertEquals ( 222209506, $response ['id'] );
	}
}

