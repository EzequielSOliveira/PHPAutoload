<?php

require_once (__DIR__ . '/Application/autoload.php');

use \Utility\Debugger;

$outputMessage = new OutputMessage();

$outputMessage->showMessage();

$debugger = new Debugger();

$debugger->debugVariable();
