<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ScriptsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = DB::table('users')->first(); //追加

    $scripts = [
        [
            'script'  => 'Hello koki',
        ],
        [
           'script'  => 'Hello mahi',
        ],
        [
           'script'  => 'Hello hiroshi',
        ],
    ];

    foreach ($scripts as $script) {

        DB::table('scripts')->insert([
            "script" => $script["script"],
            'user_id' => $user->id, //追加
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
    }
}
