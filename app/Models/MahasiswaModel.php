<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MahasiswaModel extends Model
{
    public function get_all($table)
    {

        return DB::table($table)->get();
    }

    public function get_where($table, $where)
    {
        return DB::table($table)->where($where)->get();

    }

    public function delete_where($table, $where)
    {

        return DB::table($table)->where($where)->delete();

    }
}