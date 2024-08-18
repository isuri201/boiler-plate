<?php

namespace App\Http\Controllers\api\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\UserRepository;
use App\Traits\CommonSwagger as TraitsCommonSwagger;
use App\Traits\CommonSwagger\CommonSwagger;
use App\Traits\CommonSwagger\swagger;



class register extends Controller

{
    use TraitsCommonSwagger;
    protected $user;


    public function __construct(UserRepository $user)
    {
        $this->user = $user;
    }


    public function register(Request $request){
        $params=[
            'name',
            'email',
            'password'
        ];
       $user =  User::create($request->all());
      $this->apiCall($this->user->getFillableAttributes(),$params);
        return response()->json($user);

    }
}
