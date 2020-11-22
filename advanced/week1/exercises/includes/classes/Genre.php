<?php

/**
 * Class Genre
 */
class Genre
{
    public string $name;
   
    /**
     * Genre constructor.
     * @param $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }
}
