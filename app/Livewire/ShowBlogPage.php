<?php

namespace App\Livewire;

use App\Models\Blog;
use App\Models\Category;
use Livewire\Attributes\Url;
use Livewire\Component;

class ShowBlogPage extends Component
{   
    #[Url]
    public $catagorySlug = null;

    public function render()
    {       
        $categoires = Category::all();
        $paginate = 10;

        if (!empty($this->catagorySlug)) {
            $category = Category::Where('slug', $this->catagorySlug)->first();

                if (empty($category)) {
                    abort(404);
                }

            $blogs = Blog::orderBy('created_at', 'DESC')
                    ->where('category_id', $category->id)
                    ->where('status', 1)
                    ->paginate($paginate);
        }else{
            $blogs = Blog::orderBy('created_at', 'DESC')
                    ->where('status', 1)    
                    ->paginate($paginate);
        }

        $latestBlogs = Blog::orderBy('created_at', 'DESC')
                    ->where('status', 1)
                    ->get()
                    ->take(3);

        return view('livewire.show-blog-page', [
            'blogs' => $blogs,
            'categoires' => $categoires,
            'latestBlogs' => $latestBlogs,
        ]);
    }
}
