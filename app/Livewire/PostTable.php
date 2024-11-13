<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostTable extends Component
{
public function deletePost(Post $post){
$post->delete();
session()->flash('success', 'Post eliminato correttamente');

}

    public function render()
    {
        $posts=Post::all();
        return view('livewire.post-table', compact('posts'));
    }
}
