<?php

require_once 'FamilyTree.php';

function depthFirstSearch(string $needle, FamilyMember $haystack) {
    echo $haystack->getName() . '<br>';
    if ($needle === $haystack->getName()) {
        return true;
    } else {
        foreach($haystack->getParents() as $parent) {
            if ($parent) {
                depthFirstSearch($needle, $parent);
            }
        }
    }
    return false;
}

depthFirstSearch('Joe', $me);