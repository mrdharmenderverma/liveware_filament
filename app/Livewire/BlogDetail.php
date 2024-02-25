<?php

namespace App\Livewire;

use App\Models\Blog;
use Livewire\Component;

class BlogDetail extends Component
{   
    public $blogID = null;
    public   function mount($id){
        $this->blogID = $id;
    }
    public function render()
    {   
        $blog = Blog::with('category')->findorfail($this->blogID);
        return view('livewire.blog-detail',[
            'blog' => $blog,
        ]);
    }
}
