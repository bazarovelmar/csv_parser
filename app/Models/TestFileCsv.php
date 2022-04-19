<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestFileCsv extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'code',
        'name',
        'thirst_level',
        'second_level',
        'third_level',
        'third_level',
        'price',
        'price_cp',
        'quantity',
        'property_fields',
        'joint_purchases',
        'unit_of_measurement',
        'picture',
        'in_main_page',
        'description'
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'test_file_csvs';
}
