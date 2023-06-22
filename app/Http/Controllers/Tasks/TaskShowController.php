<?php

namespace App\Http\Controllers\Tasks;
use App\Models\Task;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskShowController extends Controller
{
    public function __invoke()
    {
        $taskId = request()->get("taskId");
        $taskInfo = Task::get()->where('id',$taskId);

        return json_encode($taskInfo);

    }
}
