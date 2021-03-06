<?php namespace App\Http\Controllers;

use DB;
use App\Character;
use App\Services\GameService;
use App;

class CardController extends Controller {

	// If this is static will it be shared across sessions?
	protected static $gameService;

	/**
	 * constructs a CardController
	 * @param GameService
	 * @return void
	 */
	public function __construct (GameService $gameService)
	{
		self::$gameService = $gameService;

		//$this->gameService = App::make("GameService");
	}

	/**
	 * Gets the total length of entries as int
	 * @return Response
	 */
	public function length ()
	{
		$lastIndex = Character::all()->count();

		return response()->json($lastIndex);
	}

	/** @return Response */
	public function form ($id = null)
	{

		if (!$id && (string)$id !== "0") {
			$data = Character::with("form")->get();
			//var_dump($data[0]);

		} else {

			$data = Character::find($id)->form;

		}

		return response()->json($data);

	}

	/**
	 * Returns a response containing a single row or all rows
	 * @param {int?} Index
	 * @return Response
	 * */
	public function character ($id = null)
	{
		if ($id === null) {

			$data = Character::all();

		} else {

			$data = Character::find($id);

		}

		self::$gameService->add(response()->json($data));

		return response()->json($data);
	}


}
