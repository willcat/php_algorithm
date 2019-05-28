<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/28
 * Time: 13:59
 */

namespace algorithm\level_order_traversal;


class BinaryTree
{

    private $elements = [];

    public function __construct(array $elements)
    {
        $this->elements = $elements;
    }

    /**
     * @param array $elements
     * @return mixed
     */
    public function generateTree()
    {
        $elements = $this->elements;
        $nodes = [];
        for ($i=0; $i<count($elements); $i++) {
            $nodes[$i] = new Node($elements[$i]);
        }

        $root = $nodes[0];

        for ($i=1; $i<count($elements); $i++) {
            $parent = $nodes[ceil($i/2)-1];

            if ($parent == null || $nodes[$i] == '*')
                continue;

            if ($i%2 != 0) {
                $parent->lchild = $nodes[$i];
            } else {
                $parent->rchild = $nodes[$i];
            }
        }

        return $root;
    }
}