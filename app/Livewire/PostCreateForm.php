<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Validate;

class PostCreateForm extends Component
{
    #[Validate]
    public $title="";
    #[Validate]
    public $content="";

    public function rules()
    {
        return [
            'title'=>'required|min:3',
            'content' => 'required|min:3',
        ];
    }


    public function messages()
    {
        return [
            'content.required' => 'The :attribute are missing.',
            'content.min' => 'The :attribute is too short.',
        ];
    }


    public function storePost()
    {
$this->validate();

        Post::create([
            'title' => $this->title,
            'content' => $this->content
        ]);
        session()->flash('success','Post inserito correttamente');
        // $this->clearForm();
        $this->reset();
    }

    // protected function clearForm(){
    //     $this->title='';
    //     $this->content='';
    // }

    public function render()
    {
        return view('livewire.post-create-form');
    }
}
