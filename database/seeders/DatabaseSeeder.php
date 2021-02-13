<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
         \DB::table('users')->insert([

            'name'          => "Merchadou",
            'firstname'     => "Théo",
            'email'         => "theo@bmvcom.eu",
            'password'      => bcrypt('password'),
            'company'       => "BMV COMMUNICATION",
            'is_admin'      => TRUE,
            'created_at'    => Carbon::now()->toDateTimeString(),
            'updated_at'    => Carbon::now()->toDateTimeString()
        ]);

        \DB::table('users')->insert([

            'name'          => "Perez",
            'firstname'     => "David",
            'email'         => "perez@bmvcom.eu",
            'password'      => bcrypt('password'),
            'company'       => "BMV COMMUNICATION",
            'is_admin'      => FALSE,
            'created_at'    => Carbon::now()->toDateTimeString(),
            'updated_at'    => Carbon::now()->toDateTimeString()
        ]);

        \DB::table('users')->insert([
            
            'name'          => "MERIAIS",
            'firstname'     => "Benoit",
            'email'         => "meriais@bmvcom.eu",
            'password'      => bcrypt('bmv1407'),
            'company'       => "BMV COMMUNICATION",
            'is_admin'      => TRUE,
            'created_at'    => Carbon::now()->toDateTimeString(),
            'updated_at'    => Carbon::now()->toDateTimeString()
        ]);

        \DB::table('users')->insert([
            
            'name'          => "MIQUEL",
            'firstname'     => "Julien",
            'email'         => "miquel@bmvcom.eu",
            'password'      => bcrypt('bmv1407'),
            'company'       => "BMV COMMUNICATION",
            'is_admin'      => TRUE,
            'created_at'    => Carbon::now()->toDateTimeString(),
            'updated_at'    => Carbon::now()->toDateTimeString()
        ]);

        \DB::table('users')->insert([
            
            'name'          => "VIGUIER",
            'firstname'     => "Alexandre",
            'email'         => "viguier@bmvcom.eu",
            'password'      => bcrypt('bmv1407'),
            'company'       => "BMV COMMUNICATION",
            'is_admin'      => TRUE,
            'created_at'    => Carbon::now()->toDateTimeString(),
            'updated_at'    => Carbon::now()->toDateTimeString()
        ]);

        \DB::table('users')->insert([
            
            'name'          => "BENEZECH",
            'firstname'     => "Jérôme",
            'email'         => "benezech@bmvcom.eu",
            'password'      => bcrypt('bmv1407'),
            'company'       => "BMV COMMUNICATION",
            'is_admin'      => TRUE,
            'created_at'    => Carbon::now()->toDateTimeString(),
            'updated_at'    => Carbon::now()->toDateTimeString()
        ]);

        \DB::table('users')->insert([
            
            'name'          => "SANCHEZ",
            'firstname'     => "Julie",
            'email'         => "sanchez@bmvcom.eu",
            'password'      => bcrypt('bmv1407'),
            'company'       => "BMV COMMUNICATION",
            'is_admin'      => TRUE,
            'created_at'    => Carbon::now()->toDateTimeString(),
            'updated_at'    => Carbon::now()->toDateTimeString()
        ]);

        \DB::table('users')->insert([
            
            'name'          => "BRUNET",
            'firstname'     => "Nathalie",
            'email'         => "nathalie.brunet@groupedrb.com",
            'password'      => bcrypt('ncaDD842'),
            'company'       => "DRB GROUPE",
            'is_admin'      => TRUE,
            'created_at'    => Carbon::now()->toDateTimeString(),
            'updated_at'    => Carbon::now()->toDateTimeString()
        ]);

        \DB::table('users')->insert([
            
            'name'          => "BRUNET",
            'firstname'     => "Nicolas",
            'email'         => "nicolas.brunet@groupedrb.com",
            'password'      => bcrypt('8C3fY4ha'),
            'company'       => "DRB GROUPE",
            'is_admin'      => TRUE,
            'created_at'    => Carbon::now()->toDateTimeString(),
            'updated_at'    => Carbon::now()->toDateTimeString()
        ]);

        \DB::table('users')->insert([
            
            'name'          => "QUERCY",
            'firstname'     => "Laëtitia",
            'email'         => "laetitia.quercy@groupedrb.com",
            'password'      => bcrypt('3E66Kzei'),
            'company'       => "DRB GROUPE",
            'is_admin'      => TRUE,
            'created_at'    => Carbon::now()->toDateTimeString(),
            'updated_at'    => Carbon::now()->toDateTimeString()
        ]);

        \DB::table('users')->insert([
            
            'name'          => "ENJALBERT",
            'firstname'     => "Romain",
            'email'         => "romain.enjalbert@groupedrb.com",
            'password'      => bcrypt('76Bs5iuV'),
            'company'       => "DRB GROUPE",
            'is_admin'      => TRUE,
            'created_at'    => Carbon::now()->toDateTimeString(),
            'updated_at'    => Carbon::now()->toDateTimeString()
        ]);
    }
}
