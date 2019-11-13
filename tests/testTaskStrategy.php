<?php

require_once __DIR__ . '/../vendor/autoload.php';
use taskforce\constants\UserActions;
use taskforce\constants\TaskStatuses;
use taskforce\controllers\TaskStrategyController;

$taskStrategy = new TaskStrategyController();
$action = UserActions::ABANDON;
$status = TaskStatuses::COMPLETED;
assert($taskStrategy->getStatusAfterAction($action) === $status, 'Текущее значение $action=' . $action . ': не дает соответствия cтатусу '. $status);
