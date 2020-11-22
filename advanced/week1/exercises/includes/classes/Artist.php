<?php

/**
 * Class Artist
 */
class Artist
{
    public string $name;

    /**
     * Student constructor.
     * @param $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }
}
