<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LGU Manticao Invoice</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="invoice_template/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="invoice_template/css/adminlte.min.css">
</head>
<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <!-- <div class="col-12">
        <h2 class="page-header">
          <i class="fas fa-globe"></i> <img src="admintemplate/img/lgulogo.png" alt="">
          <small class="float-right">Date: 2/10/2014</small>
        </h2>
      </div> -->
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-2 invoice-col">
        <address>
        <img src="admintemplate/img/lgulogo.png" alt="" >
        </address>
      </div>
      <div class="col-sm-1"></div>
      <!-- /.col -->
      <div class="col-sm-6 invoice-col">
        
        <address align = "center" style = "font-family: Calibri">
          Republic of the Philippines<br>
          Province of Misamis Oriental<br>
          Municipality of MANTICAO<br>
          -ooOoo-<br>
          <p style = "font-family: Algerian; ">OFFICE OF THE ACCOUNTANT</p>
          <p  style = "font-family: Algerian; font-size: 25px"><b>STATEMENT OF BANK RECONCILIATION</b>  </p> 
        </address>
      </div>
      <!-- /.col -->
      <!-- <div class="col-sm-4 invoice-col">
        <b>Invoice #007612</b><br>
        <br>
        <b>Order ID:</b> 4F3S8J<br>
        <b>Payment Due:</b> 2/22/2014<br>
        <b>Account:</b> 968-34567
      </div> -->
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-12">
        <table class="" style = "border: 1px solid black; padding: 20px; position: relative; width: 100%">
          <thead>
          <tr>
            <th style = "border: 1px solid black">NAME OF ACCOUNTS</th>
            <th style = "border: 1px solid black">DISBURSING OFFICER</th>
            <th style = "border: 1px solid black">PERIOD COVERED</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td style = "border: 1px solid black">Municipal Government of Manticao</td>
            <td style = "border: 1px solid black" id = "do"></td>
            <td style = "border: 1px solid black" id = "periodcovered"></td>
          </tr>
          
          </tbody>
        </table>
        <table style = "width: 100%; border: 1px solid #ccc">
          <tbody>
            <tr style = "text-align: center">
              <td style = "border: 1px solid black"><strong>AUTHORIZED DEPOSITORY</strong> </td>
              <td style = "border: 1px solid black"><strong>ADDRESS OF DEPOSITORY</strong></td>
            </tr>
          </tbody>
          <tbody>
            <tr style = "text-align: center">
              <td style = "border: 1px solid black" id = "bankaccount_name"></td>
              <td style = "border: 1px solid black" id = "address">Cagayan de Oro City</td>
            </tr>
          </tbody>
        </table>
        <table style = "width: 100%; border: 1px solid black">
          <tbody>
            <tr style = "text-align: center">
              <td style = "text-align: left; border: 1px solid black; width: 500px;"><strong id = "fund_name">FUND</strong > </td>
              <td style = "text-align: center; border: 1px solid black; width: 500px; "><strong id = "fund_name1"></strong></td>
            </tr>
            <tr>
              <td style = "border: 1px solid black; width: 500px; text-align: left"><strong id = "account_no"> </strong> </td>
              <td style = "border: 1px solid black; width: 500px; text-align: center"></td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- /.col -->
      <div class="col-md-12">
        <div >
          <table style = "width: 100%;  ">
            <tbody>
              <tr style = "text-align: center;">
                <td class="col-md-10" style = "text-align: left; border: 1px solid black"><strong><i>BOOK BALANCE</i> </strong>   >> >> >> >> >> >> >> >> >> >> >> >> >> >>  >> >> >> >> >> >> >> >> >> >> >> >> >> >></td>
                <td class = "col-md-2" style = "text-align: right; border: 1px solid black"> <strong id = "bookbalance"> P2343234234322</strong></td>
              </tr>
              <tr style = "text-align: center;">
                <td class="col-md-10" style = "text-align: left; ">Add-I Items requiring adjustment by the agency</td>
                <td class = "col-md-2" style = "text-align: right; border-left: 1px solid black"> <strong> </strong></td>
              </tr>
              <tr style = "text-align: center;">
                <td class="col-md-10" style = "text-align: left; border-bottom: 1px solid white;">--</td>
                <td class = "col-md-2" style = "text-align: right; border-left: 1px solid black"> <strong></strong></td>
              </tr>
              <tr style = "text-align: center;">
                <td class="col-md-10" style = "text-align: left; border-bottom: 1px solid white;">--</td>
                <td class = "col-md-2" style = "text-align: right; border-left: 1px solid black"> <strong> </strong></td>
              </tr>
              <tr style = "text-align: center;">
                <td class="col-md-10" style = "text-align: left; border-bottom: 1px solid white;"></td>
                <td class = "col-md-2" style = "text-align: right; border-left: 1px solid black"> <strong> </strong></td>
              </tr>
              <tr style = "text-align: center;">
                <td class="col-md-10" style = "text-align: right; border-bottom: 1px solid black;">Sub total >> >></td>
                <td class = "col-md-2" style = "text-align: left; border-left: 1px solid black; border-bottom: 1px solid black; border-top: 1px solid black"> <strong> P</strong></td>
              </tr>

              <tr style = "text-align: center;">
                <td class="col-md-10" style = "text-align: left; ">Deduct-II-Items requiring adjustment by the agency	</td>
                <td class = "col-md-2" style = "text-align: right; border-left: 1px solid black"> <strong> </strong></td>
              </tr>
              <tr style = "text-align: center;">
                <td class="col-md-10" style = "text-align: left; border-bottom: 1px solid white;">--</td>
                <td class = "col-md-2" style = "text-align: right; border-left: 1px solid black"> <strong></strong></td>
              </tr>
              <tr style = "text-align: center;">
                <td class="col-md-10" style = "text-align: left; border-bottom: 1px solid white;">--</td>
                <td class = "col-md-2" style = "text-align: right; border-left: 1px solid black"> <strong> </strong></td>
              </tr>
              <tr style = "text-align: center;">
                <td class="col-md-10" style = "text-align: left; border-bottom: 1px solid white;"> -- </td>
                <td class = "col-md-2" style = "text-align: right; border-left: 1px solid black"> <strong> </strong></td>
              </tr>
              <tr style = "text-align: center;">
                <td class="col-md-10" style = "text-align: right; border-bottom: 1px solid black;">Sub total >> >></td>
                <td class = "col-md-2" style = "text-align: left; border-left: 1px solid black; border-bottom: 1px solid black; border-top: 1px solid black"> <strong> P</strong></td>
              </tr>

              <tr style = "text-align: center;">
                <td class="col-md-10" style = "text-align: left; border-bottom: 1px solid black  "><strong> <i>ADJUSTED  BOOK  BALANCE   </i> </strong> >> >> >> >> >> >> >> >> >> >> >> >> >> >>  >> >> >> >> >> >> >> >> >> >> >></td>
                <td class = "col-md-2" style = "text-align: right; border-left: 1px solid black; border-bottom: 1px solid black "> <strong id = "adjusted_bb"> </strong></td>
              </tr>
              <tr style = "text-align: center;">
                <td class="col-md-10" style = "text-align: left; border-bottom: 1px solid black "><strong> <i>BALANCE PER BANK </i> </strong> >> >>   >> >>  >> >> >> >> >> >> >> >> >> >> >> >>  >> >> >> >> >> >> >> >> >> >> >></td>
                <td class = "col-md-2" style = "text-align: right; border-left: 1px solid black; border-bottom: 1px solid black "> <strong id = "bankbalances"> </strong></td>
              </tr>
              <tr style = "text-align: center;">
                <td class="col-md-10" style = "text-align: left; ">Add-III-Deposit in transit and other items requiring adjustment by the bank</td>
                <td class = "col-md-2" style = "text-align: right; border-left: 1px solid black"> <strong> </strong></td>
              </tr>
              <tr style = "text-align: center;">
                <td class="col-md-10" style = "text-align: left; border-bottom: 1px solid white;"> -- </td>
                <td class = "col-md-2" style = "text-align: right; border-left: 1px solid black"> <strong> </strong></td>
              </tr>
              <tr style = "text-align: center;">
                <td class="col-md-10" style = "text-align: left; border-bottom: 1px solid white;"> -- </td>
                <td class = "col-md-2" style = "text-align: right; border-left: 1px solid black"> <strong> </strong></td>
              </tr>
              <tr style = "text-align: center;">
                <td class="col-md-10" style = "text-align: left; border-bottom: 1px solid white;"> -- </td>
                <td class = "col-md-2" style = "text-align: right; border-left: 1px solid black"> <strong> </strong></td>
              </tr>
              <tr style = "text-align: center;">
                <td class="col-md-10" style = "text-align: left; border-bottom: 1px solid white;"> -- </td>
                <td class = "col-md-2" style = "text-align: right; border-left: 1px solid black"> <strong> </strong></td>
              </tr>
              <tr style = "text-align: center;">
                <td class="col-md-10" style = "text-align: right; border-bottom: 1px solid black;">Sub total >> >></td>
                <td class = "col-md-2" style = "text-align: left; border-left: 1px solid black; border-bottom: 1px solid black; border-top: 1px solid black"> <strong> P </strong></td>
              </tr>

              <tr style = "text-align: center;">
                <td class="col-md-10" style = "text-align: left; ">Deduct-IV-Items requiring adjustment by the Bank		</td>
                <td class = "col-md-2" style = "text-align: right; border-left: 1px solid black"> <strong> </strong></td>
              </tr>
              <tr style = "text-align: center;">
                <td class="col-md-10" style = "text-align: left; border-bottom: 1px solid white;">--</td>
                <td class = "col-md-2" style = "text-align: right; border-left: 1px solid black"> <strong></strong></td>
              </tr>
              <tr style = "text-align: center;">
                <td class="col-md-10" style = "text-align: left; border-bottom: 1px solid white;">--</td>
                <td class = "col-md-2" style = "text-align: right; border-left: 1px solid black"> <strong> </strong></td>
              </tr>
              <tr style = "text-align: center;">
                <td class="col-md-10" style = "text-align: left; border-bottom: 1px solid white;"> -- </td>
                <td class = "col-md-2" style = "text-align: right; border-left: 1px solid black"> <strong> </strong></td>
              </tr>
              <tr style = "text-align: center;">
                <td class="col-md-10" style = "text-align: right; border-bottom: 1px solid black;">Sub total >> >></td>
                <td class = "col-md-2" style = "text-align: left; border-left: 1px solid black; border-bottom: 1px solid black; border-top: 1px solid black"> <strong> P</strong></td>
              </tr>

              <tr style = "text-align: center;">
                <td class="col-md-10" style = "text-align: left; ">Deduct-V-Outstanding Checks (see schedule at the back)	</td>
                <td class = "col-md-2" style = "text-align: right; border-left: 1px solid black"> <strong> </strong></td>
              </tr>
              <tr style = "text-align: center;">
                <td class="col-md-10" style = "text-align: left; border-bottom: 1px solid white;">--</td>
                <td class = "col-md-2" style = "text-align: right; border-left: 1px solid black"> <strong></strong></td>
              </tr>
              <tr style = "text-align: center;">
                <td class="col-md-10" style = "text-align: left; border-bottom: 1px solid white;">--</td>
                <td class = "col-md-2" style = "text-align: right; border-left: 1px solid black"> <strong id = "outstanding_checks_total"> </strong></td>
              </tr>
              <tr style = "text-align: center;">
                <td class="col-md-10" style = "text-align: left; border-bottom: 1px solid white;"> -- </td>
                <td class = "col-md-2" style = "text-align: right; border-left: 1px solid black"> <strong> </strong></td>
              </tr>
              <tr style = "text-align: center;">
                <td class="col-md-10" style = "text-align: right; border-bottom: 1px solid black;" >Total >> >></td>
                <td class = "col-md-2" style = "text-align: right; border-left: 1px solid black; border-bottom: 1px solid black; "> </td>
              </tr>

              <tr style = "text-align: center;">
                <td class="col-md-10" style = "text-align: left; border-bottom: 1px solid black  "><strong> <i>ADJUSTED  BANK  BALANCE   </i> </strong> >> >> >> >> >> >> >> >> >> >> >> >> >> >>  >> >> >> >> >> >> >> >> >> >> >></td>
                <td class = "col-md-2" style = "text-align: right; border-left: 1px solid black; border-bottom: 1px solid black "  ><strong id = "total_adjustedBB"></strong></td>
              </tr>
              <tr>
                  <td style = "text-align: center">-- </td>
                </tr>
              <tr>
                  <td  style = "text-align: center; width: 900px">I  HEREBY  CERTIFY  that this statement and supporting schedules are correct</td>
                </tr>
                
            </tbody>
          </table>
          </div>
      </div>
      </div>
    <!-- /.row -->
    <div class="row">
    <div class="col-md-12">
        <table  style = "width: 100%">
          <tbody>
            <tr style = "text-align: center;">
              <td style = "text-align: left; width: 500px">- </td>
              <td  style = "text-align:left; width: 500px ;">-</td>
            </tr>
            <tr style = "text-align: center;">
              <td style = "text-align: left;width: 500px"></td>
              <td  style = "text-align: left; width: 500px ;">-</td>
            </tr>
            <tr style = "text-align: center;">
              <td style = "text-align: center; width: 200px; border-bottom: 1px solid black; "> <strong></strong</td>
              <td style = "text-align: center; width: 200px;"></td>
              <td  style = "text-align: center; width: 200px ;  border-bottom: 1px solid black;"><strong id= "ac"></strong> </td>
            </tr>
            <tr style = "text-align: center;">
              <td style = "text-align: center; width: 200px; "> <strong>Date</strong</td>
              <td style = "text-align: center; width: 200px;"></td>
              <td  style = "text-align: center; width: 200px ; ">Municipal Accountant </td>
            </tr>
            <tr style = "text-align: center;">
              <td style = "text-align: left;; width: 500px">- </td>
              <td  style = "text-align: left;; width: 500px ;">-</td>
            </tr>
            <tr style = "text-align: center;">
              <td style = "text-align: left; width: 500px">Verified and Correct: </td>
              <td  style = "text-align: left;; width: 500px ;">-</td>
            </tr>
            <tr style = "text-align: center;">
              <td style = "text-align: left;; width: 500px">- </td>
              <td  style = "text-align:left;; width: 500px ;">-</td>
            </tr>
            <tr style = "text-align: center;">
              <td style = "text-align: left; width: 500px">- </td>
              <td style = "text-align: right; width: 200px">Noted By: </td>
              <td  style = "text-align: left; width: 300px;"> </td>
            </tr>

            <tr style = "text-align: center;">
              <td style = "text-align: center; width: 200px; border-bottom: 1px solid black; "> <strong id = "at"></strong</td>
              <td style = "text-align: center; width: 200px;"></td>
              <td  style = "text-align: center; width: 200px ;  border-bottom: 1px solid black;"><strong id = "m"></strong> </td>
            </tr>
            <tr style = "text-align: center;">
              <td style = "text-align: center; width: 200px">COA State Auditor</td>
              <td style = "text-align: center; width: 200px;"></td>
              <td  style = "text-align: CENTER; width: 200px;">Municipal Mayor</td>
            </tr>
            <tr style = "text-align: center;">
              <td style = "text-align: center; width: 200px">Audit Team Leader</td>
              <td  style = "text-align: CENTER; width: 200px"> </td>
              <td  style = "text-align: CENTER; width: 200px"> </td>
            </tr>
          </tbody>
        </table>
      
    </div>
    <div class="row">
      <!-- accepted payments column -->
      <div class="col-6">
    
      </div>
     
      <div class="col-6">
 
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
  <section class = "invoice">
    <!-- title row -->
    <div class="row">

    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-2 invoice-col">
        <address>
        <!-- <img src="admintemplate/img/lgulogo.png" alt="" > -->
        </address>
      </div>
      <div class="col-sm-1"></div>
      <!-- /.col -->
      <div class="col-sm-6 invoice-col">
        
        <address align = "center" style = "font-family: Calibri">
          <p style = "font-family: Courier New; font-size: 35px; "><strong>OUTSTANDING CHECKS</strong> </p>
          <p  style = "font-family: Algerian; font-size: 15px" id = "outstanding_date"> </p> 
        </address>
      </div>
     
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
    <div class="" >
          <table class = "table table-responsive" style = "  position: relative; width: 100%; font-family: Arial Narrow">
              <thead >
                <tr  style = " border: 1px solid black;">
                  <th style = "width: 300px">Date</th>
                  <th style = "width: 300px">Check No.</th>
                  <th style = "width: 300px">Particulars</th>
                  <th style = "width: 300px; text-align: right">Amount</th>
                </tr>
              </thead>
              <tbody id = "tbl_outstandingchecks">
                 
              </tbody>
          </table>
      </div>
    </div>
      <!-- /.col -->

    <div class="row">
      <!-- accepted payments column -->
      <div class="col-6">

      </div>
      <!-- /.col -->
      <div class="col-6">
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
</div>
<!-- ./wrapper -->

