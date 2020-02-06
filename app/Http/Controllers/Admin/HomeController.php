<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2/6/2020
 * Time: 9:10 PM
 */

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class HomeController extends Controller {
    public function index()
    {
        return view('home/welcome');
    }
}