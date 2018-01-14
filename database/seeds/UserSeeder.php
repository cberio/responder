<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class, 30)->create()->each(function (\App\User $user) {
            $user->userState()->save(factory(\App\UserState::class)->make());

            $user->photos()->save(factory(\App\Photo::class)->make(['user_id' => $user->id]));
            $user->photos()->save(factory(\App\Photo::class)->make(['user_id' => $user->id]));
            $user->photos()->save(factory(\App\Photo::class)->make(['user_id' => $user->id]));
        });
    }
}
