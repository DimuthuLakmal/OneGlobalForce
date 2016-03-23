<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Reply as Reply;

class ReplyController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $rules = array(
            'name' => 'required',
            'club' => 'required',
            'country' => 'required',
            'reply' => 'required'
        );
        $validator = \Illuminate\Support\Facades\Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            echo json_encode('validation_fail');
        } else {
            Reply::create(array(
                'comment_id' => $request->input('comment_id'),
                'name' => $request->input('name'),
                'club' => $request->input('club'),
                'country' => $request->input('country'),
                'reply' => $request->input('reply')
            ));
            echo json_encode('successfully_stored');
        }

//        Reply::create(array(
//            'comment_id' => \Illuminate\Support\Facades\Input::get('comment_id'),
//            'name' => \Illuminate\Support\Facades\Input::get('name'),
//            'club' => \Illuminate\Support\Facades\Input::get('club'),
//            'country' => \Illuminate\Support\Facades\Input::get('country'),
//            'reply' => \Illuminate\Support\Facades\Input::get('reply')
//        ));
//        echo json_encode('successfully_stored');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $reply = Reply::find($id);
        $reply->likes = $request->input('likes');
        $reply->save();
        echo json_encode('successfully_liked');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
