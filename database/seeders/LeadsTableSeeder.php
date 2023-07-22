<?php

namespace Database\Seeders;

use App\Models\Lead;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PhpParser\Node\Expr\PostDec;

class LeadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts=[
            [
                'first_name'=> 'Ram',
                'last_name'=> 'Kumar',
                'postcode'=>123,
            ],
        
           [
            'first_name'=> 'Ann',
            'last_name'=> 'farha',
            'postcode'=>392,
           ]
        ];

        foreach($posts as $key => $value){
            Lead::create($value);
        }
    }
}
