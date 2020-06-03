<?php

require_once 'FamilyTree.php';

function breadthFirstSearch(String $needle, FamilyMember $haystack) {
    $searchArray[] = $haystack;
    if ($haystack->getParents()) {
        for ($i = 0; $i < count($searchArray); $i++) {
            echo $searchArray[$i]->getName() . '<br>';
            if ($searchArray[$i]->getName() === $needle) {
                return $searchArray[$i];
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