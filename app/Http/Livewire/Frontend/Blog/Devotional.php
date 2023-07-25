<?php

namespace App\Http\Livewire\Frontend\Blog;

use Livewire\Component;

class Devotional extends Component
{
    public function show()
    {
        return view('livewire.frontend.blog.devotional');
    }

    public function showDetail()
    {
        return view('livewire.frontend.blog.devotionalDetail');
    }
}
