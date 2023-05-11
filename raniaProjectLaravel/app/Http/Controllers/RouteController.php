<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    //
public function index() {
    return "This is from Controller";
}


}
Route::get('/controller_route', [RouteController::class, 'index']);
