<?php

namespace App\Http\Controllers;

class UserProductController extends Controller
{

    /**
     * Display the list product.
     *
     * @return \Illuminate\Http\Response
     */
    public function list($status='')
    {
        return view('v1/user/product/list', ['status' => $status]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        switch ($id) {
            case '1' : {
                return view('v1/user/product/detail1');
            }
            case '2' : {
                return view('v1/user/product/detail2');
            }
            case '3' : {
                return view('v1/user/product/detail3');
            }
            case '4' : {
                return view('v1/user/product/detail4');
            }
            case '5' : {
                return view('v1/user/product/detail5');
            }
            case '6' : {
                return view('v1/user/product/detail6');
            }
            case '7' : {
                return view('v1/user/product/detail7');
            }
            case '8' : {
                return view('v1/user/product/detail8');
            }
            case '9' : {
                return view('v1/user/product/detail9');
            }
            case '10' : {
                return view('v1/user/product/detail10');
            }
            case '11' : {
                return view('v1/user/product/detail11');
            }
            default: {
                return view('v1/user/product/detail1');
            }
        }
    }
}
