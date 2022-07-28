<?php


namespace App\Repository\Task;
use App\Models\Task;

use function is;
use function is_null;


class TaskRepository implements TaskInterface{

    public function getAllData()
    {
            return Task::latest()->get();
    }
    public function storeOrUpdate($id = null, $data)
    {
            if( is_null($id)) {
                $task = new Task();
                $task->name = $data['name'];
                $task->status = $data['status'];
                $task->description = $data['description'];
                return $task->save();
                
            }    else {
                $task = Task::find($id);
                $task->name = $data['name'];
                $task->status = $data['status'];
                $task->description = $data['description'];
                return $task->save();
            }
    }

    public function view($id)
    {
        return Task::find($id);
    }

    public function delete($id)
    {
        return Task::find($id)->delete();
    }

}











