<!DOCTYPE html>
<html lang="en">
<head>
<title>LGU Manticao - MALGECCO System</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

@include('scripts/header')
<style>

.widget-title{
	background:#cddee3;
	
}
.form-horizontal .controls {
    *display: inline-block;
    *padding-left: 10px;
    margin-left: 1px;
    *margin-left: 0;
}
.form-horizontal .controls {
    margin-left: 50px;
    padding: 10px 0;
}
.form-horizontal .control-label {
    padding-top: 15px;
    width: 50px;
}
select,  input[type="text"], input[type="password"], input[type="datetime"], input[type="datetime-local"], input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="number"], input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"], .uneditable-input {
    display: inline-block;
    height: 30px;
    padding: 0px 0px;
    margin-bottom: 10px;
    font-size: 14px;
    line-height: 30px;
    color: #555;
    vertical-align: middle;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
}

#particular {
  background-image: url('/css/searchicon.png'); /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 100%; /* Full-width */
  font-size: 16px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 12px; /* Add some space below the input */
}

#myUL {
  /* Remove default list styling */
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myUL li a {
  border: 1px solid #ddd; /* Add a border to all links */
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6; /* Grey background color */
  padding: 12px; /* Add some padding */
  text-decoration: none; /* Remove default text underline */
  font-size: 18px; /* Increase the font-size */
  color: black; /* Add a black text color */
  display: block; /* Make it into a block element to fill the whole list */
}

#myUL li a:hover:not(.header) {
  background-color: #eee; /* Add a hover effect to all links, except for headers */
}
#tbl_transaction  td input{
	width: 100%;
	position: relative;
}
</style>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">LGU MANTICAO – MALGECCO BANK RECONCILIATION SYSTEM</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-messaages-->
<div class="btn-group rightzero"> <a class="top_message tip-left" title="Manage Files"><i class="icon-file"></i></a> <a class="top_message tip-bottom" title="Manage Users"><i class="icon-user"></i></a> <a class="top_message tip-bottom" title="Manage Comments"><i class="icon-comment"></i><span class="label label-important">5</span></a> <a class="top_message tip-bottom" title="Manage Orders"><i class="icon-shopping-cart"></i></a> </div>
<!--close-top-Header-messaages--> 

<!--top-Header-menu-->
@include('layouts/topheader')
<!--close-top-Header-menu-->

