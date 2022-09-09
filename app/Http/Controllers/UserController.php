<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\DesignatedOfficer;
use DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\Office;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(session()->has('LoggedUser'))
        {
            $data = [
                'user_info' => session('LoggedUser'),
            ];
            return view('users', $data);
        }
        else return redirect('/')->with('Fails', 'You must logged in!');
    }
    public function get_allOffices()
    {
        echo json_encode(Office::all());
    }
    public function get_allDesignations()
    {
       echo json_encode(DesignatedOfficer::all());
    }
    public function get_allusers()
    {
        $data = DB::SELECT('select users.id as user_id, users.created_at as user_created_at, users.updated_at as user_updated_at, users.*, designatedofficers.*, offices.*
                            from designatedofficers, users, offices
                            where designatedofficers.id = users.designated_id
                            and offices.id = designatedofficers.office_id');
        echo json_encode($data);
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
    public function  get_userinfo($id)
    {
        $data = DB::SELECT('select users.id as user_id, users.created_at as user_created_at, users.updated_at as user_updated_at, users.*, designatedofficers.*, offices.*
        from designatedofficers, users, offices
        where designatedofficers.id = users.designated_id
        and offices.id = designatedofficers.office_id
        and users.id = "'.$id.'"');
        echo json_encode($data);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'bail|required|min:10|max:60',
            'email' => 'bail|email|min:5',
            'designation' => 'required|min:1',
            'office' => 'required|min:1',
        ]);

        if($validator->fails())
        {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        }
        else
        {
            $office = Office::where('office', '=', $request->office)->first();
            if($office == "")
            {
                $office = new Office;
                $office->office = $request->office;
                $office->save();
                $office = $office->id;
            }
            else $office = $office->id;

            $designated_work  = DesignatedOfficer::where('designation', '=', $request->designation)
                                                        ->where('office_id', '=', $office)
                                                        ->first();
            if($designated_work == "")
            {
                $designated_work = new DesignatedOfficer;
                $designated_work->designation = $request->designation;
                $designated_work->office_id = $office;
                $designated_work->save();
                $designated_work = $designated_work->id;
            }
            else $designated_work = $designated_work->id;

            $username = $request->name;
            $password = Hash::make($request->office);
            if($request->user_id == "")
            {
                $check = User::where('name', '=', $request->name)
                                ->where('email', '=', $request->email)
                                ->where('designated_id', $designated_work)
                                ->first();
    
                if($check == "")
                {
                    $user = new User;
                    $user->name = $request->name;
                    $user->email = $request->email;
                    $user->designated_id = $designated_work;
                    $user->username = $username;
                    $user->password = $password;
                    $user->save();
                    return response()->json([
                        'status' => 200,
                        'success'=> 'User has been successfully added',
                    ]);
                }
                else 
                {
                    return response()->json([
                        'status' => 101,
                        'fails' => 'User details already exists!',
                    ]);
                }
            }
            else
            {
                $user = User::find($request->user_id);
                $user->name = $request->name;
                $user->email = $request->email;
                $user->designated_id = $designated_work;
                $user->username = $username;
                $user->password = $password;
                $user->update();
                return response()->json([
                    'status' => 201,
                    'success'=> 'User has been successfully updated!',
                ]);
            }
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
    public function logout()
    {
        session()->pull('LoggedUser');
        return redirect('/')->with('Fails', 'Your session has been successfully turned off!');
    }
}
