<?php

namespace Database\Seeders;

use App\Models\Relation as ModelsRelation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Database\Seeder;

class RelationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts=[
            [
                'first_name'=> 'Sumi',
                'last_name'=> 'Lam',
                'postcode'=>123,
                'city'=> 'Calicut',
            ],
        
           [
            'first_name'=> 'Asha',
            'last_name'=> 'faiz',
            'postcode'=>392,
            'city'=> 'tvm',
           ]
        ];

        foreach($posts as $key => $value){
            ModelsRelation::create($value);
        }
    }
}
