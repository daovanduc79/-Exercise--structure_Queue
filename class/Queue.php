<?php


class Queue
{
    protected $front;
    protected $back;
    protected int $count;

    public function __construct()
    {
        $this->front = null;
        $this->back = null;
        $this->count = 0;
    }

    public function getCountNode()
    {
        return $this->count;
    }

    public function isEmpty()
    {
        return $this->count == 0;
    }

    public function enqueue($data)
    {
        $newNode = new Node($data);
        $this->back->next = $newNode;
        $newNode->next = null;
        $this->back = $newNode;
        if ($this->front == null) {
            $this->front = $newNode;
        }
        $this->count++;
    }

    public function dequeue()
    {
        if ($this->front != null) {
            $currentNode = $this->front;
            $this->front = $currentNode->next;
            $this->count--;
            return $currentNode;
        } else {
            $this->back = null;
            throw new Exception('Queue is empty!');
        }
    }

    public function printByValue()
    {
        $arrayData = [];
        $currentNode = $this->front;
        while ($currentNode != null) {
            array_push($arrayData, $currentNode->getValue());
            $currentNode = $currentNode->next;
        }
        return $arrayData;
    }
}