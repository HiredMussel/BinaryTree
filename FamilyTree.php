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

$gg1 = new FamilyMember('Harriet');
$gg2 = new FamilyMember('Harry');
$gg3 = new FamilyMember('Mary');
$gg4 = new FamilyMember('Mark');
$gg5 = new FamilyMember('Francis');
$gg6 = new FamilyMember('Francine');
$gg7 = new FamilyMember('Lois');
$gg8 = new FamilyMember('Louis');
$granny = new FamilyMember('Georgina', $gg1, $gg2);
$grandad = new FamilyMember('George', $gg3, $gg4);
$grandma = new FamilyMember('Josephine', $gg5, $gg6);
$grandpa = new FamilyMember('Joe', $gg7, $gg8);
$mum = new FamilyMember('Charlotte', $granny, $grandad);
$dad = new FamilyMember('Charles', $grandma, $grandpa);
$me = new FamilyMember('Alex', $mum, $dad);