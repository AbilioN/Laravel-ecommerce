<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

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

    // this function is added by part 9 of course
   
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // more functions modified before recorded whole course

    // public function isAdmin(){
    //     return $this->roles->pluck('role')->contains('admin');
    // }

    // public function coupons(){
    //     return $this->belongsToMany('App\Models\Coupon' , 'reviews' , 'userId' , 'productId');
    // }
    // public function wishedProducts(){
    //     return $this->belongsToMany('App\Models\Product' , 'wishes' , 'userId' , 'productId');
    // }
    // public function addToWished(array $productIds){
    //     foreach($productIds as $pid){
    //         try{
    //             $this->wishedProducts()->attach($pid);
    //         }catch(\Exception $ex){
    //             continue;
    //         }
    //     }
    // }
    // public function removeFromWishes(array $productIds){
    //     return $this->wishedProducts()->detach($productIds);
    // }

    public function roles(){
        return $this->belongsToMany('App\Models\Role' , 'user_roles' , 'userId' , 'roleId');
    }
}
