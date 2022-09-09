<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\BankReconDesignatedOfficer;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_info = session('LoggedUser');
        if(!empty($user_info))
        {
            $data = [
                'user_info' => $user_info,
            ];
            return view('welcome', $data);
        }
        else {return redirect('/')->with('Fails', 'You must be logged in!');}
    }
    public function invoice()
    {
        $user_info = session('LoggedUser');
        
        if(!empty($user_info))
        {
            $data = [
                'user_info' => $user_info,
            ];
            return view('invoice', $data);
        }
        else return redirect('/')->with('Fails', 'You must be logged in!');
       
    }
    public function invoices()
    {
        return view('invoice');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            'disbursing_officer' => 'required|min:5',
            'accountant' => 'required|min:5',
            'auditor' => 'required|min:5',
            'mayor' => 'required|min:5',
        ]);

        if($validator->fails())
        {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages()
            ]);
        }
        else
        {
            // $bankrecondesignatedofficer = BankReconDesignatedOfficer::where('disbursing_officer','=', $request->disbursing_officer)
            //                                                     ->where('accountant','=', $request->accountant)
            //                                                     ->where('auditor','=', $request->auditor)
            //                                                     ->where('mayor','=', $request->mayor)->first();

            // if($bankrecondesignatedofficer == "")
            // {
            //     $bankrecondesignatedofficer = new BankReconDesignatedOfficer;
            //     $bankrecondesignatedofficer->disbursing_officer = $request->disbursing_officer;
            //     $bankrecondesignatedofficer->accountant = $request->accountant;
            //     $bankrecondesignatedofficer->auditor = $request->auditor;
            //     $bankrecondesignatedofficer->mayor = $request->mayor;
            //     $bankrecondesignatedofficer->save();
            // }
            // else 
            // {
            //     $bankrecondesignatedofficer = BankReconDesignatedOfficer::findOrFail($bankrecondesignatedofficer->id);
            //     $bankrecondesignatedofficer->disbursing_officer = $request->disbursing_officer;
            //     $bankrecondesignatedofficer->accountant = $request->accountant;
            //     $bankrecondesignatedofficer->auditor = $request->auditor;
            //     $bankrecondesignatedofficer->mayor = $request->mayor;
            //     $bankrecondesignatedofficer->update();
            // }
            
            $bankrecondesignatedofficer = BankReconDesignatedOfficer::findOrFail($request->des_id);
            $bankrecondesignatedofficer->disbursing_officer = $request->disbursing_officer;
            $bankrecondesignatedofficer->accountant = $request->accountant;
            $bankrecondesignatedofficer->auditor = $request->auditor;
            $bankrecondesignatedofficer->mayor = $request->mayor;
            $bankrecondesignatedofficer->update();
            return response()->json([
                'status'=> 200,
                'success' => 'Success'
            ]);
        }
    }
    public function get_designated_officerinfo()
    {
        echo json_encode(BankReconDesignatedOfficer::all());
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
