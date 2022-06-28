<?php

namespace App\Models;

use CodeIgniter\Model;

class QuizModel extends Model
{
    protected $table      = 'quizes';
    protected $primaryKey = 'quiz_id';
    protected $useAutoIncrement = true;

    protected $allowedFields = 
    [
        'quiz', 'quiz_name' , 'created_at' , 'is_deleted','updated_at' 
    ];

}

?>
