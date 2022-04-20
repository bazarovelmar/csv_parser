<?php

namespace App\Http\Controllers;

use App\Models\TestFileCsv;
use Illuminate\Http\Request;

class ViewTableController extends Controller
{
    public function table()
    {
        $csvFiles = TestFileCsv::all();
        return view('table', [
            "csvFiles" => $csvFiles
        ]);
    }
}
