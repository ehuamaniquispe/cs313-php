<?php

function displayScriptures($scripturesInfo)
{
    $tableScriptures = "";
    foreach($scripturesInfo as $scriptureInfo){
        $tableScriptures.="$scriptureInfo[book]";
    }

    return $tableScriptures;
}