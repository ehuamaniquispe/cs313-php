<?php

function displayScriptures($scripturesInfo)
{
    $tableScriptures = "";
    foreach($scripturesInfo as $scriptureInfo){
        $tableScriptures.="<b>$scriptureInfo[book] $scriptureInfo[chapter] : $scriptureInfo[verse]</b> - $scriptureInfo[content]";
    }

    return $tableScriptures;
}