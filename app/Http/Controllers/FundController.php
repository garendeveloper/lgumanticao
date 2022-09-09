<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fund;
use DB;
use App\Models\BankAccount;
use Illuminate\Support\Facades\Validator;
use App\Models\Cashbook;
class FundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_info = session('LoggedUser');
        if(session()->has('LoggedUser'))
        {
            $data = [
                'user_info' => $user_info,
            ];
            return view('funds', $data);
        }
        else return redirect('/')->with('Fails', 'You must be logged in!');
    }
    public function get_bankaccount_info($id)
    {
        $data = BankAccount::where('bankaccount_no', '=', $id)->get();
        echo json_encode($data);
    }
    public function get_allbankaccount()
    {
        $data = BankAccount::all();
        echo json_encode($data);
    }
    public function get_fundinfo($id)
    {
        $data = DB::SELECT('SELECT funds.*, funds.id as fund_id, bank_accounts.*, bank_accounts.id as bankaccount_id
                FROM funds, bank_accounts
                WHERE bank_accounts.id = funds.bankaccount_id
                AND funds.id = "'.$id.'"');
        echo json_encode($data);
    }
    public function actions(Request $request)
    {
        $validator = Validator::make($request->all(), [
                'fund' => 'required',
                'account_no'=>'required',
                'bankaccount_name'=>'required', 
                'address'=>'required',
        ]);

        if($validator->fails())
        {
            return response()->json([
                'status' => 105,
                'errors' => $validator->messages(),
            ]);
        }
        else
        {
            $bankaccount = BankAccount::where('address', '=', $request->address)
                                        ->where('bankaccount_name', '=', $request->bankaccount_name)    
                                        ->first();
            if(!empty($bankaccount->id))
            {
                $bankaccount = $bankaccount->id;
            }
            else
            {
                $bankaccount = new BankAccount;
                $bankaccount->address = $request->address;
                $bankaccount->bankaccount_name = $request->bankaccount_name;
                $bankaccount->save();
                $bankaccount = $bankaccount->id;
            }
            
            if(empty($request->fund_id))
            {
                $fund = Fund::where('fund', '=', $request->fund)
                                ->where('bankaccount_id', '=', $bankaccount)->first();
                if(!empty($fund->id))
                {
                    return response()->json([
                        'status' => 106,
                        'fundexist_msg' => 'Fund already exist!',
                    ]);
                }
                else
                {
                    $fund = new Fund;
                    $fund->fund = $request->fund;
                    $fund->code = $request->code;
                    $fund->account_no = $request->account_no;
                    $fund->bankaccount_id = $bankaccount;
                    $fund->save();
                    return response()->json([
                        'status' => 200,
                        'fundadded_msg' => 'Fund successfully added!',
                    ]);
                }
            }
            else
            {
                $fund = Fund::findOrFail($request->fund_id);
                $fund->fund = $request->fund;
                $fund->code = $request->code;
                $fund->account_no = $request->account_no;
                $fund->bankaccount_id = $bankaccount;
                $fund->update();
                return response()->json([
                    'status' => 200,
                    'fundadded_msg' => 'Fund successfully updated!',
                ]);
            }
        }
    }
    public function get_all()
    {
        $data = DB::SELECT('SELECT funds.*, funds.id as fund_id, bank_accounts.*, bank_accounts.id as bankaccount_id
                            FROM funds, bank_accounts
                            WHERE bank_accounts.id = funds.bankaccount_id');
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
    public function delete($id)
    {
        $check_cashbook = Cashbook::where('fund_id', '=', $id)->first();
        if(!empty($check_cashbook))
        {
            return response()->json([
                'status' => 400,
                'error_msg' => 'Fund cannot be deleted! It might been used in other transactions',
            ]);
        }
        else
        {
            $fund = Fund::findOrFail($id);
            $fund->delete();
            return response()->json([
                'status' => 200,
                'message' => 'Fund successfully deleted!',
            ]);
        }
    }
}
