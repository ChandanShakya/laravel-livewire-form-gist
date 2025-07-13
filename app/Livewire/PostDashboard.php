<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;

class PostDashboard extends Component
{
    public function render()
    {
        return view('livewire.post-dashboard', [
            'posts' => Post::all(),
        ]);
    }
}
