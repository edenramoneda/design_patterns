<?php

class Communication implements SplSubject
{
    protected $observers = [];

    public $post_text;

    // public function __construct($post){
    //     $this->post = $post;
    // }

    public function post($post_text){
        $this->post_text = $post_text;
    }


    //Add Observer
    public function attach(SplObserver $observer){
        $key = spl_object_hash($observer);
        $this->observers[$key] = $observer;
        return $this;
    }


    public function detach(SplObserver $observer){
        $key = spl_object_hash($observer);
        unset($this->observers[$key]);
    }

    //go through each observer and fire update() method on them
    public function notify(){
        foreach($this->observers as $observer){
            $observer->update($this);
            echo nl2br("Loading... \n");
        }
    }
}

?>