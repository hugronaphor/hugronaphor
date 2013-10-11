<?php

use App\Models\Article;
use App\Models\Page;
use App\Models\Profile;

class ContentSeeder extends Seeder {

  public function run() {
    DB::table('articles')->truncate(); // Using truncate function so all info will be cleared when re-seeding.
    DB::table('pages')->truncate();
    DB::table('profiles')->truncate();

    Article::create(array(
      'title' => 'First post',
      'slug' => 'first-post',
      'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
      'user_id' => 1,
    ));
    Article::create(array(
      'title' => '2nd post',
      'slug' => '2nd-post',
      'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
      'user_id' => 1,
    ));
    Article::create(array(
      'title' => 'Third post',
      'slug' => 'third-post',
      'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
      'user_id' => 1,
    ));

    Page::create(array(
      'title' => 'Welcome',
      'slug' => 'welcome',
      'body' => 'Welcome to the site',
      'user_id' => 1,
    ));
    Page::create(array(
      'title' => 'About us',
      'slug' => 'about-us',
      'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
      'user_id' => 1,
    ));
    Page::create(array(
      'title' => 'Contact',
      'slug' => 'contact',
      'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
      'user_id' => 1,
    ));

    // Profiles
    // Generate 6 random Profiles.
    foreach (range(0, 5) as $number) {
      Profile::create(array(
        'slug' => 'test_profile_' . $number,
        'f_name' => 'Test Name ' . $number,
        'm_name' => 'Test Middle Name ' . $number,
        'l_name' => 'Test Last Name ' . $number,
        'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit ' . $number,
        'user_id' => 1,
      ));
    }
  }

}