<div class="modal fadeIn selectmodal" id="modal-lg">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Check and select classification for reports</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    
      <div class="modal-body">
        <div class="row">
        <div class="col-md-3">
								<label class="control-label">Type of Funds</label>
									<select  class = "form-control "id="fund" name = "fund" style = "font-family: Segoe UI;   border: 1px solid black">
									<option value = "">-- Please Select Fund -- </option>
									</select>
						  </div>
						<div class="col-md-3">
								<label class="control-label">Year</label>
								
									<select name = "year" class = "form-control" id="year" style = "font-family: Segoe UI;  border: 1px solid black">
									</select>
						
						</div>
						<div class="col-md-3">
								<label class="control-label">Month</label>
									<select   id="month" class = "form-control" style = "font-family: Segoe UI;  border: 1px solid black">
										<?php
											$month = date('M');
											$month_val = "";
											if($month == 'Jan') {$month = 1; $month_val = "January"; }
											if($month == 'Feb') {$month = 2; $month_val = "February"; }
											if($month == 'Mar') {$month = 3; $month_val = "March"; }
											if($month == 'Apr') {$month = 4; $month_val = "April"; }
											if($month == 'May') {$month = 5; $month_val = "May"; }
											if($month == 'Jun') {$month = 6; $month_val = "June"; }
											if($month == 'Jul') {$month = 7; $month_val = "July"; }
											if($month == 'Aug') {$month = 8; $month_val = "August"; }
											if($month == 'Sep') {$month = 9; $month_val = "September"; }
											if($month == 'Oct') {$month = 10; $month_val = "October"; }
											if($month == 'Nov') {$month = 11; $month_val = "November"; }
											if($month == 'Dec') {$month = 12; $month_val = "December"; }
										?>
										<option value="<?= $month?>"><?= $month_val ?></option>
										<option value="1">January</option>
										<option value="2">February</option>
										<option value="3">March</option>
										<option value="4">April</option>
										<option value="5">May</option>
										<option value="6">June</option>
										<option value="7">July</option>
										<option value="8">August</option>
										<option value="9">September</option>
										<option value="10">October</option>
										<option value="11">November</option>
										<option value="12">December</option>
									</select>
						</div>
            <div class="col-md-3">
								<label class="control-label">BALANCE PER BANK</label>
									<input type="number" id = "balanceofbank"   name = "balanceofbank" class = "form-control" style = "text-align: right; background-color: darkblue; color: white" step="0.01" autocomplete = "off" required>
						  </div>
        </div>
          <br>
        <div class="row">
        <ul id = "ajaxresponse"></ul>
          <form id ="cb_form" action="" method = "post">
            <input type="hidden" name = "des_id" id = "des_id">
          <div class="col-12">
          <table class = "table table-bordered " id = "tbl_designationOfficers" style= " border-top: 2px solid #ccc;  ">
						<tbody>
							<tr>
								<td><strong>DISBURSING OFFICER</strong></td>
								<td  style = " font-size: 20px; height: 40px;"  >
									<input  name="disbursing_officer" id = "disbursing_officer" type = "text"   autocomplete = "off" style = "text-align: center; font-family: Segoe UI; box-sizing: border-box; height: 40px; width: 100%" required>
								</td>
							</tr>
							<tr>
								<td><STRONG>MUNICIPAL ACCOUNTANT</STRONG></td>
								<td  style = " font-size: 20px; height: 40px;"  >
									<input  name="accountant" id = "accountant" type = "text"   autocomplete = "off" style = "text-align: center; font-family: Segoe UI; box-sizing: border-box; height: 40px; width: 100%" required>
								</td>
							</tr>
							<tr>
								<td><STRONG>COA / STATE AUDITOR</STRONG></td>
								<td  style = " font-size: 20px; height: 40px;"  >
									<input  name="auditor" id = "auditor" type = "text"   autocomplete = "off" style = "text-align: center; font-family: Segoe UI; box-sizing: border-box; height: 40px; width: 100%" required>
								</td>
							</tr>
							<tr>
								<td><STRONG>MUNICIPAL MAYOR</STRONG></td>
								<td  style = " font-size: 20px; height: 40px;"  >
									<input  name="mayor" id = "mayor" type = "text"   autocomplete = "off" style = "text-align: center; font-family: Segoe UI; box-sizing: border-box; height: 40px; width: 100%" required>
								</td>
							</tr>
							<tr>
						
						</tbody>
					</table>
          </div>
          </form>
        </div>
        
      </div>
      <div class="modal-footer justify-content-between">
        <a class="btn btn-default"  href= "{{url('/dashboard')}}"><i class = "fa fa-home"></i> Back to home</a>
        <button type="button" class="btn btn-primary" id = "btn_print" ><i class = "fa fa-print"></i> Submit</button>
      </div>
    
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
      <!-- /.modal -->
