<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/28
 * Time: 15:15
 */

require __DIR__.'/vendor/autoload.php';
use algorithm\level_order_traversal\BinaryTree;

$tree = (new BinaryTree(['A','B','C','D','*','E','F','G','H','*','*','I','J','K','L']))->generateTree();

function level_order_traversal($root)
{
    $queue = [];
    $queue[] = $root;

    while(!empty($queue)) {
        $node = array_shift($queue);

        echo $node->element.PHP_EOL;

        if ($node->lchild)
            array_push($queue, $node->lchild);

        if ($node->rchild)
            array_push($queue, $node->rchild);
    }
}

level_order_traversal($tree);