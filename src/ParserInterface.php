<?php

namespace viktorvladimirov\parser;
/**
 * @ author Viktor Vladimirov  <viktorvladimirovby1@gmail.com>
 */

interface ParserInterface
{
    /**
     * @param string $url
     * @param string $tag
     * @return array 
     */
    
    public function process(string $url, string $tag): array;
}