<?php

namespace App;

class Example
{
    protected $collaborator;

    protected $foo;

    public function _construct(Collaborator $collaborator, $foo){

        $this->collaborator = $collaborator;
        $this->foo = $foo;
    }

    

}