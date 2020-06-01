<?php

class TreeNode
{
    private $name;
    private $parents;

    public function __construct(string $name, ?TreeNode $mother=null, ?TreeNode $father=null)
    {
        $this->name = $name;
        $this->parents = [$mother, $father];
    }

    public function getParents()
    {
        return $this->children;
    }

    public function getName()
    {
        return $this->name;
    }
}

$granny = new TreeNode('Georgina');
$grandad = new TreeNode('George');
$grandma = new TreeNode('Josephine');
$grandpa = new TreeNode('Joe');
$mum = new TreeNode('Charlotte', $granny, $grandad);
$dad = new TreeNode('Charles', $grandma, $grandpa);
$me = new TreeNode('Alex', $mum, $dad);
echo '<pre>';
var_dump($me);
echo '</pre>';
