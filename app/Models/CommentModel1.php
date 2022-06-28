<?php namespace App\Models;

use CodeIgniter\Model;


class CommentModel extends Model{

  protected $table='childcomments';
  protected $primaryKey='comment_id';

  protected $allowedFields=['commentor','parent_comment','comment_post','flagged','created_at','updated_at','is_deleted'];

}
?>
