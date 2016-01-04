<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
	
    
class Department extends Model
{
	/**
     * The database table used by the model.
     *
     * @var string
    */
    protected $table = 'department';

	/**
     * @var array
    */
    protected $fillable = ['name','enabled'];
}
