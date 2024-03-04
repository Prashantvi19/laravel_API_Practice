<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\reactData;
use Carbon\Carbon;

// use DB;

class reactDataAPI extends Controller
{

    // public function reactData(Request $request)
    // {


        
    // // }
    // public function reactDataFetch()
    // {


        
    // }
    // public function reactFindDataUpdate(Request $request)
    // {


        
    // }
    // public function reactDataUpdate(Request $request)
    // {
    //     // "id": 130,
    //     // "name": "Prashnat Vis",
    //     // "email": "prashantvish19@gmail.com",
    //     // "contact": "123456",
    //     // "city": "jabalpur",
    //     // "created_at": "2023-05-25T07:44:09.000000Z",
    //     // "update_at": null

    //      }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response['status'] = false;
        $response['message'] = "Something went wrong";

        $data = reactData::get();

        // dd($data);
        if ($data) {
            $response['status'] = true;
            $response['message'] = "Insert Success";
            $response['contacts'] = $data;
        }
        return response()->json($response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {
        $response['status'] = false;
        $response['message'] = "Something went wrong";

        $reactData["name"] = $request["name"];
        $reactData["email"] = $request["email"];
        $reactData["contact"] = $request["contact"];
        $reactData["city"] = $request["city"];
        $reactData['created_at'] = Carbon::now();

        $status = reactData::insert($reactData);

        if ($status) {
            $response['status'] = true;
            $response['message'] = "Insert Success";
        }
        return response()->json($response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Request $request)
    {
        $response['status'] = false;
        $response['message'] = "No data found";

        $user_id = $request['id'];

        // $data = reactData::get()->where('id', $user_id)->toArray();
        $data = reactData::find($user_id);

        //  dd($data);
        if ($data) {
            $response['status'] = true;
            $response['message'] = "Finded by " . $user_id;
            $response['contacts'] = $data;
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
    public function update(Request $request)
    {
        $response['status'] = false;
        $response['message'] = "Something went wrong";
        // ['id', 'name', 'email', 'contact', 'city', 'created_at', 'update_at']
        $user_id = $request['id'];
        $update["name"] = $request["name"];
        $update["email"] = $request["email"];
        $update["contact"] = $request["contact"];
        $update["city"] = $request["city"];
        $update['updated_at'] = Carbon::now();

        $output = reactData::where('id', $user_id)->update($update);

        if ($output) {
            $response['status'] = true;
            $response['message'] = "Successfully updated";
            $response['data'] = $output;
        }
        return response()->json($response);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}