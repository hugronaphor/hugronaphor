<?php

class DatabaseSeeder extends Seeder {

  public function run() {
    // Disable protection to have ability to seed.
    \Eloquent::unguard();
    
    $this->call('SentrySeeder');
    $this->command->info('Sentry tables seeded!');

    $this->call('ContentSeeder');
    $this->command->info('Content tables seeded!');
  }

}