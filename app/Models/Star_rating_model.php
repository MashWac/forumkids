<?php

namespace App\Models;

use CodeIgniter\Model;

class Star_rating_model extends Model
{
    protected $table      = 'reviews';
    protected $primaryKey = 'review_id';
    protected $useAutoIncrement = true;

    protected $allowedFields = 
    [
        'book_id', 'rating', 'reviewer'
    ];
}

?>
