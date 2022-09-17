<?php

namespace App\Http\Livewire\Games;
use App\Models\Game;
use Livewire\Component;

class Edit extends Component
{

    public $gameId;
    public $game_name, $game_type, $size, $series;
    public function mount() {
        $this->game_name = $this->game->game_name;
        $this->game_type = $this->game->game_type;
        $this->size = $this->game->size;
        $this->series = $this->game->series;

    }

    public function editGame() {
        $this->validate([
            'game_name'             =>          ['required', 'string', 'max:255'],
            'game_type'            =>          ['required', 'string', 'max:255'],
            'size'                =>          ['required', 'string', 'max:255'],
            'series'                =>          ['required', 'string', 'max:255'],
        ]);

        
        $this->game->update([
            'game_name'             =>      $this->game_name,
            'game_type'            =>      $this->game_type,
            'size'                =>      $this->size,
            'series'                =>      $this->series,
        ]);

        return redirect('/game')->with('game', 'Updated Successfully');
    }

    public function back() {
        return redirect('/game');
    }
    public function getGameProperty() {
        return Game::find($this->gameId);
    }

    public function render()
    {
        return view('livewire.games.edit');
    }
}
