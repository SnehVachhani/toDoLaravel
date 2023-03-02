<?php

namespace App\Http\Controllers;

use App\Http\Resources\ToDoRes;
use Illuminate\Http\Request;
use App\Models\Task;

use function PHPSTORM_META\map;

class TasksController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function add(Request $req)
    {
        $toAdd = $req->get('task');
        $task = new Task;
        $task->task = $toAdd;
        $tre = ['status' => $task->save()];
        return $tre;
    }
    public function delete(Request $req)
    {
        $toDelete = $req->get('id');
        $data = Task::find($toDelete)->delete();
        $tre = ['status' => $data];
        return $tre;
    }
    public function edit(Request $req)
    {
        $idToEdit = $req->get('id');
        $newTask = $req->get('newTask');
        $data = Task::find($idToEdit);
        $data->task = $newTask;
        $tre = ['status' => $data->save()];
        return $tre;
    }
    public function setStart(Request $req)
    {
        $id = $req->get('id');
        $time = $req->get('time');
        $data = Task::find($id);
        $data->start = $time;
        $tre=[ 'status' => $data->save() ];
        return $tre;
    }
    public function setFinish(Request $req)
    {
        $id = $req->get('id');
        $time = $req->get('time');
        $data = Task::find($id);
        $data->finish = $time;
        $tre=[ 'status' => $data->save() ];
        return $tre;
    }
    public function view(Request $req)
    {
        $toSearch = $req->get('params');
        $tRee = Task::where('task', 'like', '%' . $toSearch . '%')->get();
        return $tRee;
    }
}
