<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'akimoto syouta',
            'email' => 'aki1990@gmail.com',
            'password' => 'akito223'
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => 'ii mituko',
            'email' => 'iityan2288@docomo.ne.jp',
            'password' => 'iruma332'
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => 'ukita kouji',
            'email' => 'umibaya4@softobank.ne.jp',
            'password' => 'utu3ya24'
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => 'enomoto jyunpei',
            'email' => 'miti3gara@au.ne.jp',
            'password' => '2019aakita'
        ];
        DB::table('users')->insert($param);
    }
}
