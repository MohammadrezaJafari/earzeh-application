<?php

namespace Application\Entity\ValueObject;




class Title
{
    private $title;
    public function __construct($title)
    {
        if($title == ''){
            throw new \Exception('Title Must be fill');
        }
    }

    public function __toString()
    {
        return $this->title;
    }
}
