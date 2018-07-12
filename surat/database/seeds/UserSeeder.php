<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Role admin
        $adminRole = new Role;
        $adminRole->name = "admin";
        $adminRole->display_name = "Admin";
        $adminRole->save();

        //Role member
        $memberRole = new Role;
        $memberRole->name = "member";
        $memberRole->display_name = "Member";
        $memberRole->save();

        //Sample User Admin
        $admin = new user;
        $admin->name = "Admin";
        $admin->username = "admin";
        $admin->password = bcrypt('123');
        $admin->save();
        $admin->attachRole($adminRole);

        //Sample User Member
        $member = new user;
        $member->name = "Member";
        $member->username = "member";
        $member->password = bcrypt('123');
        $member->save();
        $member->attachRole($memberRole);
    }
}
