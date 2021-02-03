<?php

class CommObserver implements SplObserver{

    public function update(SplSubject $subject)
    {
        echo nl2br(" Someone posted " . $subject->post_text . "\n");
    }
}

?>