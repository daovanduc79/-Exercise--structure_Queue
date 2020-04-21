<?php
include_once 'class/Node.php';
include_once 'class/Queue.php';

$queue = new Queue();
try {

    $queue->enqueue(3);
    $queue->enqueue(4);
    $queue->enqueue(5);
    var_dump($queue->printByValue());

    $queue->dequeue();
    $queue->dequeue();
    var_dump($queue->printByValue());

    if ($queue->isEmpty()) {
        echo 'Queue is empty!' . '<br>';
    } else {
        echo "Queue isn't empty." . '<br>';
    }

    $queue->enqueue(8);
    $queue->enqueue(9);
    var_dump($queue->printByValue());

    $queue->dequeue();
    $queue->dequeue();
    echo $queue->dequeue()->getValue();
    var_dump($queue->printByValue());
    echo $queue->getCountNode();

    if ($queue->isEmpty()) {
        echo 'Queue is empty!' . '<br>';
    } else {
        echo "Queue isn't empty." . '<br>';
    }
} catch (Exception $exception) {
    echo $exception->getMessage();
}
var_dump($queue->printByValue());