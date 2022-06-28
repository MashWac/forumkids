<?php

namespace App\Models;

use CodeIgniter\Model;

class Book_model extends Model
{
    protected $table      = 'books';
    protected $primaryKey = 'book_id';
    protected $useAutoIncrement = true;

    protected $allowedFields = 
    [
        'title','book', 'book_description' , 'created_at' , 'is_deleted', 'author','publisher', 'publish_year','book_year','updated_at' 
    ];

}

?>
