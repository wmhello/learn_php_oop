<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/26 0026
 * Time: 16:03
 */

class Book {
    public $author;

    public function __construct($my_author)
    {
        $this->author = $my_author;
    }
}

$b = new Book('test!!');
echo $b->author;
