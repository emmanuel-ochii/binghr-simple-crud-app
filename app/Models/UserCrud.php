<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCrud extends Model
{
    use HasFactory;

    protected $fillable = ['employee_id','first_name','last_name','email_id','mobile_no','username','password','permission','role_type'];

    public function setPermissionAttribute($value)
    {
        $this->attributes['permission'] = json_encode($value);
    }

    public function getPermissionAttribute($value)
    {
        return $this->attributes['permission'] = json_decode($value);
    }
}
