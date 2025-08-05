<?php


namespace App\Data\Post;

class Post
{
    public string $title;
    public string $content;
    public function __construct(string $title, string $content)
    {
        $this->title = $title;
        $this->content = $content;
    }


    public static function fromModel(string $title, string $content): self
    {
        return new self(
            title: $title, 
            content: $content
        );
    }
    // Getters for the properties
}