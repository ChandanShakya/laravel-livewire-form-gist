<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Database\Eloquent\Collection;

class PostCount extends Component
{
    public Collection $posts;

    public function render()
    {
        return view('livewire.post-count', [
            'count' => $this->posts->count(),
        ]);
    }
}
