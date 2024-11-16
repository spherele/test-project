<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        Role::create([
            'name' => 'admin',
            'slug' => 'admin',
            'color' => '#000000',
        ]);

    }
}
