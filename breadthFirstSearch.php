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
                    if ($parent) {
                        $searchArray[] = $parent;
                    }
                }
            }
        }
    } else if ($haystack->name === $needle) {
        return $haystack;
    }
    return NULL;
}

var_dump(breadthFirstSearch('Louis', $me));