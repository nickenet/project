<?php


namespace App\Http\Controllers;
use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
class ProjectController extends Controller
{

    public function index(){

        $task = Task::all();
        $task2 = Task::all();
        $task3 = Task::all();

        return view('first', [
            'tasks' => $task,
            'tasks2' => $task2,
            'tasks3' => $task3,
        ]);
    }

}
