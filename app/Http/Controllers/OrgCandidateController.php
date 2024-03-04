<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;
use Carbon\Carbon;

class OrgCandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Candidate::paginate(3);
        return view('users.election_candidate.org_candidates_index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.election_candidate.election_register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $insert["name"] = $request["candidate_name"];
        $insert["email"] = $request["email"];
        $insert["contact"] = $request["contact"];
        $insert["password"] = bcrypt($request["password"]);
        $insert["post"] = $request["post"];
        $insert['created_at'] = Carbon::now();
        $insert["slogan"] = $request["slogan"];
        // $insert["logo"] = $request["logo"];

        // dd($insert);
        // INSERT INTO `candidates`(`id`, `name`, `email`, `contact`, `password`, `post`, `created_at`, `updated_at`, `slogan`, `logo`) VALUES ()
        // $status = DB::table("users")->insert($insert);

        $status = Candidate::insert($insert);

        if ($request["org_registered_candidates_list"]) {
            return redirect('registered_candidates_list');
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
