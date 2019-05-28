<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/28
 * Time: 13:56
 */

namespace algorithm\level_order_traversal;


class Node
{
    public $lchild = null;
    public $rchild = null;
    public $element = null;

    public function __construct($element)
    {
        $this->element = $element;
    }
}