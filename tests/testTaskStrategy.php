<?php
require_once '../vendor/autoload.php';
use taskforce\src\TaskStrategy;
use taskforce\src\UserActions;
use taskforce\src\TaskStatuses;

$taskStrategy = new TaskStrategy();
$action = UserActions::ABANDON;
$status = TaskStatuses::COMPLETED;
assert($taskStrategy->getStatusAfterAction($action) === $status, 'Текущее значение $action=' . $action . ': не дает соответствия cтатусу '. $status);
