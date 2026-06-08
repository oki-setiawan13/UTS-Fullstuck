<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\Api\ClassroomController;

Route::post('/login', function (Request $request) {
    $user = User::where('email', $request->email)->first();

    if (!$user || !Hash::check($request->password, $user->password)) {
        return response()->json([
            'message' => 'Email atau password salah'
        ], 401);
    }

    $token = $user->createToken('api-token')->plainTextToken;

    return response()->json([
        'status' => 'success',
        'token'  => $token,
        'user'   => $user
    ]);
});

Route::middleware('auth:sanctum')->name('api.')->group(function () {

    Route::get('/user', function (Request $request) {
        return $request->user();
    })->name('user');

    Route::apiResource('students', StudentController::class);

    Route::apiResource('classrooms', ClassroomController::class);

    Route::post('/logout', function (Request $request) {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'Logout berhasil'
        ]);
    })->name('logout');

});