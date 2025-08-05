<?php

namespace App\Services;


use App\Repositories\PostRepository;

class PostService
{
    protected $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function createPost(array $data): PostInterface
    {
        return $this->postRepository->create($data);
    }

    public function getPostById(int $id): ?PostInterface
    {
        return $this->postRepository->find($id);
    }

    public function updatePost(int $id, array $data): bool
    {
        return $this->postRepository->update($id, $data);
    }

    public function deletePost(int $id): bool
    {
        return $this->postRepository->delete($id);
    }
}