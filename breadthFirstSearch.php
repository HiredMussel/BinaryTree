<?php

require_once 'FamilyTree.php';

function breadthFirstSearch(String $needle, FamilyMember $haystack) {
    $searchArray[] = $haystack;
    if ($haystack->getParents()) {
        $i = 0;
        for ($i; $i < count($searchArray); $i++) {
            echo $searchArray[$i]->getName() . '<br>';
            if ($searchArray[$i]->getName() === $needle) {
                return $searchArray[$i]->getName();
            } else {
                foreach($searchArray[$i]->getParents() as $parent) {
                    $searchArray[] = $parent;
                }
            }
        }
    }
    return NULL;
}

breadthFirstSearch('Joe', $me);