@include('layouts/sidebar')
<div id="content">
			<div id="content-header">
				<div id="breadcrumb">
				<a href="{{ url('/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
				<a href="#">Bank Reconciliation</a>
				</div>
                <!-- <h1>Bank Reconciliation as of July 2022</h1> -->
			</div>
			
			<div class="container-fluid">
				<div class="row-fluid">
					<div class="span12">
						<div class="span2">
							<div class="control-group">
								<label class="control-label">Type of Funds</label>
								<div class="controls">
									<select  id="fund" name = "fund" style = "font-family: Segoe UI">
									<option value = "">-- Please Select Fund -- </option>
									</select>
								</div>
							</div>
						</div>
						<div class="span2">
							<div class="control-group">
								<label class="control-label">Year</label>
								<div class="controls">
									<select name = "year" id="year" style = "font-family: Segoe UI">
									</select>
								</div>
							</div>
						</div>
						<div class="span2">
							<div class="control-group">
								<label class="control-label">Month</label>
								<div class="controls">
									<select   id="month" style = "font-family: Segoe UI">
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
							</div>
						</div>
						<div class="span6" align = "right">
							<div class="control-group">
								<label class = "control-label">Search Cashbook Record</label>
								<div class="controls">
									<input type="text" name= "search" id= "search_item" style  = "font-family: Segoe UI; text-align: center" placeholder = " Search Here" >
								</div>
							</div>
						</div>
						
						<div class="widget-box">
							<div class="widget-title" style = "background-color: #0e1822; color: white">
								<span class="icon" style = "color: white">
									<!-- <i class="icon-info-sign"></i>									 -->
									<p id = "bankrecon_info" style = "color: white; font-weight: bold">Cashbook Transaction</p>
								</span>
							</div>
							<div class="widget-content nopadding">
								<div class="">
									<div class="">
										<table class = "table table-bordered " id = "tbl_transaction" style= "width: 100%; border-top: 2px solid #ccc;  ">
											<thead >
												<tr >
													<th >Check Date</th>
													<th >Check No</th>
													<th>DV Number</th>
													<!-- <th>Responsibility Center</th> -->
													<th>Payee</th>
													<th >Nature of Payment</th>
													<th >Amount</th>
													<!-- <th >CREDIT</th> -->
												</tr>
											</thead>
											<tbody>
												<form id ="cb_form" >
													<!-- @csrf -->
										
													<tr >
													<input type="text" style ="display:none" id = "cashbook_id">
													<input type="text" style ="display:none" id = "checkno_2">
													<input type="text" style ="display:none" id = "supplier_id">
													<td style = "font-size: 30px; text-align: right; " >
														<input type="date"  name = "date" id = "date" autocomplete = "off" style = "font-family: Segoe uI; height: 40px; text-align: center;" data-date-format="dd-mm-yyyy" class = "datepicker" required>
													</td>
													<td  style = "font-size: 20px; height: 40px;"  >
														<input type="number"  name = "reference_no"  value = "" autocomplete = "off" id = "reference_no" style = "font-family: Segoe uI; text-align: center;height: 40px "  >
													</td>
													<!-- <td  style = "font-size: 20px; height: 40px;"  >
														<input type="number"   name = "responsibilitycenter_no" value = "" autocomplete = "off" id = "reference_no" style = "font-family: Segoe uI; text-align: center;height: 40px "  >
													</td> -->
													<td  style = "font-size: 20px; height: 40px;"  >
														<input type="number"    name = "dv_no" id = "dv_no" value = "" autocomplete = "off"  style = "font-family: Segoe uI; text-align: center;height: 40px "  >
													</td>
													<td  style = " font-size: 20px; height: 40px;"  >
														<input list = "suppliers"  name="supplier" id = "supplier" type = "text"  for = "particulardata" autocomplete = "off" style = "text-align: center; font-family: Segoe UI; box-sizing: border-box; height: 40px" >

														<datalist id="suppliers">
															
														</datalist>
													</td>
													<td  style = " font-size: 20px; "  >
													<input list = "particulars" type="text"  id = "particular" name = "particular"   autocomplete = "off" style = "font-family: Segoe uI; text-align: center; box-sizing: border-box; height: 40px">

														<datalist id="particulars">
															
														</datalist>
													</td>
													<!-- <td  style = "font-size: 20px; height: 40px;"  >
														<input type="number"  name = "debit"  onkeyup = "checkDebit()" autocomplete = "off" style = "font-family: Segoe uI; text-align: right; height: 40px"  id = "debit" step = "0.01">
													</td>
													<td  style = " font-size: 20px; height: 40px;"  >
														<input type="number" onkeyup = "checkCredit()" name = "credit"  id = "credit" style = "font-family: Segoe uI; text-align: right; height: 40px"  step = "0.01">
													</td> -->
													<td  style = "font-size: 20px; height: 40px;"  >
														<input type="number"  id = "amount"  name = "amount" value = "" autocomplete = "off" style = "font-family: Segoe uI; text-align: center;height: 40px "  readonly>
													</td>
												</tr>
										
												</form>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>	
						
						<div class="widget-box">
							<div class="widget-title" style = "background-color: #d26334; color: black">
								<span class="icon" style = "color: white">
									<!-- <i class="icon-info-sign"></i>									 -->
									<p id = "bankrecon_info" style = "color: black; font-weight: bold">ACCOUNTING ENTRIES</p>
								</span>
								
							</div>
							<div class = "span10" align = "right">
								<button class = "btn btn-primary " style = "font-family: Segoe UI" id = "btn_addrow"><i class = "icon icon-plus"></i> Add Row</button>
							</div>
							
							<div class="widget-content nopadding">
								<div class="">
									<div class="">
										<table class = "table table-bordered " id = "entries_id" style= "width: 100%; border-top: 2px solid #ccc;  ">
											<thead>
												<tr>
													<th>Responsibility Center</th>
													<th>Accounts and Explanation</th>
													<th>Account code</th>
													<th>Debit</th>
													<th>Credit</th>
													<th></th>
												</tr>
											</thead>
									
												<tbody>

												</tbody>
										
										</table>
										<table>
											<tbody>
												<tr>
													<button class = "btn btn-block btn-primary" id = "btn_submit"><i class = "icon icon-plus"></i> Submit</button>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>	

						<div class="widget-box">
							<div class="widget-title" style = "background-color: #d6d6d6;">
								<span class="icon">
									<i class="icon-tag"></i>									
								</span>
								<h5 >Cashbook Records</h5>
							</div>
							<div class="widget-content nopadding">
								<table id = "cashbooks" style = "font-family: Arial Narrow;" class = "table table-stripped table-bordered">
									<thead>
										<tr>
											<th>Date</th>
											<th>Check No.</th>
											<th>Particulars</th>
											<th>DEBIT</th>
											<th>CREDIT</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div> <div class="row-fluid">
		@include('scripts/footerinfo')
    </div>

