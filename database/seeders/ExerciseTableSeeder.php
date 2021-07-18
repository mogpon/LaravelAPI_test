<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Exercise;

class ExersiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'ichiro',
            'email' => 'ichiro@example.com',
            'profile' => 'Hello'
        ];
        $exercise = new Exercise();
        $exercise->fill($param)->save();
        $param = [
            'name' => 'jiro',
            'email' => 'jiro@example.com',
            'profile' => 'Goodmorning'
        ];
        $exercise = new Exercise();
        $exercise->fill($param)->save();
        $param = [
            'name' => 'saburo',
            'email' => 'saburo@example.com',
            'profile' => 'Bye'
        ];
        $exercise = new Exercise();
        $exercise->fill($param)->save();
    }
}
