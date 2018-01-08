<?php

class PostTableSeeder extends Seeder {
  public function run() {
    Post::create(array(
      'title' => 'one',
      'content' => 'Berita yang dikabarkan'
    ));
    Post::create(array(
      'title' => 'two',
      'content' => 'Berita yang dikabarkan'
    ));
    Post::create(array(
      'title' => 'three',
      'content' => 'Berita yang dikabarkan'
    ));

  }

}


?>
