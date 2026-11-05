<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Models\Prospect;

use Illuminate\Http\Request;


class ProspectController extends Controller
{


    public function index()
    {
        return response()->json([
            'data' => Prospect::all()
        ]);
    }



    public function store(Request $request)
    {

        $data = $request->validate([

            'name'=>'required',
            'company'=>'required',
            'phone'=>'required',
            'email'=>'nullable',
            'source'=>'required',
            'status'=>'nullable',
            'notes'=>'nullable'

        ]);


        $prospect =
            Prospect::create($data);



        return response()->json([
            'message'=>'Prospect berhasil dibuat',
            'data'=>$prospect
        ]);

    }

}