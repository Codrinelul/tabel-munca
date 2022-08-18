<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class LiveTable extends Controller
{
    function index()
    {
        return view('live_table');
    }

    function fetch_data(Request $request)
    {
        if ($request->ajax()) {
            $data = DB::table('testing')->orderBy('id', 'desc')->get();
            echo json_encode($data);
        }
    }

    function add_data(Request $request)
    {
        if ($request->ajax()) {
            $data = array(
                'name'    =>  $request->name,
                'email'     =>  $request->email,
                'phone'    =>  $request->phone,
                'address'    =>  $request->address,
            );
            $id = DB::table('testing')->insert($data);
            if ($id > 0) {
                echo '<div class="alert alert-success">Data Inserted</div>';
            }
        }
    }

    function update_data(Request $request)
    {
        if ($request->ajax()) {
            $data = array(
                $request->column_name       =>  $request->column_value
            );
            DB::table('testing')
                ->where('id', $request->id)
                ->update($data);
            echo '<div class="alert alert-success">Data Updated</div>';
        }
    }

    function delete_data(Request $request)
    {
        if ($request->ajax()) {
            DB::table('testing')
                ->where('id', $request->id)
                ->delete();
            echo '<div class="alert alert-success">Data Deleted</div>';
        }
    }
}
