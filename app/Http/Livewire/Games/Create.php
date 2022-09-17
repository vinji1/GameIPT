<?php

namespace App\Http\Livewire\Games;

use Livewire\Component;
use App\Models\Game;

class Create extends Component
{
    public $game_name, $game_type, $size, $series;

    public function addGame() {
        $this->validate([
            'game_name'             =>          ['required', 'string', 'max:255'],
            'game_type'            =>          ['required', 'string', 'max:255'],
            'size'                =>          ['required', 'string', 'max:255'],
            'series'                =>          ['required', 'string', 'max:255'],
        ]);

        Game::create([
            'game_name'             =>      $this->game_name,
            'game_type'            =>      $this->game_type,
            'size'                =>      $this->size,
            'series'                =>      $this->series,
        ]);

        return redirect('/game')->with('game', 'Added Successfully');
    }

   


    public function render()
    {
        return view('livewire.games.create');
    }
}
