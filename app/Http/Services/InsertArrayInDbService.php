<?php

namespace App\Http\Services;

use App\Models\TestFileCsv;
use Illuminate\Support\Facades\DB;

class InsertArrayInDbService
{
    public static function insertInDb(array $rowElements)
    {
        array_shift($rowElements[0]);
        foreach ($rowElements[0] as $rowItem) {
            $resultItems = explode(';', $rowItem);
            DB::table('test_file_csvs')->insert([
                'code' => $resultItems[0] ?? null,
                'name' => $resultItems[1] ?? null,
                'thirst_level' => $resultItems[2] ?? null,
                'second_level' => $resultItems[3] ?? null,
                'third_level' => $resultItems[4] ?? null,
                'price' => $resultItems[5] ?? null,
                'price_cp' => $resultItems[6] ?? null,
                'quantity' => $resultItems[7] ?? null,
                'property_fields' => $resultItems[8] ?? null,
                'joint_purchases' => $resultItems[9] ?? null,
                'unit_of_measurement' => $resultItems[10] ?? null,
                'picture' => $resultItems[11] ?? null,
                'in_main_page' => $resultItems[12] ?? null,
                'description' => $resultItems[13] ?? null,
            ]);
        }
    }
}
