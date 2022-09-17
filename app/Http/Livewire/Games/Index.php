<?php

namespace App\Http\Livewire\Games;

use Livewire\Component;
use App\Models\Game;

class Index extends Component
{

    public function loadGames() {
        $games = Game::orderBy('game_name')->get();

        return compact('games');
    }

    public function render()
    {
        return view('livewire.games.index', $this->loadGames());
    }
}
