<?php namespace App\Models;

use CodeIgniter\Model;


class KidsModel extends Model{

  protected $table='kids';
  protected $primaryKey='kid_id';

  protected $allowedFields=['kid_name','kid_email','kid_role','password','age','gender','parent','created_at','updated_at','is_deleted'];

}
?>
