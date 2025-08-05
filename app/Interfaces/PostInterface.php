<?php

namespace App\Interfaces;

use App\Data\Post\Post;
use App\Data\Post\CreatePost;

interface PostInterface
{
    public function create(array $data): CreatePost;

    public function show(int $id): Post;

    public function update(int $id, array $data): bool;

    public function delete(int $id): bool;

    public function all(): array;

    public function find(int $id): ?Post;
}
