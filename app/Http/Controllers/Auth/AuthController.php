<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Lumen\Routing\Controller as BaseController;
use Seiya\UserApi;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends BaseController
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
    }

    /**
     * Login
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        try{
            $key = $request->header('key');
            $secretKey = $request->header('secretKey');

            $user = $this->validaUsuario($key, $secretKey);

            $this->validaStatus($user->status);

            $token = JWTAuth::fromUser($user);

        } catch (Exception $error){
            return $this->respondWithError($secretKey, $error->getMessage());
        }

        return $this->respondWithToken($token);
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60 // default 1 hour
        ]);
    }

    protected function respondWithError(string $client_id, string $erro)
    {
        return response()->json([
            'error_description' => $erro,
            'client_id' => $client_id,
            'timestamp' => date('d-m-Y H:m:s')
        ], 401);
    }

    protected function validaUsuario(string $key, string $secretKey)
    {
        if(!$user = User::where("key", $key)
            ->where("secret_key", $secretKey)->first()){
            throw new Exception("Key not found");
        }

        return $user;
    }

    protected function validaStatus(int $status)
    {
        if($status == 0){
            throw new Exception("Unauthorized");
        }

        return true;
    }
}
