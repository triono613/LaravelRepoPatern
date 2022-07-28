<?php


namespace App\Repository\Task;

use App\Models\Task;

interface TaskInterface{
    public function getAllData();
    public function storeOrUpdate($id = null, $data);
    public function view($id);
    public function delete($id);
}










