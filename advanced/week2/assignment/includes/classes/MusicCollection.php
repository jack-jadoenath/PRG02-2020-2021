<?php namespace Advanced\Jack\Albums;

/**
 * Class MusicCollection
 */
class MusicCollection extends Album
{
    private array $albums = [];

    /**
     * @return mixed
     */
    public function getAlbums(): array
    {
        return $this->albums;
    }

    /**
     * @param array $albumRaw
     */
    public function addAlbum(array $albumRaw): void
    {
        $this->albums[] = new Album($albumRaw['name'], $albumRaw['artist'], $albumRaw['genre'], $albumRaw['year'], $albumRaw['tracks']);
    }

    /**
     * @return int
     */
    public function getTotalAlbums(): int
    {
        return count($this->albums);
    }
} 
