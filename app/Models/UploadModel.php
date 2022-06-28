<?php
namespace App\Models;

use CodeIgniter\Model;


class UploadModel extends Model
{
	protected $table   ='books';
	protected $primaryKey  ='book_id';


	//protected $returnType   ='array';
	//protected $useSoftDeletes   = true;

	protected $allowedFields   = ['book_image', 'book_id','book', 'title', 'book_description', 'author', 'publisher', 'publish_year'];


	//protected $useTimestamps   = false
	protected $createdField   ='created_at';
	protected $updatedField   ='updated_at';
	//protected $deletedField   ='deleted_at';

	//protected $validationRules   =[];
	//protected $validationMessages   = [];
	//protected $skipValidation   = false;



	function save_upload($image,$title,$book_description,$author,$publisher,$publish_year){
		$data = array('book_image' => $image,'title' => $title,'book_description' => $book_description,'author' => $author,'publisher' => $publisher,'publish_year' => $publish_year);

		$result = $this->   db ->insert('books',$data);

		return $result;
	}
}
