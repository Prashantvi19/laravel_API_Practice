<?php

namespace App\Http\Controllers;

use App\Models\personalinfo;
use Carbon\Carbon;

use Illuminate\Http\Request;


// `personalinfos`(`id`, `name`, `email`, `contact`, `address`, `pincode`, `country`, `created_at`, `Updated_at`)
class personalinfos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $response = ['status' => false, 'message' => 'Something went wrong in the store.'];

        $data = $request->all();
        $data['created_at'] = Carbon::now();
        $data = personalinfo::insert($data);

        if ($data) {
            //$data = ['data' =>$request->all(),'2nd' => 'response received'];
            $response = ['status' => True, 'message' => 'Information Successfully Submitted ! Thanks .', 'data' => $request->all(), 'insert' => 'Successfully Submitted ' . $data];
        }

        return response()->json($response);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $response['status'] = false;
        $response['message'] = 'Something went wrong';

        $edit = personalinfo::find($id)->toArray();


        if ($edit) {
            $response['status'] = true;
            $response['message'] = 'Data Successfully find';
            $response['data'] = $edit;
        }


        return response()->json($response);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $response['status'] = false;
        $response['message'] = 'Something went wrong';
        // $response['data'] = $request->all();
        $response['id'] = $id;
        $value = $request->all();
        $response['value'] = $value;
        $update = personalinfo::where('id', $id)->update($value);
        if ($update) {
            $response['status'] = true;
            $response['message'] = 'Updated Successfully';
            $response['value'] = $value;
            $response['update'] = $update;
        }
        return (response()->json($response));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $response['status'] =false;
       $response['message'] ='Something went wrong';
       $response['id'] =$id;

       $delete = personalinfo::where('id',$id)->delete();
       
       if($delete){
        $response['status'] =true;
        $response['message'] ='Successfully Deleted';
        $response['Delete id'] =$delete;
       }
       return response()->json($response);
    }
}