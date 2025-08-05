<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Data\Post\CreatePost;


class StorePostRequest extends FormRequest
{
  
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ];
    }

    public function bodyParameters(): array
    {
        return [
            'title' => $this->input('title'),
            'content' => $this->input('content'),
        ];
    }

    public function toData(): CreatePost
    {
        return new CreatePost(
            title: $this->input('title'),
            content: $this->input('content')
        );

    }
}
