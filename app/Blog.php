<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = "blogs";

    protected $primaryKey = "id_blog";

    public function Users(){
    	return $this->belongsTo(Users::class);
    }
}
