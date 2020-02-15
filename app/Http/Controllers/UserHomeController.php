<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2/6/2020
 * Time: 9:10 PM
 */

namespace App\Http\Controllers;

class UserHomeController extends Controller {
    public function index()
    {
        return view('v1/user/home/index');
    }

    public function introduce()
    {
        return view('v1/user/general/introduction');
    }

    public function designStyle()
    {
        return view('v1/user/general/design-style');
    }

    public function leader()
    {
        return view('v1/user/general/leader');
    }

    public function service()
    {
        return view('v1/user/service/index');
    }

    public function blog($id=0)
    {
        if ($id != 0) {
            return view('v1/user/blog/detail');
        }
        return view('v1/user/blog/list');
    }

    public function career($id=0)
    {
        if ($id != 0) {
            return view('v1/user/career/detail');
        }
        return view('v1/user/career/list');
    }

    public function contact()
    {
        return view('v1/user/contact/index');
    }
}
