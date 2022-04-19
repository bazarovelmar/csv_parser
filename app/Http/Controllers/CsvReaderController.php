<?php

namespace App\Http\Controllers;

use App\Http\Services\InsertArrayInDbService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CsvReaderController extends Controller
{
    public function csvReader(Request $request)
    {
        if (($handle = fopen(storage_path('app/public/1.csv'), "r")) !== FALSE) {
            $resultArray = '';
            while (($data = fgetcsv($handle)) !== FALSE) {
                for ($c = 0; $c < 14; $c++) {
                    if ($data[$c] != '') {
                        $resultArray .= $data[$c];
                    }
                }
                //Line separator
                $resultArray .= 'lineSep';
            }
            fclose($handle);
            $rowElements[] = explode("lineSep", $resultArray);
            return InsertArrayInDbService::insertInDb($rowElements);
        }
    }
}
