<?php

namespace App\Http\Services;

use App\Http\Requests\CsvFileRequest;
use Illuminate\Http\Request;

class CsvReaderService
{
    /**
     * @param Request $request
     * @return array
     */
    public static function csvReader($filename)
    {
        if (($handle = fopen(storage_path('app/public/' . $filename), "r")) !== FALSE) {
            $resultArray = '';
            while (($data = fgetcsv($handle)) !== FALSE) {
                for ($c = 0; $c < 14; $c++) {
                    if ($data[$c] != '') {
                        $resultArray .= $data[$c];
                    }
                }
                //Добавляем кастомный разделитель, для того, чтобы правильно поделить элементы
                $resultArray .= 'lineSep';
            }
            fclose($handle);
            $rowElements[] = explode("lineSep", $resultArray);
            return $rowElements;
        }
    }
}
