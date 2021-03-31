<?php

namespace Database\Seeders;

use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gab = User::firstOrCreate([
            'name'          => 'Gabriel Zambrano',
            'email'         => 'gab.zambrano@gmail.com',
            'role'          => 'admin',
            'password'      => Hash::make('password'),
            'email_verified_at' => now(),
        ]);

        $gab->ownedTeams()->save(Team::forceCreate([
            'user_id' => $gab->id,
            'name' => explode(' ', $gab->name, 2)[0]."'s Team",
            'personal_team' => true,
        ]));
        $gab->worksAt()->attach([1,2,3]);

        $criseila = User::firstOrCreate([
            'name'          => 'Criseila Gomez Zambrano',
            'email'         => 'zambrano.criseila@gmail.com',
            'role'          => 'manager',
            'password'      => Hash::make('password'),
            'email_verified_at' => now(),
        ]);

        $criseila->ownedTeams()->save(Team::forceCreate([
            'user_id' => $criseila->id,
            'name' => explode(' ', $criseila->name, 2)[0]."'s Team",
            'personal_team' => true,
        ]));
        $criseila->worksAt()->attach([1,2,3]);

        $maria = User::firstOrCreate([
            'name'          => 'Maria Gomez',
            'email'         => 'maria@gmail.com',
            'role'          => 'editor',
            'password'      => Hash::make('password'),
            'email_verified_at' => now(),
        ]);

        $maria->ownedTeams()->save(Team::forceCreate([
            'user_id' => $maria->id,
            'name' => explode(' ', $maria->name, 2)[0]."'s Team",
            'personal_team' => true,
        ]));
        $maria->worksAt()->attach([4]);
    }
}
