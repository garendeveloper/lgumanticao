<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cashbook;
use App\Models\ReferenceNumber;
use App\Models\Particular;
use App\Models\Supplier;
use DB;

class BankReconController extends Controller
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
            return view('bankrecon', $data);
        }
       else return redirect('/')->with('Fails', 'You must be logged in!');
    }
    public function get_allResponsibilityCenters()
    {
        $data = DB::select('select * from responsibilitycenters');
        echo json_encode($data);
    }
    public function encash_check(Request $request)
    {
        $check_ids = $request->ids;
        $not_checked = $request->not_checked;
        $fund = $request->fund;
        $year = $request->year;
        $month = $request->month;

        $data = DB::select('select cashbooks.*, cashbooks.id as cashbook_id, funds.*, years.*, particulars.*
                            from cashbooks, funds, years, particulars
                            where funds.id = cashbooks.fund_id
                            and years.id = cashbooks.year_id
                            and particulars.id = cashbooks.particular_id
                            and funds.id = "'.$fund.'"
                            and years.id = "'.$year.'"
                            and cashbooks.month = "'.$month.'"
                            order by cashbooks.created_at desc');

        if(!empty($not_checked))
        {
            foreach($data as $d){
                for($i = 0; $i<count($not_checked); $i++){
                    if($not_checked[$i] == $d->cashbook_id){
                        $cashbook = Cashbook::findOrFail($not_checked[$i]);
                        $cashbook->encashment_status = 0;
                        $cashbook->update();
                    }
                }
            }
        }
       
        if(!empty($check_ids))
        {
            foreach($data as $d){
                for($i = 0; $i<count($check_ids); $i++){
                    if($check_ids[$i] == $d->cashbook_id){
                        $cashbook = Cashbook::findOrFail($check_ids[$i]);
                        $cashbook->encashment_status = 1;
                        $cashbook->update();
                    }
                }
            }
        }
        
        return response()->json([
            'status' => 200,
            'success' => 'Check successfully encash!'
        ]);
        
    }
    public function encashments()
    {
        $user_info = session('LoggedUser');
        if(!empty($user_info))
        {
            $data = [
                'user_info' => $user_info,
            ];
            return view('encashments', $data);
        }
        else return redirect('/')->with('Fails', 'You must be logged in!');
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
    public function outstanding_checks()
    {
        $user_info = session('LoggedUser');
        if(!empty($user_info))
        {
            $data = [
                'user_info' => $user_info,
            ];
            return view('outstandingchecks', $data);
        }
        else return redirect('/')->with('Fails', 'You must be logged in!');
    }
    public function get_allOutstandingChecks(Request $request)
    {
        $fund = $request->fund;
        $year = $request->year;
        $month = $request->month;

        $fund_info = DB::SELECT('SELECT funds.*, funds.id as fund_id, bank_accounts.*, bank_accounts.id as bankaccount_id
                FROM funds, bank_accounts
                WHERE bank_accounts.id = funds.bankaccount_id
                AND funds.id = "'.$fund.'"');

        $book_balance = DB::select('select cashbooks.*, cashbooks.id as cashbook_id, funds.*, years.*, particulars.*, particulars.id as particular_id, funds.id as fund_id, years.id as year_id
        from cashbooks, funds, years, particulars
        where funds.id = cashbooks.fund_id
        and years.id = cashbooks.year_id
        and particulars.id = cashbooks.particular_id
        and funds.id = "'.$fund.'"
        and years.id = "'.$year.'"
        and cashbooks.month = "'.$month.'"
        order by cashbooks.created_at desc');

        $total_bookBalance = 0;
        foreach($book_balance as $bb)
        {
            if($bb->credit != null AND $bb->debit == null)
            {
                $total_bookBalance += $bb->credit;
            }
            if($bb->credit == null AND $bb->debit != null)
            {
                $total_bookBalance += $bb->debit;
            }
        }

        $data = DB::select('select cashbooks.*, cashbooks.id as cashbook_id, funds.*, years.*, particulars.*, particulars.id as particular_id, funds.id as fund_id, years.id as year_id
                            from cashbooks, funds, years, particulars
                            where funds.id = cashbooks.fund_id
                            and years.id = cashbooks.year_id
                            and particulars.id = cashbooks.particular_id
                            and funds.id = "'.$fund.'"
                            and years.id = "'.$year.'"
                            and cashbooks.month = "'.$month.'"
                            and cashbooks.encashment_status = 0
                            order by cashbooks.created_at desc');
        
        $referenceno = DB::select(' SELECT referenceno, cashbooks.date
                                    FROM cashbooks, funds, years, particulars
                                    WHERE funds.id = cashbooks.fund_id
                                    AND years.id = cashbooks.year_id
                                    AND particulars.id = cashbooks.particular_id
                                    and funds.id = "'.$fund.'"
                                    and years.id = "'.$year.'"
                                    and cashbooks.month = "'.$month.'"
                                    AND cashbooks.last_checkno = 1
                                    and cashbooks.encashment_status = 0
                                    order by cashbooks.created_at desc;');
                                    
        foreach($referenceno as $check_no){
            $referenceno = $check_no;
            break;
        }
        $data_values = [
            'data' => $data,
            'referenceno' => $referenceno,
            'fund_info' => $fund_info,
            'total_bookbalance' => $total_bookBalance,
        ];
        echo json_encode($data_values);
    }
    public function get_cashbookdata($cashbook_id)
    {

        $cashbook_data = DB::select('select cashbooks.*, cashbooks.id as cashbook_id, funds.*, years.*, particulars.*, particulars.id as particular_id, funds.id as fund_id, years.id as year_id,suppliers.*
        from cashbooks, funds, years, particulars, suppliers
        where funds.id = cashbooks.fund_id
        and years.id = cashbooks.year_id
        and particulars.id = cashbooks.particular_id
        and suppliers.id = particulars.supplier_id
        and cashbooks.id = "'.$cashbook_id.'"
        order by cashbooks.created_at desc');

        if(empty($cashbook_data))
        {
            $cashbook_data = DB::select('select cashbooks.*, cashbooks.id as cashbook_id, funds.*, years.*, particulars.*, particulars.id as particular_id, funds.id as fund_id, years.id as year_id
            from cashbooks, funds, years, particulars
            where funds.id = cashbooks.fund_id
            and years.id = cashbooks.year_id
            and particulars.id = cashbooks.particular_id
            and cashbooks.id = "'.$cashbook_id.'"
            order by cashbooks.created_at desc');
        }
  
        echo json_encode($cashbook_data);
    }
    public function get_allCashbooks(Request $request)
    {
        $fund = $request->fund;
        $year = $request->year;
        $month = $request->month;

        $data = DB::select('select cashbooks.*, cashbooks.id as cashbook_id, funds.*, years.*, particulars.*, particulars.id as particular_id, funds.id as fund_id, years.id as year_id
                            from cashbooks, funds, years, particulars
                            where funds.id = cashbooks.fund_id
                            and years.id = cashbooks.year_id
                            and particulars.id = cashbooks.particular_id
                            and funds.id = "'.$fund.'"
                            and years.id = "'.$year.'"
                            and cashbooks.month = "'.$month.'"
                            order by cashbooks.created_at desc');
        
        $referenceno = DB::select(' SELECT referenceno, cashbooks.date
                                    FROM cashbooks, funds, years, particulars
                                    WHERE funds.id = cashbooks.fund_id
                                    AND years.id = cashbooks.year_id
                                    AND particulars.id = cashbooks.particular_id
                                    and funds.id = "'.$fund.'"
                                    and years.id = "'.$year.'"
                                    and cashbooks.month = "'.$month.'"
                                    AND cashbooks.last_checkno = 1
                                    order by cashbooks.created_at desc;');
                                    
        foreach($referenceno as $check_no){
            $referenceno = $check_no;
            break;
        }
        $data_values = [
            'data' => $data,
            'referenceno' => $referenceno
        ];
        echo json_encode($data_values);
    }
    public function store(Request $request)
    {
        if(!empty($request->remove_id))
        {
            $cashbook = Cashbook::findOrFail($request->remove_id);
            $cashbook->delete();
            return response()->json([
                'deleteMessage' => 'Cashbook data successfully deleted!',
            ]);
        }
        else
        {
            $supplier = $request->supplier;
            if(!empty($supplier))
            {
                $supplier = Supplier::where('supplier', '=', $request->supplier)->first();
                if($supplier == "")
                {
                    $supplier = new Supplier;
                    $supplier->supplier = $request->supplier;
                    $supplier->save();
                    $supplier = $supplier->id;
                }
                else
                {
                    $supplier = $supplier->id;
                }
            }
            else {$supplier = NULL; }
    
            $particular = Particular::where('particular', '=', $request->particular)->first();
            if($particular == ""){ 
                $particular = new Particular;
                $particular->particular = $request->particular;
                $particular->supplier_id = $supplier;
                $particular->save();
                $particular = $particular->id;
            }
            else
            {   
                $particular = $particular->id;
                if(!empty($supplier))
                {
                    $particular = Particular::findOrFail($particular);
                    $particular->supplier_id = $supplier;
                    $particular->update();
                    $particular = $particular->id;
                }
            
            }
            
            $last_checkno = 0;
            if($request->reference_no != "")
            {
                $last_checkno = 1;
            }
            if($request->cashbook_id == "")
            {
                $check_cashbook = Cashbook::where('referenceno', '=', $request->reference_no)
                                        ->where('particular_id', '=', $particular)
                                        ->where('fund_id', '=', $request->fund)
                                        ->where('debit', '=', $request->debit)
                                        ->where('credit', '=', $request->credit)->first();
                
                if($check_cashbook == "") 
                {
                    $cashbook = new Cashbook;
                    $cashbook->referenceno = $request->reference_no;
                    $cashbook->particular_id = $particular;
                    $cashbook->fund_id = $request->fund;
                    $cashbook->year_id = $request->year;
                    $cashbook->month = $request->month;
                    $cashbook->date = $request->date;
                    $cashbook->debit = $request->debit;
                    $cashbook->credit = $request->credit;
                    $cashbook->last_checkno = $last_checkno;
                    $cashbook->save();
    
                    return response()->json([
                        'status' => 200,
                        'success' => 'Data successfully added!'
                    ]);
                }
                else {return response()->json([
                    'status' => 400,
                    'error' => 'Data already exist!'
                ]);}
            }
            else 
            {
                $cashbook = Cashbook::findOrFail($request->cashbook_id);
                $cashbook->particular_id = $particular;
                $cashbook->credit = $request->credit;
                $cashbook->debit = $request->debit;
                $cashbook->date = $request->date;
                $cashbook->update();
                return response()->json([
                    'status' => 200,
                    'success' => 'Data successfully updated!'
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
}
