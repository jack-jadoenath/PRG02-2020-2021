<?php namespace Advanced\Jack\Albums;


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