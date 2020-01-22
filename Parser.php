<?php

require_once 'ParserInterface.php';

/**
 * @author Victor Zinchenko <zinchenko.us@gmail.com>
 */
class Parser implements ParserInterface
{

    public function process(string $url, string $tag)
    {
        return [
            'just',
            'do',
            'it',
            'Yes!',
            'Parser',
            'Ready'
        ];
    }

}
