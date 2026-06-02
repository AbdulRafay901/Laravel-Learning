<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TaskService;

class serviceLayerController extends Controller
{
    protected $taskService;

    public function __construct(TaskService $taskService)
    {
        $this->taskService = $taskService;
    }

    public function serviceLayer()
    {
        $message = $this->taskService->hello();

        return $message;
    }

    public function serviceLayer2()
    {
        return $this->taskService->serviceLayer2();
    }
}
