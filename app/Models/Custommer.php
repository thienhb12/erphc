<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Custommer extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
    */
    protected $table = 'customer';

	/**
     * @var array
    */
    protected $fillable = ['name','enabled','address','zalo','viber','skyper','email','company','gender'];
}
