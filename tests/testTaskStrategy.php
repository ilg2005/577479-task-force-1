<?php
require_once '../vendor/autoload.php';
use taskforce\src\TaskStrategyController;
use taskforce\src\UserActions;
use taskforce\src\TaskStatuses;

$taskStrategy = new TaskStrategyController();
$action = UserActions::ABANDON;
$status = TaskStatuses::COMPLETED;
assert($taskStrategy->getStatusAfterAction($action) === $status, 'Текущее значение $action=' . $action . ': не дает соответствия cтатусу '. $status);
