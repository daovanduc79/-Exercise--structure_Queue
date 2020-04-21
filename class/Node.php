<?php


class Node
{
    protected $value;
    protected $next;

    public function __construct($value)
    {
        $this->value = $value;
        $this->next = null;
    }

}