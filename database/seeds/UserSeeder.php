<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder {
  public function run() {
    User::create([
      'email' => 'lp@if.its.ac.id',
      'password' => bcrypt('lpelamar'),
      'name' => 'Administrator LP',
    ]);
  }
}