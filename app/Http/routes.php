<?php

Route::get("/", [
	"as"	=> "index",
	"uses"	=> "PageviewController@index"
]);

// API
Route::group(["prefix" => "api"], function() {

	Route::get("characters/length", "CardController@length");

	Route::get("character/{id?}", "CardController@character");

	Route::get("form/{id?}", "CardController@form");

	Route::match(["get", "post"], "answer/{id}", "GameController@answer");

	Route::get("next", "GameController@next");

	Route::post("scoreboard", "ScoreboardController@save");

	Route::get("scoreboard", "ScoreboardController@get");

	Route:;get("relatedUsers", "ScoreboardController@getRelatedUsers");

	// Route::get("scoreboard/{username}}", "ScoreboardController@getUserLocation");

});

