<?php

/**
 * Copyright (c) 2014 Keith Casey
 *
 * This code is designed to accompany the lynda.com video course "Design Patterns in PHP"
 *   by Keith Casey. If you've received this code without seeing the videos, go watch the
 *   videos. It will make way more sense and be more useful in general.
 */

include_once 'actions/DefaultAction.php';
include_once 'actions/GreetingViewAction.php';
include_once 'domains/greeting.php';
include_once 'responders/DefaultResponse.php';
include_once 'responders/GreetingViewResponse.php';


$action = isset($_GET['a']) ? $_GET['a'] : 'index';
$domain = isset($_GET['m']) ? $_GET['m'] : '';

switch($domain) {
    case 'greeting':
        $controller = new GreetingViewAction();
        break;
    default:
        $controller = new DefaultAction();
}

$controller->run($action);