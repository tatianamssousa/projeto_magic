<?php

use Illuminate\Database\Seeder;

class RaridadeSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('raridades')->insert([
            ["nome" => "Comum", "created_at" => date("Y-m-d h:i:s"), "updated_at" => date("Y-m-d h:i:s")],
            ["nome" => "Incomum", "created_at" => date("Y-m-d h:i:s"), "updated_at" => date("Y-m-d h:i:s")],
            ["nome" => "Rara", "created_at" => date("Y-m-d h:i:s"), "updated_at" => date("Y-m-d h:i:s")],
            ["nome" => "Masterpiece", "created_at" => date("Y-m-d h:i:s"), "updated_at" => date("Y-m-d h:i:s")],
        ]);
    }
}
