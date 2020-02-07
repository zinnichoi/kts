<?php

namespace App\Http\Controllers;

class UserProductController extends Controller
{

    /**
     * Display the list product.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        return view('user/product/list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('user/product/detail');
    }


}
