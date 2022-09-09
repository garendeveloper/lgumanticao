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
    padding: 3px 9px;
    margin-bottom: 10px;
    font-size: 14px;
    line-height: 20px;
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
				<a href="#">Outstanding Checks</a>
				</div>
                <!-- <h1>Bank Reconciliation as of July 2022</h1> -->
			</div>
			
			<div class="container-fluid">
				<div class="row-fluid">
					<div class="span12">
						<div class="span2">
							<div class="control-group" >
								<label class="control-label">Type of Funds</label>
								<div class="controls">
									<select  id="fund" name = "fund" style = "font-family: Segoe UI;   border: 1px solid black">
									<option value = "">-- Please Select Fund -- </option>
									</select>
								</div>
							</div>
						</div>
						<div class="span2">
							<div class="control-group">
								<label class="control-label">Year</label>
								<div class="controls">
									<select name = "year" id="year" style = "font-family: Segoe UI;  border: 1px solid black">
									</select>
								</div>
							</div>
						</div>
						<div class="span2">
							<div class="control-group">
								<label class="control-label">Month</label>
								<div class="controls">
									<select   id="month" style = "font-family: Segoe UI;  border: 1px solid black">
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
							<label for="" class = "control-label">Search Outstanding Check</label>
							<div class="control-group">
								<div class="controls">
									<input type="text" name= "search_item" id= "search_item" style  = "font-family: Segoe UI; " placeholder = "Search here" >
								</div>
							</div>
                        </div>
							
						<div class="widget-box">
							<div class="widget-title" style = "background-color: white; height: 160px; color: black">
                           
                                <div class = "span12">
                                    <div class="span3" style = "text-align: center">
                                        <img src="admintemplate/img/lgulogo.png" alt="">
                                    </div>
                                    <div class="span6" style = "font-family: Calibri; font-size: 15px; text-align: center">
                                    <B style ="">Republic of the Philippines</B> </BR>
									<B style ="">Province of Misamis Oriental</B> </BR>
                                    <B style = "">Municipality of Manticao</B> </BR>
                                    <B style ="">-ooOoo-</B> </BR>
									<B style ="font-size: 18px">OFFICE OF THE ACCOUNTANT</B> </BR>
                                    <B style = "font-size: 25px; font-family: Algerian">OUTSTANDING CHECKS</B>
                                    </div>
                                </div>
								
							</div>
							<div class="widget-content nopadding">
								<table id = "cashbooks" style = "font-family: Arial Narrow;" class = "table table-stripped table-bordered">
									<thead>
										<tr >
											<th>Date</th>
											<th >Check No.</th>
											<th >Particulars</th>
											<th >Amount</th>
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

	<div id="print_modal" class="modal hide animated fadeIn" >
        <div class="modal-header">
            <button data-dismiss="modal" class="close" type="button">×</button>
            <h3 id = "modal-title"></h3>
        </div>
        <ul id = "ajaxresponse"></ul>
        	<form id = "print_form">
            	<input type="hidden" id = "fund_id" name = "fund_id" >
            	<div class="modal-body" style = "position: relative" align = "center">
					<table class = "table table-bordered " id = "tbl_designationOfficers" style= " border-top: 2px solid #ccc;  ">
						<tbody>
							<form id ="cb_form" action="" method = "post">
								@csrf
								<input type="hidden" name = "">
								<input type="hidden" id = "checkno_2">
								<input type="hidden" id = "supplier_id">
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
							</form>
						</tbody>
					</table>
            	</div>
            <div class="modal-footer">
				<button type="submit" class = "btn btn-flat btn-primary"><i class = "icon icon-print"></i> Procced To Printing</button>
                <a data-dismiss="modal" class="btn btn-inverse" href="#">Cancel</a>
             </div>
        </form>
    </div>
@include('scripts/footer')

<script>
		show_allYears();
		show_Funds();
		show_allParticulars();
		
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
		$("form").trigger('reset');
		show_allCashbooks(fund, year, month);
	})
	$("#year").on('change', function(e){
		var year = $("#year").val();
		var month = $("#month").val();
		var fund = $("#fund").val();
		
		$("form").trigger('reset');
		show_allCashbooks(fund, year, month);
	})
	$("#month").on('change', function(e){
		var year = $("#year").val();
		var month = $("#month").val();
		var fund = $("#fund").val();

		$("form").trigger('reset');
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
							option += '<option value = '+data[i].fund_id+'>'+data[i].fund+' ('+data[i].code+')</option>';
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
				const formatToCurrency = amount => {
						return "P " + amount.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, "$&,");
					};
				var year_text = $("#year option:selected").text();
				var month = $("#month").val();
				var date = new Date(data.referenceno.date);
				var debitsum = 0;
				var creditsum = 0;
                var amount = "";
				for(var i = 0; i<data.data.length; i++)
				{
					row += "<tr>";
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
                    var credit = data.data[i].credit;

					if(debit != null && credit == null ) amount = debit;
                    else if(debit == null && credit != null ) amount = credit;
                    else{}
                    total_amount += amount;
					row += "<td style = 'text-align: right'>"+formatToCurrency(amount)+"</td>";
				}
                row += "<tr>";
               
                row +="<td style = 'text-align: right; font-weight: bold'>Total</td>";
                row +="<td></td>";
                row +="<td></td>";
                row +="<td style = 'text-align:right; font-weight: bold'><u style = 'border-bottom: 1px double;'>"+formatToCurrency(total_amount)+"<u/></td>";
              
                row +="</tr>";

                row += "<tr>";
               
               row +="<td style = 'text-align: right; font-weight: bold'></td>";
               row +="<td></td>";
               row +="<td></td>";
            //    row +="<td style = 'text-align:right; font-weight: bold'><a  class ='btn btn-primary btn-block print'><i class = 'icon icon-print'></i> Print</a></td>";
			row +="<td style = 'text-align:right; font-weight: bold'><a href = 'invoice' class ='btn btn-primary btn-block '><i class = 'icon icon-print'></i> Print</a></td>";
             
               // row +="<td><button class ='btn btn-primary btn-block btn_encash'><i cla></i>Encash</button></td>";
               row +="</tr>";
          
				$("#cashbooks tbody").html(row);
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
	
	// setInterval(function(){
	// 	show_allParticulars();
	// 	show_allCashbooks();
	// },2000);

</script>
</body>
</html>