<!-- Page specific script -->
<script src="admintemplate/js/jquery.min.js"></script> 
<script src="admintemplate/js/jquery.ui.custom.js"></script> 
<script src="admintemplate/js/bootstrap.min.js"></script> 
<script src="admintemplate/js/jquery.flot.min.js"></script> 
<script src="admintemplate/js/jquery.flot.resize.min.js"></script> 
<script src="admintemplate/js/jquery.peity.min.js"></script> 
<script>
  $(document).ready(function(){
    show_designatedOfficers();
    show_allYears();
		show_Funds();
		show_allParticulars();
   
    $(".selectmodal").modal({
        backdrop: 'static',
        keyboard: false,
    }, 'show');

	$("#btn_print").on('click', function(){
  

    var balanceper_bank = $("#balanceofbank").val();
    var fund = $("#fund").val();
    var month = $("#month").val();
    var year = $("#year").val();

    if(fund == "") alert("Please select fund!");
    else if(balanceper_bank == "") alert("Please type the bank balance of the selected fund");
    else
    {
      $.ajax({
        headers: {
							'X-CSRF-TOKEN': "{{csrf_token()}}",
						},
        type: 'POST',
        url: '/save_designated_officer',
        data: $("#cb_form").serialize(),
        dataType: 'json',
        success:  function(response)
        {
          if(response.status == 400)
          {
            $("#ajaxresponse").html("");
                    $("#ajaxresponse").removeClass('alert alert-danger');
              $("#ajaxresponse").addClass('alert alert-danger');
              $.each(response.errors, function (key, err_values){
              $("#ajaxresponse").append('<li>'+err_values+'</li>');
              });
          }
          else if(response.status == 200)
          {
            $(".selectmodal").modal('hide');
		        show_allCashbooks(fund, year, month, balanceper_bank);
            show_designatedOfficers();
            alert("Press Control+P to print the transaction");
          }
          else{}
        }
      })
      
    }
  })
	var month = $("#month").val();
	$("[name='month']").val(month);
	$("#search_item").on('keyup', function(){
      var value = $(this).val().toLowerCase();
      $("#cashbooks tbody tr").filter(function(){
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
	$("body").on('click', '.print', function(e){
		$("#print_modal").modal('show');
		$("#modal-title").text('Please check the designated officers');
	});
	$("#fund").on('change', function(e){
		var fund = $("#fund").val();
		var month = $("#month").val();
		var year = $("#year").val();
    var balanceper_bank = $("#balanceofbank").val();
		show_allCashbooks(fund, year, month, balanceper_bank);
	})
	$("#year").on('change', function(e){
		var year = $("#year").val();
		var month = $("#month").val();
		var fund = $("#fund").val();
		var balanceper_bank = $("#balanceofbank").val();
		show_allCashbooks(fund, year, month, balanceper_bank);
	})
	$("#month").on('change', function(e){
		var year = $("#year").val();
		var month = $("#month").val();
		var fund = $("#fund").val();
    var balanceper_bank = $("#balanceofbank").val();
		show_allCashbooks(fund, year, month, balanceper_bank);
	})

	function show_designatedOfficers()
	{
		$.ajax({
			type: 'GET',
			url: '/get_designated_officerinfo',
			dataType: 'json',
			success: function(data)
			{ 
				$("#disbursing_officer").val(data[0].disbursing_officer);
        $("#des_id").val(data[0].id);
        $("#accountant").val(data[0].accountant);
        $("#auditor").val(data[0].auditor);
        $("#mayor").val(data[0].mayor);

        $("#do").text(data[0].disbursing_officer);
        $("#ac").text(data[0].accountant);
        $("#at").text(data[0].auditor);
        $("#m").text(data[0].mayor);
			},
		})
	}
  function show_allParticulars()
	{
		$.ajax({
			type: 'GET',
			url: '/get_allParticulars',
			dataType: 'json',
			success: function(data)
			{
				var option = "";
				if(data.length < 0) return;
				else 
				{
					option += "<option value = ''> </option>";
					for(var i = 0; i<data.length; i++){
						option += "<option >"+data[i].particular+"</option>";
					}
					$("#particulars").html(option);
				}
				
			},
			error: function(data){
				alert('Something went wrong')
			}
		})
	}
	function show_Funds()
	{
		$.ajax({
			type: 'GET',
			url: '/get_allFunds',
			dataType: 'json',
			success:	function(data){
				var option = "";
				if(data.length < 0) return;
				else
				{
					if(data.length > 0){
						for(var i = 0; i<data.length; i++){
              var code = " - ";
              if(data[i].code != null) code = data[i].code;
							option += '<option value = '+data[i].fund_id+'>'+data[i].fund+' ('+code+')</option>';
						}
					}
					else{
						option += '<option value = ""> -- No data available -- </option>';
					}
					$("#fund").append(option);
				}
			},
			error:	function(data){
				alert("Reload your page!")
			}
		});
	}

	$.fn.currencyFormat = function() {
		this.each( function( i ) {
			$(this).change( function( e ){
				if( isNaN( parseFloat( this.value ) ) ) return;
				this.value = parseFloat(this.value).toFixed(2);
			});
		});
		return this; //for chaining
	}
	function show_allCashbooks(fund, year, month, balanceper_bank)
	{
    var amount = "";
    const formatToCurrency = amount => {
            return "P" + amount.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, "$&,");
          };
		var month_innum = month;
		$.ajax({
			headers: {
					'X-CSRF-TOKEN': "{{csrf_token()}}",
				},
			type: 'POST',
			url: '/get_allOutstandingChecks',
			data: {
				fund: fund,
				year: year,
				month: month
			},
			dataType: 'json',
			success: function (data)
			{
        
          var row = "";
          var total_amount = 0;
        
          var year_text = $("#year option:selected").text();
          var month = month;
          var total_outstandingChecks = 0;
          for(var i = 0; i<data.data.length; i++)
          {
            const formatToCurrency1 = amount => {
            return "" + amount.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, "$&,");
          };
            var amount = 0;
            var debit = data.data[i].debit;
            var credit = data.data[i].credit;

            if(debit != null && credit == null) { total_amount += debit; amount = debit;}
            if(credit != null && debit == null) { total_amount += credit; amount = credit }

            var date = new Date(data.data[i].date);
            var month = date.getMonth()+1;
            if(month  == 1) month = "Jan";
            if(month  == 2) month = "Feb";
            if(month  == 3) month = "Mar";
            if(month  == 4) month = "Apr";
            if(month  == 5) month = "May";
            if(month  == 6) month = "Jun";
            if(month  == 7) month = "Jul";
            if(month  == 8) month = "Aug";
            if(month  == 9) month = "Sep";
            if(month  == 10) month = "Oct";
            if(month  == 11) month = "Nov";
            if(month  == 12) month = "Dec";

            row += '<tr>';
            row += '<td  style = "width: 250px">'+month+" "+date.getDate()+'</td>';
            row += '<td style = "width: 250px">'+data.data[i].referenceno+'</td>';
            row += '<td style = "width: 250px">'+data.data[i].particular+'</td>';
            row += '<td style = "width: 250px; text-align: right">'+formatToCurrency1(amount)+'</td>';
            row += "</tr>";
            total_outstandingChecks += amount;
          }
          row += '<tr>';
            row += '<td  style = "width: 250px"></td>';
            row += '<td style = "width: 250px"></td>';
            row += '<td style = "width: 250px; font-weight: bold; text-align: right">Total</td>';
            row += '<td style = "width: 250px; text-align: right; font-weight: bold; "><u style = "border-bottom: 1px double;"> '+formatToCurrency(total_outstandingChecks*1)+' </u></td>';
            row += "</tr>";
          
          var last_day = new Date(year_text , month_innum +1, 0).getDate();
          last_day = last_day.toString();
          // var date = new Date(data.reference_no.date); 
          if(month_innum  == 1) month = "January";
            if(month_innum  == 2) month = "February";
            if(month_innum  == 3) month = "March";
            if(month_innum  == 4) month = "April";
            if(month_innum  == 5) month = "May";
            if(month_innum  == 6) month = "June";
            if(month_innum  == 7) month = "July";
            if(month_innum  == 8) month = "August";
            if(month_innum  == 9) month = "September";
            if(month_innum  == 10) month = "October";
            if(month_innum  == 11) month = "November";
            if(month_innum  == 12) month = "December";
            
            // var dateformat = month + " "+date.getDate() + ", "+date.getFullYear();
          var code = "";
          var adjusted_bankBalance = total_amount+(balanceper_bank*1);
          if(data.fund_info[0].code != null)  $("#fund_name").text("Fund: "+data.fund_info[0].fund + " ("+data.fund_info[0].code+")");
          else  $("#fund_name").text("Fund: "+data.fund_info[0].fund + " ");
         
          $("#fund_name1").text(data.fund_info[0].fund);
          $("#outstanding_date").text("FOR THE MONTH OF "+month+" 1 - "+last_day+", "+year_text);
          $("#account_no").text("Account No: "+data.fund_info[0].account_no);
          $("#address").text(data.fund_info[0].address);
          $("#bankaccount_name").text(data.fund_info[0].bankaccount_name);
          $("#periodcovered").text(month+" 1 - "+last_day+", " +year_text);
          $("#bookbalance").text(formatToCurrency(data.total_bookbalance));
          $("#bankbalances").text(formatToCurrency(balanceper_bank*1));
          $("#adjusted_bb").text(formatToCurrency(data.total_bookbalance));
          $("#outstanding_checks_total").text(formatToCurrency(total_amount));
          $("#total_adjustedBB").text(formatToCurrency(adjusted_bankBalance));
          $("#tbl_outstandingchecks").html(row);
			},
			error:	function(error){
				alert("Something went wrong! Reload the page.")
			}
		})
	}
    $("body").on('click', '.btn_encash', function(e){
        e.preventDefault();
        var searchIDChecked = $("input:checkbox:checked").map(function(){
            return $(this).val();
        }).get(); // <----
        var not_checked = []
            $("input[type='checkbox'][name='encash[]']:not(:checked)").each(function (){
                not_checked.push($(this).val());
            });
        
        var fund = $("#fund").val();
		var year = $("#year").val();
		var month = $("#month").val();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': "{{csrf_token()}}",
            },
            type: 'POST',
            url: '/encash_check',
            data: {
                ids: searchIDChecked,
                not_checked: not_checked,
                month: month,
                year: year,
                fund: fund,
            },
            success:    function(response){
                alert(response.success);
            
            },
            error: function(e){
                alert("Something went wrong!");
            }
        })
        show_allCashbooks(fund, year, month);
    })
	function show_allYears(){
		$.ajax({
			type: 'GET',
			url: '/get_allYears',
			dataType: 'json',
			success:	function(data){
				var option = "";
				if(data.length < 0) return;
				else{
					if(data.length > 0){
						for(var i = 0; i<data.length; i++){
							option += '<option value = '+data[i].id+'>'+data[i].year+'</option>';
						}
					}
					else{
						option += '<option value = ""> -- No data available -- </option>';
					}
					$("#year").append(option);
				}
			},
			error:	function(data){
				alert("Reload your page!")
			}
		});
	}
  })
</script>
</body>
</html>
