<?php

class Index{
    public function process($image){
        $imageFactory = new ImageFactory();
        $image = $imageFactory->handler($image->type);  
            return $image->process();
    }
    
}

$index = new Index();

$index->process([
    'type' => 'jpg',
    'image' => 'cutecat'
])

?>