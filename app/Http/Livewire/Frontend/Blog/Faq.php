<?php

namespace App\Http\Livewire\Frontend\Blog;

use Livewire\Component;

class Faq extends Component
{
    public function show()
    {
        return view('livewire.frontend.blog.faq');
    }

    public function showDetail()
    {
        return view('livewire.frontend.blog.faqDetail');
    }
}
