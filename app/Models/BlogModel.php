<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model

{


    protected $table      = 'blog';       // database table name
    protected $primaryKey = 'id';
    public function getblogs()
    {
        return $this->findAll();
    }
    

}
?>
