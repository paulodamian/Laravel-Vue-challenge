<?php

use Illuminate\Database\Seeder;

class RolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rols = ['Cast', 'Director', 'Producer'];
        foreach ($rols as $r) {
            DB::table('rols')->insert([
                'name' => $r,
            ]);
        }
    }
}
