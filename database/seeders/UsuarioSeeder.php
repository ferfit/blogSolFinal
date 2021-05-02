<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name'=>'Solange',
            'email'=>'solangeMargot@gmail.com',
            'password'=>Hash::make('ninamaida2021')
        ]);
        $user2 = User::create([
            'name'=>'Solange',
            'email'=>'sotosolangeibz@gmail.com',
            'password'=>Hash::make('ninamaida2021')
        ]);

        $user3 = User::create([
            'name'=>'Solange',
            'email'=>'info.tuproweb@gmail.com',
            'password'=>Hash::make('laesquina22')
        ]);
    }
}
