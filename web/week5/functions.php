<?php

function displayScriptures($scripturesInfo)
{
    $scripturesInfoDisplay = "";
    foreach($scripturesInfo as $scriptureInfo){
        $scripturesInfoDisplay.="<b>$scriptureInfo[book] $scriptureInfo[chapter]:$scriptureInfo[verse]</b> - \" $scriptureInfo[content] \" <br>" ;
    }

    return $scripturesInfoDisplay;
}

function displayTopicList($topicInfo)
{
    $topicInfoDisplay = "<input type='checkbox' name='' id=''>";


}