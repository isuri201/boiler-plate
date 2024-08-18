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
    // use TraitsCommonSwagger;
    // protected $user;


    // public function __construct(UserRepository $user)
    // {
    //     $this->user = $user;
    // }
    
    /**
    *      @OA\Info(
     *    title="APIs For Thrift Store",
     *    version="1.0.0",
     * ),
     *   @OA\SecurityScheme(
     *       securityScheme="bearerAuth",
     *       in="header",
     *       name="bearerAuth",
     *       type="http",
     *       scheme="bearer",
     *       bearerFormat="JWT",
     *    ),
    * @OA\Schema(
     *     schema="User",
     *     title="User",
     *     description="User model",
     *     required={"id", "name", "email"},
     *     @OA\Property(property="id", type="integer", format="int64", example="1"),
     *     @OA\Property(property="name", type="string", example="John Doe"),
     *     @OA\Property(property="email", type="string", format="email", example="john.doe@example.com"),
     *     @OA\Property(property="created_at", type="string", format="date-time", example="2024-07-20T10:00:00Z"),
     *     @OA\Property(property="updated_at", type="string", format="date-time", example="2024-07-20T10:00:00Z"),
     * ),
     * 
    * @OA\Post(
    * path="/api/register",
    * summary="register users",
    * tags={"Register Users"},
    * @OA\Parameter(
     *         name="name",
     *         in="query",
     *         description="User's name",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     * *     @OA\Parameter(
     *         name="email",
     *         in="query",
     *         description="User's email address",
     *         required=true,
     *         @OA\Schema(
     *             type="string",
     *             format="email"
     *         )
     *     ),
     *  
    * @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="status", type="string"),
     *             @OA\Property(property="message", type="string"),
     *             @OA\Property(property="data", type="object",
     *                 @OA\Property(property="name", type="string"),
     *                 @OA\Property(property="email", type="string")
     *         )
     *       )
     *     ),
     *      @OA\Response(
     *         response=400,
     *         description="Invalid input"
     *     ),
    * )
    */ 
    public function register(Request $request){
      
       $user =  User::create($request->all());
        return response()->json($user);

    }
}
