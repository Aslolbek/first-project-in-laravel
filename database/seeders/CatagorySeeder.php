<?php

namespace Database\Seeders;

use App\Models\Catagory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CatagorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Catagory::create(['name'=>'Web design']);
        Catagory::create(['name'=>'Web Development']);
        Catagory::create(['name'=>'Online Marketing']);
        Catagory::create(['name'=>'Keyword Research']);
        Catagory::create(['name'=>'Email Marketing']);
        
    }
}
