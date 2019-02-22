<?php

namespace App\Http\Controllers\App\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\LoginController;

class CustomLoginController extends LoginController
{
    protected $redirectTo = '/';
}
