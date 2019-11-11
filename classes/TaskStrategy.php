<?php
namespace taskforce\classes;

class TaskStrategy
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

    public function getStatusAfterAction()
    {
        return [
            UserActions::CREATE => TaskStatuses::NEW,
            UserActions::CANCEL => TaskStatuses::CANCELED,
            UserActions::START => TaskStatuses::ACTIVE,
            UserActions::COMPLETE => TaskStatuses::COMPLETED,
            UserActions::ABANDON => TaskStatuses::FAILED
        ];
    }


}
