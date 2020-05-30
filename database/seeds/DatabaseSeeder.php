<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    $this->call(CharactersTableSeeder::class);
    $this->call(ChaptersTableSeeder::class);
    $this->call(ActorsTableSeeder::class);
    $this->call(SeoConfigsTableSeeder::class);
    $this->call(ScenesTableSeeder::class);
    $this->call(EventsTableSeeder::class);
  }
}
