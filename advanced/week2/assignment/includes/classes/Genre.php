<?php namespace classes;


class Genre
{
    public string $genre;

    /**
     * @return string
     */
    public function displayGenre(): string
    {
        return $this->genre;
    }
}