<?php

namespace Database\Seeders;

use App\Models\Listing;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//         \App\Models\User::factory(4)->create();
        $user=User::factory()->create(
            [
                'name'=>'Abdullah',
                'email'=>'abdullah@gmail.com'
            ]
        );
        Listing::factory(6)->create(
            [
                'user_id'=>$user->id
            ]
        );

//         Listing::create([
//             'title' => 'Laravel Senior Developer',
//             'tags' => 'laravel, javascript',
//             'company' => 'Acme Corp',
//             'location' => 'Boston, MA',
//             'email' => 'email1@email.com',
//             'website' => 'https://www.acme.com',
//             'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
//         ]);
//
//         Listing::create(
//             [
//                 'title' => 'Backend Developer',
//                 'tags' => 'laravel, php, api',
//                 'company' => 'Skynet Systems',
//                 'location' => 'Newark, NJ',
//                 'email' => 'email4@email.com',
//                 'website' => 'https://www.skynet.com',
//                 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
//             ]);
    }
}
