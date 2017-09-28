<?php

class UserAgentTest extends \PHPUnit\Framework\TestCase  
{
    private $http;
    
        public function setUp()
        {
            $this->http = new GuzzleHttp\Client(['base_uri' => 'http://localhost/']);
        }
    
        public function tearDown() {
            $this->http = null;
        }
        public function testGet()  
        {
            $response = $this->http->request('GET', '/');
        
            $this->assertEquals(200, $response->getStatusCode());
        
            $contentType = $response->getHeaders()["Content-Type"][0];
            $this->assertRegexp("/application\/json/", $contentType);
        }

        public function testGetSingle()  
        {
            $response = $this->http->request('GET', '/1');
        
            $this->assertEquals(200, $response->getStatusCode());
        
            $contentType = $response->getHeaders()["Content-Type"][0];
            $this->assertRegexp("/application\/json/", $contentType);
        }

        public function testAddCsv()  
        {
            $response = $this->http->request('POST', '/', [
                'multipart' => [
                    [
                        'name'     => 'image',
                        'contents' => fopen('./tests/australian_rail.csv', 'r')
                    ]]
            ]);
        
            $this->assertEquals(200, $response->getStatusCode());
        
            $contentType = $response->getHeaders()["Content-Type"][0];
            $this->assertRegexp("/application\/json/", $contentType);
        }          
}