<?php

namespace App\Livewire;

use App\Models\Member;
use Livewire\Component;

class ShowTeamPage extends Component
{
    public function render()
    {   
        $teams = Member::orderBy('name', 'ASC')->get();
        return view('livewire.show-team-page',[
            'teams' => $teams,
        ]);
    }
}
