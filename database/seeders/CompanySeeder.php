<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create([
            'name'      => 'Profamilia Oriente',
            'address'   => '',
            'city'      => 'Puerto La Cruz',
            'state'     => 'Anzoategui',
            'branch'    => '',            
            'manager'   => 'Tomas Antonio Rodriguez',
            'usd'       => 4162,
            'eur'       => 0,
        ]);

        Company::create([
            'name'      => 'Profamilia',
            'address'   => '',
            'city'      => 'Puerto Ordaz',
            'state'     => 'Bolivar',
            'branch'    => '',            
            'manager'   => 'Welmer',
            'usd'       => 4162,
            'eur'       => 0,
        ]);

        Company::create([
            'name'      => 'Estubin',
            'address'   => '',
            'city'      => 'Puerto Ordaz',
            'state'     => 'Bolivar',
            'branch'    => '',            
            'manager'   => 'Criseila',
            'usd'       => 0,
            'eur'       => 0,
        ]);

        Company::create([
            'name'      => 'Soteinca',
            'address'   => '',
            'city'      => 'Puerto Ordaz',
            'state'     => 'Bolivar',
            'branch'    => '',            
            'manager'   => 'Juan Zambrano',
            'usd'       => 0,
            'eur'       => 0,
        ]);

        Company::create([
            'name'      => 'Crisimar',
            'address'   => '',
            'city'      => 'Puerto Ordaz',
            'state'     => 'Bolivar',
            'branch'    => '',            
            'manager'   => 'Ea Martinez',
            'usd'       => 0,
            'eur'       => 0,
        ]);
    }
}


