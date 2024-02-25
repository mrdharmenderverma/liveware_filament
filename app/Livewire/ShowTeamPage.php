<?php

namespace App\Livewire;

use App\Models\Member;
use Livewire\Component;

class ShowTeamPage extends Component
{
    public function render()
    {   
        $teams = Member::orderBy('name', 'ASC')->where('status', 1)->get();
        return view('livewire.show-team-page',[
            'teams' => $teams,
        ]);
    }
}
