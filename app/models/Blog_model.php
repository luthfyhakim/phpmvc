<?php

class Blog_model
{
  private $blog = [
    [
      "penulis" => "Guru Rpl",
      "judul" => "Belajar PHP MVC",
      "tulisan" => "Models"
    ],
    [
      "penulis" => "Guru Rpl",
      "judul" => "Belajar PHP MVC",
      "tulisan" => "Views"
    ],
    [
      "penulis" => "Guru Rpl",
      "judul" => "Belajar PHP MVC",
      "tulisan" => "Controllers"
    ]
  ];

  public function getAllBlog()
  {
    return $this->blog;
  }
}