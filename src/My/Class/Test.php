<?php

declare(strict_types=1);

namespace dossayev\FPackage\My\Class;


class Test
{
    /**
     * Create a new Test Instance
     */
    public function __construct()
    {
        // constructor body
    }

    /**
     * Friendly welcome
     *
     * @param string $phrase Phrase to return
     *
     * @return string Returns the phrase passed in
     */
    public function echoPhrase(string $phrase): string
    {
        return $phrase;
    }

}
