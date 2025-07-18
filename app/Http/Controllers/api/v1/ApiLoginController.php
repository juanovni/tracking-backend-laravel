<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use DB;


class AuthController extends Controller
{
    public function loginUser(Request $request)
    {
        try {
            DB::beginTransaction();
            $validateUser = Validator::make(
                $request->all(),
                [
                    'email' => 'required|email',
                    'password' => 'required'
                ]
            );

            if ($validateUser->fails()) {
                return $this->errorResponse(
                    'invalid_request',
                    $validateUser->errors(),
                    401
                );
            }

            if (!Auth::attempt($request->only(['email', 'password']))) {
                return $this->errorResponse(
                    'invalid_request',
                    'Email & Password does not match with our record.',
                    401
                );
            }

            $user = User::where('email', $request->email)->first();

            DB::commit();

            return response()->json([
                'status' => true,
                'message' => 'User Logged In Successfully',
                'token' => $user->createToken("MOBIL_TOKEN")->plainTextToken
            ], 200);
        } catch (\Throwable $th) {
            DB::rollback();
            return $this->errorResponse(
                'error_exception',
                $th->getMessage(),
                500
            );
        }
    }
}
