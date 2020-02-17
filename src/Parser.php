<?php

namespace viktorvladimirov\parser;

/**
 * @ author Viktor Vladimirov  <viktorvladimirovby1@gmail.com>
 */


class Parser implements ParserInterface {

    public function process(string $tag, string $url): array {
        
        $htmlPage = file_get_contents($url);
        
        if($htmlPage === false) {
            
            return ['Invalid url'];
        }
        
        //regular expression
        
        preg_match_all('/<' . $tag . '.*?>(.*?)<\/' . $tag . '>/s', $htmlPage, $strings);
        
        if(empty($strings[1])){
            return ['There are no such tags on the page'];
        }
        return $strings[1];
    }
    
    public function test(){
        //feature
    }

}
