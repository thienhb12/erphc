<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Audit extends Model
{
	 /**
     * The database table used by the model.
     *
     * @var string
    */
    protected $table = 'audits';

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'category', 'message', 'data', 'data_parser', 'replay_route'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
