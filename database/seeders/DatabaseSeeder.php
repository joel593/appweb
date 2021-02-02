<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Level;
use App\Models\Perfil;
use phpDocumentor\Reflection\Location;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(50)->create();
        Level::factory()->create(['name'=>'Plata']);
        Level::factory()->create(['name'=>'Oro']);
        Level::factory()->create(['name'=>'Bronce']);

      /*Perfil::factory()->create(['nombre'=>'Perfil1','user_id'=>'1']);
        Perfil::factory()->create(['nombre'=>'Perfil2','user_id'=>'2']);
        Perfil::factory()->create(['nombre'=>'Perfil3','user_id'=>'3']);

        Perfil::factory()->create(['coutry'=>'Ecuador']);
        Perfil::factory()->create(['coutry'=>'Colombia']);
        Perfil::factory()->create(['coutry'=>'Chile']);*/

//         \App\Models\User::factory()->count(5)->create()->each(function($user){

//             $perfil= $user->perfil()->save(\App\Models\Perfil::factory()->create()->make());

//            $perfil->location()->save(factory\App\Models\Location::factory()->create()->make());

//            $user->group()->attach($this->array(rand(1,3)));


//    });
    }




}