@include('scripts/footer')

<script>

	show_allYears();
	show_Funds();
	show_allParticulars();
	show_allSuppliers();
	show_datetoday();
	get_allResponsibiltyCenters();

	$("#search_item").on('keyup', function(){
      var value = $(this).val().toLowerCase();
      $("#cashbooks tbody tr").filter(function(){
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
	//add row
	let lineNo = 1;
	$("#btn_addrow").on('click', function(){		
		var markup = '<tr  id = "row'+lineNo+'" style = "height: 40px" >'+
						'<td  style = "font-size: 20px; height: 40px; width: 100px"  >'+
							'<input type="text"  id = "resp_center" list= "resp_centers" name = "resp_center[]"  autocomplete = "off" style = "width: 100%; font-family: Segoe uI; text-align: center;height: 40px; "  >'+
							'<datalist id = "resp_centers"></datalist>'+

						'</td>'+
						'<td  style = "font-size: 20px; height: 40px ; width: 450px;"  >'+
							'<input type="text"  id = "accountsandexplanation[]"  name = "accountsandexplanation[]"  autocomplete = "off" style = "width: 100%; font-family: Segoe uI; text-align: center;height: 40px "  >'+
						'</td>'+
						'<td  style = "font-size: 20px; height: 40px; width: 250px"  >'+
							'<input type="text"  id = "account_code[]"  name = "account_code[]"  autocomplete = "off" style = "width: 100%; font-family: Segoe uI; text-align: center;height: 40px "  >'+
						'</td>'+
						'<td  style = "font-size: 20px; height: 40px; width: 150px"  >'+
							'<input type="number" step = "0.01" id = "debit[]"  name = "debit[]"  autocomplete = "off" style = "width: 100%; font-family: Segoe uI; text-align: center;height: 40px "  >'+
						'</td>'+
						'<td  style = "font-size: 20px; height: 40px; width: 150px"  >'+
							'<input type="number" step = "0.01"  id = "credit[]"  name = "credit[]" autocomplete = "off" style = "width: 100%; font-family: Segoe uI; text-align: center;height: 40px "  >'+
						'</td>'+
						'<td  style = "font-size: 20px; height: 40px; width: 50px" align = "center" >'+
							'<button  data-id = "'+lineNo+'" class = "btn btn-danger x"> X </button>'+
						'</td>'+
					'</tr>'; 
					lineNo++;
		
		$("#entries_id tr:last").after(markup);
	})
	
	
	function get_allResponsibiltyCenters()
	{
		
		$.ajax({
			type: 'GET',
			url: '/get_allResponsibilityCenters',
			dataType: 'json',
			success: 	function(data)
			{
				var option = "";
				for(var i = 0; i<data.length; i++)
				{
					option += "<option>"+data[i].resp_center+"</option>";
				}
				$("#resp_centers").html(option);
			}
		});
	}
	// $("#btn_submit").on('click', function(){
		
	// })
	$("body").on('click', '.x', function(){
		var row_id = $(this).data('id');
		$("#row"+row_id).remove();
	})
	var month = $("#month").val();
	$("[name='month']").val(month);

	$("body").on('click', '.edit', function(){
		var id = $(this).data('id');
		$.ajax({
			type: 'GET',
			url: '/get_cashbookdata/'+id,
			dataType:'json',
			success:	function(response)
			{
				var supplier = "";
				if(response[0].supplier != "") supplier = response[0].supplier;
				$("#cashbook_id").val(response[0].cashbook_id);
				$("#reference_no").val(response[0].referenceno);
				$("#supplier").val(supplier);
				$("#particular").val(response[0].particular);
				$("#credit").val(response[0].credit);
				$("#debit").val(response[0].debit);
			},
			error: function(response){console.log("Server Error.")}
		})
		var date = $(this).data('date');

		var year_text = $("#year option:selected").text();
		var month = $("#month").val();
		var date = new Date(date);
		
		if(month < 10) month = "0"+month;
		var today = year_text+"-"+(month)+"-"+date.getDate();
		$("#date").val(today);
	})
	function show_datetoday()
	{
		var date = new Date();
		var month = $("#month").val();
		if(month < 10) month = "0"+month;
		var today = date.getFullYear()+"-"+(month)+"-"+date.getDate();
		$("#date").val(today);
	}
	function show_allSuppliers()
	{
		$.ajax({
			type: 'GET',
			url: '/get_allSuppliers',
			dataType: 'json',
			success: function(data)
			{
				option = "";
				for(var i = 0; i<data.length; i++){
					option += "<option >"+data[i].supplier+"</option>";
				}
				$("#suppliers").html(option);
				
			},
			error: function(data){
				alert('Something went wrong')
			}
		})
	}
	$("#fund").on('change', function(e){
		var fund = $("#fund").val();
		var month = $("#month").val();
		var year = $("#year").val();
		show_allCashbooks(fund, year, month);
	})
	$("#year").on('change', function(e){
		var year = $("#year").val();
		var month = $("#month").val();
		var fund = $("#fund").val();
		
		show_allCashbooks(fund, year, month);
	})
	$("#month").on('change', function(e){
		var year = $("#year").val();
		var month = $("#month").val();
		var fund = $("#fund").val();

		show_allCashbooks(fund, year, month);
	})
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
	function checkDebit(){
		var val = $("#debit").val();
		if(val != "") {$("#credit").prop( "disabled", true ); $("#reference_no").val(""); $("#credit").val("");};
		if(val == "") {$("#credit").prop( "disabled", false ); $("#reference_no").val($("#checkno_2").val())}
		return;
	}
	function checkCredit(){
		var val = $("#credit").val();
		if(val != "") { $("#debit").prop( "disabled", true ); $("#reference_no").prop("disabled", true);  $("#reference_no").val($("#checkno_2").val()); $("#debit").val("")}
		if(val == "") { $("#debit").prop( "disabled", false ); $("#reference_no").prop("disabled", false); $("#reference_no").val($("#checkno_2").val())}
		return;
	}
	$("body").on('click', '.remove', function(e){
		var id = $(this).data('id');
		var fund = $("#fund").val();
		var year = $("#year").val();
		var month = $("#month").val();
		if(confirm("Are you sure you want to delete this particular?"))
		{
			$.ajax({
				headers: {
					'X-CSRF-TOKEN': "{{csrf_token()}}",
				},
				type: 'POST',
				url: '/bankrecon_action',
				data: {
					remove_id: id,
				},
				dataType: 'json',
				success:	function(response)
				{
					if(response.deleteMessage != "")
					{
						alert(response.deleteMessage);
					}
					show_allCashbooks(fund, year, month);
				},
				error:	function(response) {console.log("Server Error")}
			})
		}
	})
	$("#btn_submit").on('click', function(e){
		e.preventDefault();

		var total_credit = 0;
		var total_debit = 0;
		var no_of_rows = 0;
		const formatToCurrency = amount => {
			return  amount.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, "$&,");
		};
		var resp_center = $("input[name='resp_center[]']").map(function(){
			return $(this).val();
		}).get();
		var accountsandexplanation = $("input[name='accountsandexplanation[]']").map(function(){
			no_of_rows += 1;
			return $(this).val();
		}).get();
		var account_code = $("input[name='account_code[]']").map(function(){
			return $(this).val();
		}).get();
		var debit = $("input[name='debit[]']").map(function(){
			var val = $(this).val();
			total_debit += val*1;
			return val;
		}).get();
		var credit = $("input[name='credit[]']").map(function(){
			var val = $(this).val();
			total_credit += val*1;
			return val;
		}).get();
		console.log(credit);
		var total_amount = total_debit + total_credit;
		$("#amount").val(formatToCurrency(total_amount*1));

		var fund = $("#fund").val();
		var year = $("#year").val();
		var month = $("#month").val();
		var particular = $("#particular").val();
		var date = $("#date").val();
		var reference_no = $("#reference_no").val();
		var supplier = $("#supplier").val();
		var dv_no = $("#dv_no").val();
		if(fund == ""){
			alert('Please Select Fund');
		}
		else if(year == "") alert('Please Select Year')
		else if(month == "") alert('Please Select Month')
		else if(date == "") alert('Please select date!');
		else if(particular == "") alert('Please select particular!');
		else{
			var cashbook_id = $("#cashbook_id").val();
			if(cashbook_id > 0 )
			{
				if(confirm('Are you sure you want to update the cashbook details?'))
				{
					$.ajax({
						headers: {
							'X-CSRF-TOKEN': "{{csrf_token()}}",
						},
						type: 'POST',
						url: '/bankrecon_action',
						data: {
							cashbook_id: cashbook_id,
							fund: fund,
							year: year,
							month: month,
							date: date,
							amount: total_amount,
							dv_no: dv_no,
							no_of_rows: no_of_rows,
							resp_centers: resp_center,
							accountsandexplanations: accountsandexplanation,
							accountcodes: account_code,
							particular: particular,
							reference_no: reference_no,
							debits: debit,
							credits: credit,
							supplier: supplier,
						},
						dataType: 'json',
						success: function(response){
							if(response.status == 200){
								alert(response.success)
								$("#cb_form").trigger('reset');
								$("#entries_form").trigger('reset');
								$("#reference_no").val($("#checkno_2").val());
							}
							if(response.status == 400){
								alert(response.error);
							}
							show_allCashbooks(fund, year, month);
						},
						error:	function(response){
							alert('Something went wrong! Reload your page!')
						}
					})
				}
			}
			else{
				$.ajax({
					headers: {
						'X-CSRF-TOKEN': "{{csrf_token()}}",
					},
					type: 'POST',
					url: '/bankrecon_action',
					data: {
						fund: fund,
						year: year,
						month: month,
						date: date,
						dv_no: dv_no,
						no_of_rows: no_of_rows,
						amount: total_amount,
						resp_center: resp_center,
						accountsandexplanations: accountsandexplanation,
						accountcodes: account_code,
						particular: particular,
						reference_no: reference_no,
						debits: debit,
						credits: credit,
						supplier: supplier,
					},
					dataType: 'json',
					success: function(response){
						if(response.status == 200){
							alert(response.success)
							$("#cb_form").trigger('reset');
							$("#entries_id tbody").empty();
							$("#reference_no").val($("#checkno_2").val());
						}
						if(response.status == 400){
							alert(response.error);
						}
						show_allCashbooks(fund, year, month);
					},
					error:	function(response){
						alert('Something went wrong! Reload your page!')
					}
				})
			}
		}
	});
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
	
	function show_allCashbooks(fund, year, month)
	{
		$.ajax({
			headers: {
					'X-CSRF-TOKEN': "{{csrf_token()}}",
				},
			type: 'POST',
			url: '/get_allCashbooks',
			data: {
				fund: fund,
				year: year,
				month: month
			},
			dataType: 'json',
			success: function (data)
			{
				const formatToCurrency = amount => {
						return "P " + amount.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, "$&,");
					};
				var row = "";
				if(data.referenceno.referenceno > 0){
					
					$("#reference_no").val(data.referenceno.referenceno+1);
					$("#checkno_2").val(data.referenceno.referenceno+1);
				}
				else{
					$("#reference_no").val("");
				}
				var year_text = $("#year option:selected").text();
				var month = $("#month").val();
				var date = new Date(data.referenceno.date);
				
				if(month < 10) month = "0"+month;
				var today = year_text+"-"+(month)+"-"+date.getDate();
				$("#date").val(today);
				var debitsum = 0;
				var creditsum = 0;
				for(var i = 0; i<data.data.length; i++)
				{
					row += "<tr >";
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
					var dateformat = month + " "+date.getDate() + ", "+date.getFullYear();
					row += "<td  style = 'text-align: center'>"+dateformat+"</td>";
					var referenceno = data.data[i].referenceno;
					if(referenceno == null) referenceno = "";
					row += "<td  style = 'text-align: center'>"+referenceno+"</td>";
					row += "<td  style = 'text-align: center'>"+data.data[i].particular.toUpperCase()+"</td>";
					var debit = data.data[i].debit;
					if(debit == null) debit = "-";
					else {debit = formatToCurrency(debit); debitsum += data.data[i].debit; };
					row += "<td style = 'text-align: right'>"+debit+"</td>";
					var credit = data.data[i].credit;
					if(credit == null) credit = "-";
					else { credit = formatToCurrency(credit); creditsum += data.data[i].credit;};
					row += "<td style = 'text-align: right'>"+credit+"</td>";
					row += "<td style = 'text-align: center'>"+
								"<button class = 'btn btn-primary edit' data-id = "+data.data[i].cashbook_id+" data-date = "+data.data[i].date+" data-particular = "+data.data[i].particular+"  data-credit = "+data.data[i].credit+" data-debit = "+data.data[i].debit+" data-referenceno = "+data.data[i].referenceno+"><i class = 'icon-edit'></i></button> "+
								"<button class = 'btn btn-danger remove' data-id = "+data.data[i].cashbook_id+"><i class = 'icon-trash'></i></button> "+
							"</td>";
					row += "</tr>";
				}
				row += "<tr>";
                row +="<td style = 'text-align: right; font-weight: bold'>Total</td>";
                row +="<td></td>";
                row +="<td></td>";
                row +="<td style = 'text-align:right; font-weight: bold'>"+formatToCurrency(debitsum)+"</td>";
                row +="<td style = 'text-align:right; font-weight: bold'>"+formatToCurrency(creditsum)+"</td>";
				row +="<td style = 'text-align:center; font-weight: bold;  color: red'> <u style = 'border-bottom: 1px double;'>"+formatToCurrency(creditsum-debitsum)+"<u/></td>";
                row +="</tr>";

				$("#cashbooks tbody").html(row);
			},
			error:	function(error){
				alert("Something went wrong! Reload the page.")
			}
		})
	}
	function show_allYears()
	{
		$.ajax({
			type: 'GET',
			url: '/get_allYears',
			dataType: 'json',
			success:	function(data){
				var option = "";
				if(data.length < 0) return;
				else
				{
					if(data.length > 0){
						for(var i = 0; i<data.length; i++)
						{
							option += '<option value = '+data[i].id+'>'+data[i].year+'</option>';
						}
					}
					else
					{
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


</script>
</body>
</html>
