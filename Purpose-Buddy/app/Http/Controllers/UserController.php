<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    //


    public function api_show(){
        return response()->json([
            'status' => 200,
            'response' => 'OK',
            'users' => User::all()
        ]);
    }


    public function api_show_user( User $prd ){
        return response()->json([
            'status' => 200,
            'response' => 'OK',
            'users' => $prd
        ]);
    }

    public function api_create(Request $request) {

        $data = $request->validate(
            [
                'name' => 'required',
                'qty' => 'required|numeric',
                'price' => 'required|decimal:0,2',
                'description' => 'required'
            ]
        );

        // Log::channel('user')->info('Using API => Adding User : ' . json_encode( $request->all() ) );
        $newUser = User::create($data);

        return response()->json([
            'status' => 200,
            'response' => 'OK',
            'users' => $request->all()
        ]);

    }

    public function api_update( Request $request, User $prd ){

        $data = $request->validate(
            [
                'name' => 'required',
                'qty' => 'required|numeric',
                'price' => 'required|decimal:0,2',
                'description' => 'required'
            ]
        );

        // Log::channel('user')->info('Using API => Updating User : ' . json_encode( $prd ) );
        $prd->update($data);

        return response()->json([
            'status' => 200,
            'response' => 'OK',
            'users' => $data
        ]);
    }

    public function api_delete( Request $request, User $prd ){
        $data = $prd;
        $prd->delete();
        // Log::channel('user')->info('Using API => Deleting User : ' . json_encode( $prd ) );
        return response()->json([
            'status' => 200,
            'response' => 'OK',
            'message' => 'User ' . $data->id . ' Deleted Successfully',
            'users' => $data
        ]);
    }


}
