<?php

//use \App\Services\GameService;

class CardControllerTest extends TestCase {

	//private $gameService;
	//private $cardController;

	public function setUp ()
	{
		parent::setUp();
		//$this->gameService = Mockery::mock("GameService");
		//$this->app->instance("\App\Services\GameService",
		//	$this->gameService);
		//App::instance("GameService", $this->gameService);

		// Error: must be an instance of GameService, instance of
		// Mockery_0__GameService given
		//$this->cardController = new CardController($this->gameService);
	}

	public function tearDown ()
	{
		//Mockery::close();
		parent::tearDown();
	}

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testGetLength ()
	{
		$response = $this->call('GET', '/api/characters/length');

		$this->assertEquals(200, $response->getStatusCode());
	}

	/**
 	 * Should get a character
	 * @return void
	 */
	public function testGetCharacterReference ()
	{
		$response = $this->call("GET", "/api/character/1");
		$this->assertEquals(200, $response->getStatusCode());
	}

	/**
	 * Should get all characters
	 * @return void
	 */
	public function testGetAllCharacterReferences ()
	{
		$response = $this->call("GET", "/api/character");
		$this->assertEquals(200, $response->getStatusCode());
	}


	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testGetSingleForm ()
	{
		$response = $this->call('GET', '/api/form/0');
		$this->assertEquals(200, $response->getStatusCode());
	}

	/**
	 * Get all forms
	 * @return void
	 */
	public function testGetAllForms ()
	{
		$response = $this->call("get", "/api/form");
		$this->assertEquals(200, $response->getStatusCode());
	}

	/**
	 * Should update GameService with values
	 * @return void
	 */
	/*public function testCallGameService ()
	{

		//$this->cardController = new CardController($this->gameService);
		$this->gameService->shouldReceive("add")->once()->andReturn(array());
		$this->call("GET", "/api/character");
		$this->action("GET", "CardController@character");

		//$this->gameService->add(1234);

		//$this->assertGreaterThan(0, $this->gameService->countRemaining());
	}*/
}
