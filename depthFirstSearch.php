<?php

require_once 'FamilyTree.php';

function depthFirstSearch(string $needle, FamilyMember $haystack) {
    $toReturn = NULL;
    echo $haystack->getName() . '<br>';
    if ($needle === $haystack->getName()) {
        return $haystack;
    } else {
        foreach($haystack->getParents() as $parent) {
            if ($parent) {
                $toReturn = (depthFirstSearch($needle, $parent) ?? $toReturn);
            }
        }
    }
    return $toReturn;
}

var_dump(depthFirstSearch('Joe', $me));