<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LogsController extends Controller
{
    public function index(Request $request)
    {
        $logs = DB::table('logs')->insert(['data' => json_encode($request->all())]);
        return response()->json($logs);
    }
}
