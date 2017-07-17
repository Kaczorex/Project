<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
  use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    'password', 'remember_token',
    ];
    public function roles(){
     return $this->belongsToMany(Roles::class, 'roles_has_users', 'users_id', 'roles_id')->withTimestamps();
   }

   public function hasAnyRole($roles)
   {
    if (is_array($roles)) {
      foreach ($roles as $role) {
        if ($this->hasRole($role)) {
          return true;
        }
      }
    } else {
      if ($this->hasRole($roles)) {
        return true;
      }
    }
    return false;
  }
  public function hasRole($role)
  {
    if ($this->roles()->where('name', $role)->first()) {
      return true;
    }
    return false;
  }

  static function ifRole($role)
  {

//do poprawienia

  $count= Auth::user()->count();
   $x=1;
   $array=[' '];
   while ($x <= $count) {

 
    if(Auth::user()->find($x)->hasAnyRole($role))
      array_push($array, Auth::user()->find($x)->name);

    $x++;
}
  return $array;



}

public function id($id){

  return DB::table('users')->select('name')->Where('id',$id)->first();

}
public function whoById($id){

  if ($id=='0'){
    return '';
  }
  else {
   return Auth::user()->id($id)->name;
 }
}




}

