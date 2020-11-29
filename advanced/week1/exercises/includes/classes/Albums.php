<?php

/**
 * Class Albums
 */

class Albums
{
    public array $albumInfo = [];

    public function getAlbums(): array
    {
        return $this->albumInfo;
    }

    public function addAlbums(array $albumRaw): void {
        $this->albumInfo[] = new Albums($albumRaw['id'], $albumRaw['name'], $albumRaw['year'], $albumRaw['tracks'], $albumRaw['genre'], $albumRaw['artist']);
    }

    /**
     * @return int
     */
    public function getTotalAlbums(): int
    {
        return count($this->albumInfo);
    }
}
