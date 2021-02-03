<?php

require 'Communication.php';
require 'CommObserver.php';

    $post = 'Hello PHP!';

    $added_post = new Communication;
    $added_post->post($post);
    $added_post->attach(new CommObserver);
    echo nl2br("Communication Started \n");
    $added_post->notify();

    echo nl2br("Communication Finished\n");

?>