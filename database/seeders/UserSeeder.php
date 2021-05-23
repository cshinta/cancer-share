<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userdata = [[
            'firstname' => 'Marchadi',
            'lastname' => null,
            'username' => 'marchadi',
            'avatar' => '/avatars//ariefm.jpeg',
            'phone' => '087759771831',
            'email' => 'marchadi@gmail.com',
            'password' => Hash::make(12345678),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'firstname' => 'Natarini',
            'lastname' => 'Setyaningsih',
            'username' => 'natarini',
            'avatar' => '/avatars//natarini.jpeg',
            'phone' => '087759771831',
            'email' => 'natarini@gmail.com',
            'password' => Hash::make(12345678),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'firstname' => 'Dahlan',
            'lastname' => 'Iskan',
            'username' => 'dahlan',
            'avatar' => '/avatars//profilAvatar.png',
            'phone' => '087759771831',
            'email' => 'dahlan@gmail.com',
            'password' => Hash::make(12345678),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'firstname' => 'Megawati',
            'lastname' => 'Tanto',
            'username' => 'megawati',
            'avatar' => '/avatars//profilAvatar.png',
            'phone' => '087759771831',
            'email' => 'megawati@gmail.com',
            'password' => Hash::make(12345678),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'firstname' => 'Martini',
            'lastname' => 'Lim',
            'username' => 'martini',
            'avatar' => '/avatars//profilAvatar.png',
            'phone' => '087759771831',
            'email' => 'martini@gmail.com',
            'password' => Hash::make(12345678),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'firstname' => 'Widi',
            'lastname' => null,
            'username' => 'widi',
            'avatar' => '/avatars//profilAvatar.png',
            'phone' => '087759771831',
            'email' => 'widi@gmail.com',
            'password' => Hash::make(12345678),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'firstname' => 'Dian',
            'lastname' => null,
            'username' => 'diandian',
            'avatar' => '/avatars//profilAvatar.png',
            'phone' => '087759771831',
            'email' => 'dian@gmail.com',
            'password' => Hash::make(12345678),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'firstname' => 'Ika',
            'lastname' => 'Damajanti',
            'username' => 'ikadamajanti',
            'avatar' => '/avatars//profilAvatar.png',
            'phone' => '087759771831',
            'email' => 'ika@gmail.com',
            'password' => Hash::make(12345678),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'firstname' => 'Cantika',
            'lastname' => 'Shinta',
            'username' => 'cshinta',
            'avatar' => '/avatars//profilAvatar.png',
            'phone' => '087759771831',
            'email' => 'cantikaaristiani@gmail.com',
            'password' => Hash::make(12345678),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]];
        DB::table('users')->insert($userdata);
    }
}
