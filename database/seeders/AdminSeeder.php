<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = new Admin();
        $admin->image_url = "deneme.png";
        $admin->name = "Aziz Emirhan Özdemir";
        $admin->email = "azizemirhanozdemir@gmail.com";
        $admin->password = "$2y$10$35xYpC8eQQ.o5tam7JI3puXl5XeEFUtMpiFgED02xybi6BnBGlf4S";
        $admin->status = 1;
        $admin->save();
    }
}
