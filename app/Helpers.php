<?php

use Illuminate\Http\Response;

if (!function_exists('apiResponse')) {
    function apiResponse($response)
    {
        $code = $response['code'] ??  Response::HTTP_OK;
        $response = [
            'message' => $response['message'] ?? '',
            'code' => $code,
            'data' => $response['data'] ?? [],
            'success' => $response['success'] ?? true
        ];
        return response()->json($response, $code);
    }
}
