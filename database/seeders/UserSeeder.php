<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Restoran;
use App\Models\Rate;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    //     User::factory(10)->create()->each(
    //         function ($user) {
    //             Restoran::create([
    //                 'user_id' => $user->id,
    //                 'address' => fake()->address(),
    //                 'resto_name' => fake()->word() . ' restaurant'
    //             ])->each(
    //                 function($resto){
    //                     $rate = Rate::factory(3)->make();
    //                     $resto->rates()->saveMany($rate);

    //                 }
    //             );

    //         }
    //     );

        User::factory(10)->create()->each(
            function($user){
                $resto = Restoran::factory()->make();
                $rate = Rate::factory(3)->make();
                $user->Restoran()->save($resto);
                $resto->rates()->saveMany($rate);
            }
        );

    }
}
