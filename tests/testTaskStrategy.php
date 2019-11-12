<?php
require_once '../vendor/autoload.php';
use taskforce\classes\TaskStrategy;
use taskforce\classes\UserActions;
use taskforce\classes\TaskStatuses;

$taskStrategy = new TaskStrategy();
$action = UserActions::ABANDON;
$status = TaskStatuses::COMPLETED;
assert($taskStrategy->getStatusAfterAction($action) === $status, 'Текущее значение $action=' . $action . ': не дает соответствия cтатусу '. $status);
