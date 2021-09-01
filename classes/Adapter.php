<?php

class Adapter extends Target
{
    private Adaptee $adaptee;

    public function __construct(Adaptee $adaptee)
    {
        $this->adaptee = $adaptee;
    }

    public function request(): string
    {
        return 'Adapter: (Translation): ' . strrev($this->adaptee->specificRequest());
    }
}
