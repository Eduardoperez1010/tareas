<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
	protected $table = ['task'];
    protected $fillable = ['title'];

    public function user(){
    	return $this->belongsto(User::class);
    }
}
