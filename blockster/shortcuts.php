<?php
function block($blockName, $params=array(), $imposedTemplate='')
{
    return \blockster\Core::getInstance()->loadBlock($blockName, $params, $imposedTemplate);
}

function execute($blockName, $params=array())
{
    return \blockster\Core::getInstance()->executeAction($blockName, $params);
}

function position($posName)
{
    return \blockster\Core::getInstance()->fillPosition($posName);
}

function restrictAccessLevel($minLevel, $maxLevel=0)
{
    if (
        !isset($_SESSION['user']) ||
        $_SESSION['user']['accessLevel'] < $minLevel ||
        ($maxLevel > 0 && $_SESSION['user']['accessLevel'] > $maxLevel)
    ) {
        \blockster\Core::getInstance()->error403();
    }
}