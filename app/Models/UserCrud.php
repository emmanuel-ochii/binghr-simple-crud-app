<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCrud extends Model
{
    use HasFactory;

    protected $fillable = ['employee_id','first_name','last_name','email_id','mobile_no','username','password','permission','role_type','permission_admin','permission_employee','permission_hr'];

    public function setPermissionAttribute($value)
    {
        $this->attributes['permission'] = json_encode($value);
    }
    public function getPermissionAttribute($value)
    {
        return $this->attributes['permission'] = json_decode($value);
    }

    public function setPermissionAdminAttribute($value)
    {
        $this->attributes['permission_admin'] = json_encode($value);
    }
    public function getPermissionAdminAttribute($value)
    {
        return $this->attributes['permission_admin'] = json_decode($value);
    }

    public function setPermissionEmployeeAttribute($value)
    {
        $this->attributes['permission_employee'] = json_encode($value);
    }
    public function getPermissionEmployeeAttribute($value)
    {
        return $this->attributes['permission_employee'] = json_decode($value);
    }

    public function setPermissionHrAttribute($value)
    {
        $this->attributes['permission_hr'] = json_encode($value);
    }

    public function getPermissionHrAttribute($value)
    {
        return $this->attributes['permission_hr'] = json_decode($value);
    }
}
