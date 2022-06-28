<?php namespace App\Models;

use CodeIgniter\Model;


class ForumModel extends Model{

  protected $table='forum';
  protected $primaryKey='forum_id';

  protected $allowedFields=['initiator','genre','title','main_comment','flagged','created_at','created_at','updated_at','is_deleted'];

public function fetchRecords($id=false)
    {
        if ($id===false) {
            return $this->findAll();
        }
        else
        {
            return $this->getWhere(['forum_id'=>$id]);
        }

    }
    public function add()
    {
        $ForumModel->save($_POST);

    }
    public function fetch()
    {
        $data['forum'] = $this->findAll();
        

    }
}
?>
