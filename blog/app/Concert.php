<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 12/15/2019
 * Time: 11:04 AM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Concert extends Model
{

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

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

public function User(){
    return $this->belongsTo(SellerAndBuyerUsers::class);
}
}
