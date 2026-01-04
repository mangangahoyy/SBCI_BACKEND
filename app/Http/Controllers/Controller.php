<?php

namespace App\Http\Controllers;

use App\HttpResponses as AppHttpResponses;
use App\Traits\BorrowingTrait;
use App\Traits\HttpResponses;
use App\Traits\StoreImageProcessTrait;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Controller
{
    use AuthorizesRequests, ValidatesRequests, HttpResponses;
}
