<?php

namespace App\Http\Controllers;

use App\Http\Services\CsvReaderService;
use App\Http\Services\InsertArrayInDbService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    /**
     * @param Request $request
     * @return string
     */
    public function upload(Request $request)
    {
        if ($request->isMethod('post')) {
            $file = $request->file('file');
            $upload_folder = 'public';
            $filename = $file->getClientOriginalName();
            Storage::putFileAs($upload_folder, $file, $filename);

            //читаем csv файл
            $rowElements = CsvReaderService::csvReader($filename);
            //записываем его в бд
            InsertArrayInDbService::insertInDb($rowElements);

            return response()->json([
                'success'=>'true'
            ]);

        }
    }
}
