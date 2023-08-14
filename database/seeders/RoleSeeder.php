<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'title' => 'Pimpinan',],
            ['id' => 2, 'title' => 'Cabang',],
            ['id' => 3, 'title' => 'Student',],

        ];

        foreach($items as $item){
            Role::create($item);
        }
    }
}
