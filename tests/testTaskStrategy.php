<?php

require_once __DIR__ . '/../vendor/autoload.php';
use taskforce\src\constants\UserActions;
use taskforce\src\constants\TaskStatuses;
use taskforce\src\controllers\TaskStrategyController;

$taskStrategy = new TaskStrategyController();
$action = UserActions::ABANDON;
$status = TaskStatuses::COMPLETED;
assert($taskStrategy->getStatusAfterAction($action) === $status, 'Текущее значение $action=' . $action . ': не дает соответствия cтатусу '. $status);
