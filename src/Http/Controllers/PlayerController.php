<?php

namespace Aecy\A3Player\Http\Controllers;

use Aecy\A3Player\Player;
use App\Http\Controllers\Controller;

class PlayerController extends Controller
{
	public function index()
	{
		$players = Player::all();
		return view('a3player::index', compact('players'));
	}
}