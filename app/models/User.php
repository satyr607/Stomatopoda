<?php
/**
 * @Author: satyr
 * @Date:   2015-02-21 19:29:01
 * @Last Modified by:   satyr
 * @Last Modified time: 2015-02-22 12:01:40
 */

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent{

	public $name;

	protected $fillable = ['username', 'email'];
}