<?php


namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Zizaco\Entrust\Traits\EntrustUserTrait;

class Users extends Authenticatable{
	
	use Notifiable;

	protected $table = 'users';

	protected $guard = 'users';

	protected $guarded = [];  

	protected $fillable = [];

	protected $hidden = [
		'password', 'remember_token',
	];


}