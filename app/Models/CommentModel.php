<?php namespace App\Models;

use CodeIgniter\Model;


class CommentModel extends Model{

  protected $table='comments';
  protected $primaryKey='comment_id';

  protected $allowedFields=['commentor','forum','comment_post','comments_flagged','created_at','updated_at','is_deleted'];

}
?>
