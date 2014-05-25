<?php
/**
 * Created by PhpStorm.
 * User: Barney
 * Date: 5/24/14
 * Time: 1:44 PM
 */
class UserSeeder extends DatabaseSeeder
{
    public function run()
    {
        $users = array(
            array(
                "username" => "Barnabas Jomo",
                "password" => Hash::make("195960c23"),
                "email" => "brnbsjm@gmail.com"
            )
        );

        foreach ($users as $user)
        {
            User::create($user);
        }
    }
}