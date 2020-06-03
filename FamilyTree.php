<?php

class FamilyMember
{
    private $name;
    private $parents;

    public function __construct(string $name, ?FamilyMember $mother=null, ?FamilyMember $father=null)
    {
        $this->name = $name;
        $this->parents = ['Mother'=>$mother, 'Father'=>$father];
    }

    public function getParents()
    {
        return $this->parents;
    }

    public function getName()
    {
        return $this->name;
    }
}

$granny = new FamilyMember('Georgina');
$grandad = new FamilyMember('George');
$grandma = new FamilyMember('Josephine');
$grandpa = new FamilyMember('Joe');
$mum = new FamilyMember('Charlotte', $granny, $grandad);
$dad = new FamilyMember('Charles', $grandma, $grandpa);
$me = new FamilyMember('Alex', $mum, $dad);