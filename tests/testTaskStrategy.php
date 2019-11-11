<?php
require_once '../vendor/autoload.php';
use taskforce\classes\TaskStrategy;
use taskforce\classes\UserActions;
use \taskforce\classes\TaskStatuses;

$taskStrategy = new TaskStrategy();
$action = UserActions::CREATE;
assert($taskStrategy->getStatusAfterAction($action) === TaskStatuses::FAILED, 'Статус "Провалено" при отказе от выполнения');
