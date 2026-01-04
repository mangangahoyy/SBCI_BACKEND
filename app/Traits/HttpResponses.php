<?php

namespace App\Traits;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

trait HttpResponses
{
    protected function success(string $message, $data, int $code = 200)
    {
        return response()->json([
            'message' => $message,
            'data' => $data
        ], $code);
    }

    protected function error(string $message,bool $error, int $code)
    {
        return response()->json([
            'message' => $message,
            'error' => $error
        ], $code);
    }
    protected function unauthorized(int $code , $message = 'Not Allowed')
    {
        return response()->json([
            'status' => 'Not Allowed',
            'message' => 'Unauthorized access.',
        ], $code);
    }


}
