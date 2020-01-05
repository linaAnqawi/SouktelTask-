<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 12/15/2019
 * Time: 3:08 PM
 */

namespace App\Http\Controllers;
use App\SellerAndBuyerUsers;
use DB;
class sellerAndBuyerController
{
    public function index(){
        $allUsers=sellerAndBuyerUsers::get();
        return view("showAllUsers",['allUser'=>$allUsers]);
    }
    public function show($name){ //show the concert by name you can

        $sellerAndBuyerUsers=SellerAndBuyerUsers::where('name',$name)->get();
        return view('showAllUsers',['SellerAndBuyerUsers'=> $sellerAndBuyerUsers]);
    }
    public function create(){

    }
    public function store(){//SIGN_UP
///dump(request()->all());
 request()->validate([
        'name'=>'required',
        'email'=>'required',
        'password'=>'required',
        'userType'=>'required'
    ]);
        $sellerAndBuyerUsers=new SellerAndBuyerUsers();
        $sellerAndBuyerUsers->name=request('name');
        $sellerAndBuyerUsers->email=request('email');
        $sellerAndBuyerUsers->password=request('password');
        if(request('userType')==="seller"){
            $sellerAndBuyerUsers->sellerOrBuyer="seller";
        }else{
            $sellerAndBuyerUsers->sellerOrBuyer="buyer";
        }
        $sellerAndBuyerUsers->save();
     if ( $sellerAndBuyerUsers->sellerOrBuyer==="seller"){
         $sellerAndBuyerUsers=SellerAndBuyerUsers::where('email',$sellerAndBuyerUsers->email)->first();
         return view('userProfile',['SellerAndBuyerUsers'=> $sellerAndBuyerUsers]);
     } else if($sellerAndBuyerUsers->sellerOrBuyer==="buyer"){
         return view('BuyerProfile',['SellerAndBuyerUsers'=> $sellerAndBuyerUsers]);
     }
    }
    public  function edit(){
    }
    public function update(){
    }
    public function destroy(){
    }
    public function checkIsUser(){
//        $query->where('votes', '>', 100)
//            ->where
        $sellerAndBuyerUsers=new SellerAndBuyerUsers();
        $sellerAndBuyerUsers->email=request('email');
     request('password');
        $sellerAndBuyerUsers=SellerAndBuyerUsers::where('email',$sellerAndBuyerUsers->email)->first();
      if($sellerAndBuyerUsers->password===request('password')){
//          return view('userProfile',['SellerAndBuyerUsers'=> $sellerAndBuyerUsers]);
          if($sellerAndBuyerUsers->sellerOrBuyer==="seller"){
              return view('userProfile',['SellerAndBuyerUsers'=> $sellerAndBuyerUsers]);
          }
          else if($sellerAndBuyerUsers->sellerOrBuyer==="buyer"){
              return view('BuyerProfile',['SellerAndBuyerUsers'=> $sellerAndBuyerUsers]);
          }

      }
      else{

      }


//        $sellerAndBuyerUsers=new SellerAndBuyerUsers();
//        $sellerAndBuyerUsers->email=request('email');
//        $sellerAndBuyerUsers->password=request('password');
//        $sellerAndBuyerUsers=SellerAndBuyerUsers::where('email',$sellerAndBuyerUsers->email and 'password',$sellerAndBuyerUsers->password)->first();
//
//        return view('userProfile',['SellerAndBuyerUsers'=> $sellerAndBuyerUsers]);
    }

}
