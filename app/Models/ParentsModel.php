<?php namespace App\Models;

use CodeIgniter\Model;


class ParentsModel extends Model{

  protected $table='parents';
  protected $primaryKey='parent_id';

  protected $allowedFields=['parent_name','parent_email','parent_role','password','created_at','updated_at','is_deleted'];

}
?>
