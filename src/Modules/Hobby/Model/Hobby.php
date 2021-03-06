<?php

declare(strict_types=1);

namespace App\Modules\Hobby\Model;

class Hobby
{
    private int $id;
    private string $title;
    private string $text;

    public function __construct(string $title, string $text)
    {
        $this->title = $title;
        $this->text = $text;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getText(): string
    {
        return $this->text;
    }
}