<?php

use Illuminate\Database\Seeder;

class EstadoSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('estados')->insert([
            ["nome" => "M/NM", "created_at" => date("Y-m-d h:i:s"), "updated_at" => date("Y-m-d h:i:s")],
            ["nome" => "SP", "created_at" => date("Y-m-d h:i:s"), "updated_at" => date("Y-m-d h:i:s")],
            ["nome" => "MP", "created_at" => date("Y-m-d h:i:s"), "updated_at" => date("Y-m-d h:i:s")],
            ["nome" => "HP", "created_at" => date("Y-m-d h:i:s"), "updated_at" => date("Y-m-d h:i:s")],
            ["nome" => "D", "created_at" => date("Y-m-d h:i:s"), "updated_at" => date("Y-m-d h:i:s")],
        ]);
    }
}
