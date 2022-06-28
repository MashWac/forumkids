<?php

namespace App\Models;

use CodeIgniter\Model;

class PuzzleModel extends Model
{
    protected $table      = 'puzzles';
    protected $primaryKey = 'puzzle_id';
    protected $useAutoIncrement = true;

    protected $allowedFields = 
    [
        'puzzle', 'puzzle_name' , 'created_at' , 'is_deleted','updated_at' 
    ];

}

?>
