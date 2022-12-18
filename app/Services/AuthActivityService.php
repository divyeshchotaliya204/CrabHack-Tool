<?php

namespace App\Services;

use App\Models\AuthActivity;
use Illuminate\Support\Facades\Http;

class AuthActivityService
{
    public $activty = [];

    public $ipInfoService = [];

    public function __construct(IpInfoService $ipInfoService)
    {
        $this->ipInfoService = $ipInfoService->getAllInfo();
    }

    public function create($data)
    {
        $this->activty = AuthActivity::create([
            ...$data,
            'ip_address' => $this->ipInfoService['ip'],
            'location' => $this->ipInfoService['loc'],
            'country' => $this->ipInfoService['country'],
            'state' => $this->ipInfoService['region'],
            'city' => $this->ipInfoService['city'],
        ]);

        return $this;
    }
}
