<?php

namespace App\Iterator;

/**
 * Class Book.
 */
class Book
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $author;

    /**
     * Book constructor.
     *
     * @param string $title
     * @param string $author
     */
    public function __construct(string $title, string $author)
    {
        $this->title = $title;
        $this->author = $author;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }
}
