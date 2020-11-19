<?php
namespace taskforce\controllers;

use taskforce\constants\TaskStatuses;
use taskforce\constants\UserActions;
use taskforce\constants\UserRoles;

class TaskStrategyController
{
    private $workerId;
    private $customerId;
    private $deadline;
    private $activeStatus;

    public function getTaskStatuses()
    {
        return [
            TaskStatuses::NEW => 'Новое',
            TaskStatuses::CANCELED => 'Отменено',
            TaskStatuses::ACTIVE => 'В работе',
            TaskStatuses::COMPLETED => 'Выполнено',
            TaskStatuses::FAILED => 'Провалено'
        ];
    }

    
    public function getUserRoles() {
        return [
            UserRoles::CUSTOMER => 'Заказчик',
            UserRoles::WORKER => 'Исполнитель'
        ];
        
    }
    

    public function getUserActions() {
        return [
            UserActions::CREATE => 'Создать',
            UserActions::CANCEL => 'Отменить',
            UserActions::START => 'Начать',
            UserActions::COMPLETE => 'Завершить',
            UserActions::RESPOND => 'Ответить',
            UserActions::ABANDON => 'Отказаться'
        ];
    }

    public function getStatusAfterAction($action)
    {
        switch ($action) {
            case UserActions::CREATE:
                $status = TaskStatuses::NEW;
                break;
            case UserActions::CANCEL:
                $status = TaskStatuses::CANCELED;
                break;
            case UserActions::START:
                $status = TaskStatuses::ACTIVE;
                break;
            case UserActions::COMPLETE:
                $status = TaskStatuses::COMPLETED;
                break;
            case UserActions::ABANDON:
                $status = TaskStatuses::FAILED;
                break;
            default:
                $status = false;
                break;
        }
        return $status;
    }


}
