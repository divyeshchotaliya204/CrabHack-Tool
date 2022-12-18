<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AuthActivity extends Model
{
    use HasFactory, HasUlids, SoftDeletes;

    const LOGIN_TYPE = 1;
    const LOGOUT_TYPE = 2;

    protected $guarded = [];
}
