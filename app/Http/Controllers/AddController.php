<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function add(Request $req, $task)
    {
        return $data = DB::insert('INSERT INTO list (id, task) VALUES (NULL, ?)', [$task]);
    }
    public function view(Request $req)
    {
        return $data = DB::select('select * from list');
    }
    public function delete(Request $req, $id)
    {
        return $data = DB::delete('delete from list where id=?', [$id]);
    }
    public function edit(Request $req, $id, $task)
    {
        return $data = DB::update('update list set task=? where id=?', [$task, $id]);
    }
}
