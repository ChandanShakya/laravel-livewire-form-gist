<?php

namespace App\Livewire;

use App\Livewire\Forms\PostForm;
use Livewire\Component;

class CreatePost extends Component
{
    public PostForm $form;

    public function save()
    {
        $this->form->store();
        session()->flash('status', 'Post created!');
        return $this->redirect('/posts');
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}
