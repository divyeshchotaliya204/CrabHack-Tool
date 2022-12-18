<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class IpInfoService
{
    private $ipInfo = [];

    public function __construct()
    {
        $token = config('app.ipinfo_access_token');
        $response = Http::get("https://www.ipinfo.io?token={$token}");
        if ($response->successful()) $this->ipInfo = $response;
    }

    public function getAllInfo()
    {
        return $this->ipInfo->json();
    }
}
