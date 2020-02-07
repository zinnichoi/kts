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
        return view('user/home/index');
    }

    public function introduce()
    {
        return view('user/general/introduction');
    }

    public function designStyle()
    {
        return view('user/general/design-style');
    }

    public function leader()
    {
        return view('user/general/leader');
    }

    public function service()
    {
        return view('user/service/index');
    }

    public function blog($id=0)
    {
        if ($id != 0) {
            return view('user/blog/detail');
        }
        return view('user/blog/list');
    }

    public function career($id=0)
    {
        if ($id != 0) {
            return view('user/career/detail');
        }
        return view('user/career/list');
    }

    public function contact()
    {
        return view('user/contact/index');
    }
}
