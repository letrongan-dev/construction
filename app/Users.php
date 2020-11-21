<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
	protected $table = "users";

    protected $primaryKey = "id_user";

    public function Blog(){
    	return $this->belongsTo(Blog::class);
    }
}
