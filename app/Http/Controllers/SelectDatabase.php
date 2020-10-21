<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SelectDatabase extends Controller
{
    public function select($table)
    {
        $database = DB::table($table)->latest()->get();

        $nameColumn = DB::select('DESCRIBE '. $table);

        //dd($nameColumn);
        return view('database.select', compact('database', 'nameColumn'));
    }

    public function index()
    {
        $databases = DB::select('SHOW TABLES');
        return view('database.index', compact('databases'));
    }
}
