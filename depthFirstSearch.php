<?php

require_once 'FamilyTree.php';

function depthFirstSearch(string $needle, FamilyMember $haystack) {
    echo $haystack->getName() . '<br>';
    if ($needle === $haystack->getName()) {
        return $haystack;
    } else {
        foreach($haystack->getParents() as $parent) {
            if ($parent) {
                depthFirstSearch($needle, $parent);
            }
        }
    }
    return NULL;
}

depthFirstSearch('Joe', $me);