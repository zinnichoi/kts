<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2/6/2020
 * Time: 9:10 PM
 */

namespace App\Http\Controllers;

class AdminHomeController extends Controller {
    public function index()
    {
        return view('home/welcome');
    }
}
