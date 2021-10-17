<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Player\CreatePlayerRequest;
use App\Http\Resources\PlayerResource;
use App\Models\Player;
use Illuminate\Http\Request;

class PlayerApiController extends Controller
{
    public function index() {
        $players = Player::all();
        return PlayerResource::collection($players);
    }

    public function store(CreatePlayerRequest $request) {
        $validated = $request->validated();
        $player = Player::create($validated);
        return $player;
    }

}
