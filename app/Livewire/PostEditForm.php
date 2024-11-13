<?php

namespace App\Livewire;

use Livewire\Component;

class PostEditForm extends Component
{
    public $title;
    public $content;
    public $post;



public function editPost(){
$this->post->update(
    ['title'=>$this->title,
    'content'=>$this->content]
);
session()->flash('success', 'Post modificato con successo');
}


// mount
public function mount(){
$this->title=$this->post->title;
$this->content=$this->post->content;

}

    public function render()
    {
        return view('livewire.post-edit-form');
    }
}
