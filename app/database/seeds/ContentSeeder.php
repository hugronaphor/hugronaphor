<?php

use App\Models\Article;
use App\Models\Page;

class ContentSeeder extends Seeder {

  //!!   php artisan migrate --package=cartalyst/sentry

  public function run() {
    DB::table('articles')
      ->truncate(); // Using truncate function so all info will be cleared when re-seeding.
    DB::table('pages')->truncate();
    DB::table('files')->truncate();
    DB::table('video')->truncate();


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

    // Variables

    Variable::create(array(
      'name' => 'site_name',
      'value' => 'Youngers',
    ));

    Variable::create(array(
      'name' => 'footer_contact_text',
      'value' => '<p>tel and stuff</p><p>Lorem Ipsum is not simply random text.</p><p>Lorem Ipsum is not simply random text.</p><p>Lorem Ipsum is not simply random text.</p>',
    ));

    Variable::create(array(
      'name' => 'footer_contact_text',
      'value' => '<p>tel and stuff</p><p>Lorem Ipsum is not simply random text.</p><p>Lorem Ipsum is not simply random text.</p><p>Lorem Ipsum is not simply random text.</p>',
    ));

    File::create(array(
      'name' => 'test image 1',
      'path' => 'http://laravel.com/assets/img/logo-head.png',
      'type' => 'image',
    ));

    File::create(array(
      'name' => 'test image 1',
      'path' => 'http://upload.wikimedia.org/wikipedia/commons/f/f1/Apache_chieff_Geronimo_(right)_and_his_warriors_in_1886.jpg',
      'type' => 'image',
    ));
    File::create(array(
      'name' => 'test image 1',
      'path' => 'https://lh4.googleusercontent.com/-cfAQ98OYyew/AAAAAAAAAAI/AAAAAAAAAAA/sIKO3jHPgC4/photo.jpg',
      'type' => 'image',
    ));
    File::create(array(
      'name' => 'test image 1',
      'path' => 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQWaG7KZi8lvPuD0fyQo8mbGK_PksGsscc7w1ehwmbypL-r6yp8',
      'type' => 'image',
    ));


    File::create(array(
      'name' => 'test image 1',
      'path' => 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQWaG7KZi8lvPuD0fyQo8mbGK_PksGsscc7w1ehwmbypL-r6yp8',
      'type' => 'image',
    ));

    // Videos.
    Video::create(array(
      'title' => 'Test title 1',
      'url' => 'http://vimeo.com/84204709',
      'type' => 'remote',
      'author' => 'Vlas Igor',
      'year' => '2013'
    ));
    Video::create(array(
      'title' => 'Test title 2',
      'url' => 'http://vimeo.com/84352928',
      'type' => 'remote',
      'author' => 'Vlas Igor',
      'year' => '2013'
    ));
    Video::create(array(
      'title' => 'Test title 3',
      'url' => 'http://vimeo.com/84111455',
      'type' => 'remote',
      'author' => 'Cornel Andreev',
      'year' => '201'
    ));
    Video::create(array(
      'title' => 'Test title 4',
      'url' => 'http://vimeo.com/84027499',
      'type' => 'remote',
      'author' => 'Cornel Andreev',
      'year' => '201'
    ));
    Video::create(array(
      'title' => 'Test title 5',
      'url' => 'http://vimeo.com/84352928',
      'type' => 'remote',
      'author' => 'Cornel Andreev',
      'year' => '201'
    ));
    Video::create(array(
      'title' => 'Test title 6',
      'url' => 'http://vimeo.com/84027499',
      'type' => 'remote',
      'author' => 'Vlas Igor',
      'year' => '201'
    ));


    Video::create(array(
      'title' => 'Test title 7',
      'url' => 'http://vimeo.com/58972881',
      'type' => 'remote',
      'author' => 'Vlas Igor',
      'year' => '201'
    ));
    Video::create(array(
      'title' => 'Test title 8',
      'url' => 'http://vimeo.com/75605402',
      'type' => 'remote',
      'author' => 'Vlas Igor',
      'year' => '201'
    ));
    Video::create(array(
      'title' => 'Test title 9',
      'url' => 'http://vimeo.com/31784814',
      'type' => 'remote',
      'author' => 'Vlas Igor',
      'year' => '201'
    ));
    Video::create(array(
      'title' => 'Test title 10',
      'url' => 'http://vimeo.com/19388861',
      'type' => 'remote',
      'author' => 'Vlas Igor',
      'year' => '201'
    ));

  }

}