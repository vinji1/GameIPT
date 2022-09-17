<?php

namespace App\Http\Livewire\Games;

use Livewire\Component;
use App\Models\Game;
class Delete extends Component
{

    public $gameId;
    public function getGameProperty() {
        return Game::select('id', 'game_name', 'game_type', 'size', 'series')
            ->find($this->gameId);
    }

    public function delete() {
        $this->game->delete();

        return redirect('/game')->with('message', 'Deleted Successfully');
    }

    public function back() {
        return redirect('/game');
    }
    public function render()
    {
        return view('livewire.games.delete');
    }
}
