<?php

/**
 * Class Albums
 */

class Albums
{
    public array $albuminfo = [];

    public function getAlbums(): array
    {
        return $this->albuminfo;
    }

    public function addAlbums(array $value): void {
        $this->albuminfo[] = new Albums($value['name'], $value['year'], $value['tracks'], $value['genre'], $value['artist']);
    }

    /**
     * @return int
     */
    public function getTotalAlbums(): int
    {
        return count($this->albuminfo);
    }
}
