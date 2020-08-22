<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Renato Ponce',
            'email'=>'correo@correo.com',
            'password'=> Hash::make('12345678'),
            'url'=>'http://renatoponce.com',
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'name'=>'Mauricio Ponce',
            'email'=>'correo2@correo.com',
            'password'=> Hash::make('12345678'),
            'url'=>'http://renatoponce.com',
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
        ]);
    }
}
