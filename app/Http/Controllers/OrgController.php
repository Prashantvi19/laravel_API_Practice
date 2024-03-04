<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Org;
use App\Models\reactData;
use Carbon\Carbon;
use DB;

class OrgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Org::paginate(4);
        return view('org.org_list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('org.org_get_data');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *
     */
    public function store(Request $request)
    {
        $insert["org_name"] = $request["org_name"];
        $insert["email"] = $request["email"];
        $insert["contact"] = $request["contact"];
        $insert["password"] = bcrypt($request["password"]);
        $insert['created_at'] = Carbon::now();
        // dd($insert);
        // $status = DB::table("users")->insert($insert);
        $status = Org::insert($insert);

        if ($request["org_registered_list"]) {
            return redirect('list_org_registered');
        } else {
            if ($status) {
                $key = "Success";
                $msg = "Successful registration";
            } else {
                $key = "Error";
                $msg = "Error in registration";
            }
            return redirect()->back()->with($key, $msg);
        }
    }
    public function APIstore(Request $request)
    {
        $response['status'] = false;
        $response['message'] = "Something went wrong";

        $insert["org_name"] = $request["org_name"];
        $insert["email"] = $request["email"];
        $insert["contact"] = $request["contact"];
        $insert["password"] = bcrypt($request["password"]);
        $insert['created_at'] = Carbon::now();
        // dd($insert);
        // $status = DB::table("users")->insert($insert);
        $status = Org::insert($insert);

        if ($status) {
            $response['status'] = true;
            $response['message'] = "Insert Success";
        }
        return response()->json($response);
    }
    public function APIindex()
    {

        $response['status'] = false;
        $response['message'] = "Something went wrong";

        $data = Org::get()
            ->toArray();


        if ($data) {
            $response['status'] = true;
            $response['message'] = "Success";
            $response['data'] = $data;
        }
        return response()->json($response);
    }
    public function APIdelete(Request $request)
    {

        $response['status'] = false;
        $response['message'] = "Something went wrong";

        $id = $request['id'];
        $data = Org::where('id', $id)->delete();


        if ($data) {
            $response['status'] = true;
            $response['message'] = "Success";
            $response['data'] = $data;
        }
        return response()->json($response);
    }
    public function APIupdate(Request $request)
    {
        $response['status'] = false;
        $response['message'] = "Something went wrong";

        $id = $request['id'];
        $update["org_name"] = $request["org_name"];
        $update["email"] = $request["email"];
        $update["contact"] = $request["contact"];
        $update["password"] = bcrypt($request["password"]);
        $update['updated_at'] = Carbon::now();

        $output = Org::where('id', $id)->update($update);

        if ($output) {
            $response['status'] = true;
            $response['message'] = "Success";
            $response['data'] = $output;
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
        //
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
        //
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