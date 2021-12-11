<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ClientRequest;

class AcountController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function thanks()
    {
        return view('thanks');
    }
}
