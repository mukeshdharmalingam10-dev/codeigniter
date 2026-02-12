<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model
{
    //table
    protected $table      = 'blogs';       // database table name
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'title',
        'content',
        'created_at'
    ];
}
?>
