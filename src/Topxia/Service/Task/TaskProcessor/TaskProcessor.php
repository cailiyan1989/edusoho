<?php
namespace Topxia\Service\Task\TaskProcessor;

interface TaskProcessor 
{
	public function addTask(array $fields);

	public function updateUserTasks($userId, $batchId);

	public function finishTask(array $targetObject, $userId);

	public function canFinish($targetId, $userId);
}