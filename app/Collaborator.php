<?php

namespace App;

class Collaborator{

    protected $collaborator;

    public function __construct(Collaborator $collaborator){

        $this->collaborator = $collaborator;
    }

}