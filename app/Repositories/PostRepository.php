<?php

namespace App\Repositories;

use App\Interfaces\PostInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostRepository implements PostInterface
{

    public function create(array $data): CreatePost
    {
        $post = new Post();
        $post->title = $data['title'];
        $post->content = $data['content'];
        $post->save();
        return 'post yaratildi';
    }

    public function show(int $id): Post
    {
        return Post::findOrFail($id);
    }
    public function update(int $id, array $data): bool
    {
        $post = Post::findOrFail($id);
        $post->title = $data['title'];
        $post->content = $data['content'];
        return $post->save();
    }
    public function delete(int $id): bool
    {
        $post = $this->find($id);
        return $post->delete();
    }

    public function all(): array
    {
        return Post::all()->toArray();
    }

    public function find(int $id): ?Post
    {
        return Post::find($id);
    }   
    
}