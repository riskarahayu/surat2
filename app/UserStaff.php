<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
// use  Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class UserStaff extends Authenticatable
{
	protected $guard = 'staff';

	protected $primaryKey = 'nip';
	public $incrementing = false;
    protected $table = 'user_staff';

}
