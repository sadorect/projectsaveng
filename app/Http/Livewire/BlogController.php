<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Post;

class BlogController extends Component
{

    use WithFileUploads;

    public $postId;
    public $title;
    public $content;
    public $summary;
    public $image;

    public function render()
    {   $posts = Post::all();
        return view('livewire.admin.blog.blog-index', compact('posts'));
    }

    public function addPost()
    {   
        return view('livewire.admin.blog.blog-create');
    }

    public function create()
    {
        $this->validate([
            'title' => 'required',
            'content' => 'required',
            'summary' => 'required',
            'image' => 'nullable|image|max:2048', // Optional image upload with max size of 2MB
        ]);

        $imagePath = null;
        if ($this->image) {
            $imagePath = $this->image->store('images', 'public');
        }

        Post::create([
            'title' => $this->title,
            'content' => $this->content,
            'summary' => $this->summary,
            'image_path' => $imagePath,
        ]);

        $this->resetForm();
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $this->postId = $post->id;
        $this->postId = $post->id;
        $this->summary = $post->summary;
        $this->content = $post->content;
    }

    public function update()
    {
        $this->validate([
            'title' => 'required',
            'content' => 'required',
            'summary' => 'required',
            'image' => 'nullable|image|max:2048', // Optional image upload with max size of 2MB
        ]);

        $post = Post::findOrFail($this->postId);

        if ($this->image) {
            // Delete old image if it exists
            if ($post->image_path) {
                unlink(public_path('storage/' . $post->image_path));
            }

            $imagePath = $this->image->store('images', 'public');
            $post->image_path = $imagePath;
        }

        $post->title = $this->title;
        $post->summary = $this->summary;
        $post->content = $this->content;
        $post->save();

        $this->resetForm();
    }

    public function delete($id)
    {
        $post = Post::findOrFail($id);

        // Delete the image if it exists
        if ($post->image_path) {
            unlink(public_path('storage/' . $post->image_path));
        }

        $post->delete();
    }

    private function resetForm()
    {
        $this->postId = null;
        $this->title = '';
        $this->summary = '';
        $this->content = '';
        $this->image = null;
    }
}
