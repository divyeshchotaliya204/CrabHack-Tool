<?php

namespace Database\Seeders;

use App\Models\FirmSize;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FirmSizeSeeder extends Seeder
{
    private $sizes = [
        ['min' => 1, 'max' => 1],
        ['min' => 2, 'max' => 4],
        ['min' => 5, 'max' => 9],
        ['min' => 10, 'max' => 19],
        ['min' => 20, 'max' => 99],
        ['min' => 100, 'max' => 500],
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->sizes as $value) {
            FirmSize::create($value);
        }
    }
}
