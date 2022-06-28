<?php namespace App\Models;

use CodeIgniter\Model;


class AdminModel extends Model{

  protected $table='admin';
  protected $primaryKey='admin_id';

  protected $allowedFields=['admin_id','admin_name','admin_email','admin_role','password','created_at','updated_at','is_deleted'];

}
?>
