<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
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
    protected $fillable = ['name','enabled','address','zalo','viber','skyper','email','company','gender','phone','create_by','code'];


    /**
     * show  create by customer.
     *
     * @param  int  $id
     * @return  Name
    */

    public function get_create_by($id){
        if($id){
           $user = DB::table('users')->select('last_name')->where('id', $id)->first();
           return  $user->last_name;
        }
    }
}
