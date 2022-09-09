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
				<a href="#"><strong> Funds</strong></a>
				</div>
                <!-- <h1>Bank Reconciliation as of July 2022</h1> -->
			</div>
			
			<div class="container-fluid" style = "font-family: Segoe UI">
				<div class="row-fluid">
					<div class="span12">
                        <div class="span2">
                            <div class="control-group">
								<div class="controls">
									 <button class = "btn btn-primary" id = "btn_openModal"><i class = "icon icon-plus"></i> Add Fund</button>
								</div>
							</div>
                        </div>
						<div class="widget-box" style = " ">
							<div class="" >
								<h5 > Type and Lists of Funds</h5>
							</div>
                            
							<div class="widget-content nopadding">
								<table id = "funds" style = "font-family: Arial Narrow; text-align: center;  color: black; border: 1px solid black"  class = "table table-stripped table-bordered">
									<thead>
										<tr >
											<th >Fund</th>
                                            <th >Code</th>
                                            <th >Bank Account No.</th>
											<th >Authorized Depository</th>
                                            <th >Address of Depository</th>
											<th >Date Created</th>
											<th >Date Updated</th>
                                            <th >Action</th>
										</tr>
									</thead>
									<tbody style = "text-align: center">
										
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

    <!-- <div id="funds_modal" class="modal hide animated fadeIn">
        <div class="modal-header">
            <button data-dismiss="modal" class="close" type="button">×</button>
            <h3 id = "modal-title"></h3>
        </div>
        <ul id = "ajaxresponse"></ul>
        <form id = "fund_form">
            <input type="hidden" id = "fund_id" name = "fund_id" >
            <div class="modal-body" style = "position: relative" align = "center">
                <div class="control-group">
                    <label class="control-label">Name of Fund</label>
                    <div class="controls">
                        <input type="text" name = "fund" id = "fund" width = "100%" required>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Bank Account No.</label>
                    <div class="controls">
                        <input type="text"   data-inputmask="'mask': '9999 9999 9999 9999'"list = "bankaccount_numbers" name = "bankaccount_no" id = "bankaccount_no" style = "text-align: right" autocomplete = "off" required>
                        <datalist id = "bankaccount_numbers">

                        </datalist>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Bank Account Name</label>
                    <div class="controls">
                        <textarea  name = "bankaccount_name" id = "bankaccount_name" cols="30" rows="4" required></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" type = "submit">Save</button>
                <a data-dismiss="modal" class="btn btn-inverse" href="#">Cancel</a>
             </div>
        </form>
    </div> -->

    <div id="fund_modal" class="modal hide animated fadeIn" >
        <div class="modal-header">
            <button data-dismiss="modal" class="close" type="button">×</button>
            <h3 id = "modal-title"></h3>
        </div>
        <ul id = "ajaxresponse"></ul>
        	<form id = "fund_form">
            @csrf
            	<input type="text" value = "" id = "fund_id" name = "fund_id" style = "display: none">
            	<div class="modal-body" style = "position: relative" align = "center">
					<table class = "table table-bordered " id = "tbl_designationOfficers" style= " border-top: 2px solid #ccc;  ">
						<tbody>
							<tr>
								<td><strong>Fund</strong></td>
								<td  style = " font-size: 20px; height: 40px;"  >
									<input  name="fund" id = "fund" type = "text"   autocomplete = "off" style = "text-align: center; font-family: Segoe UI; box-sizing: border-box; height: 40px; width: 100%" required>
								</td>
							</tr>
							<tr>
								<td><STRONG>Code</STRONG></td>
								<td  style = " font-size: 20px; height: 40px;"  >
									<input  name="code" id = "code" type = "text"   autocomplete = "off" style = "text-align: center; font-family: Segoe UI; box-sizing: border-box; height: 40px; width: 100%">
								</td>
							</tr>
							<tr>
								<td><STRONG>Bank Account No.</STRONG></td>
								<td  style = " font-size: 20px; height: 40px;"  >
									<input  name="account_no" id = "account_no" type = "text"   autocomplete = "off" style = "text-align: center; font-family: Segoe UI; box-sizing: border-box; height: 40px; width: 100%" required>
								</td>
							</tr>
							<tr>
								<td><STRONG>Authorized Depository</STRONG></td>
								<td  style = " font-size: 20px; height: 40px;"  >
									<input  name="bankaccount_name" id = "bankaccount_name" list = "bankaccount_names" type = "text"   autocomplete = "off" style = "text-align: center; font-family: Segoe UI; box-sizing: border-box; height: 40px; width: 100%" required>
                                    <datalist id = "bankaccount_names">

                                    </datalist>
                                </td>
							</tr>
                            <tr>
								<td><STRONG>Address Depository</STRONG></td>
								<td  style = " font-size: 20px; height: 40px;"  >
									<input  name="address" id = "address" type = "text"   list = "addresses" autocomplete = "off" style = "text-align: center; font-family: Segoe UI; box-sizing: border-box; height: 40px; width: 100%" required>
                                    <datalist id = "addresses">

                                    </datalist>
                                </td>
							</tr>
							<tr>
						</tbody>
					</table>
            	</div>
            <div class="modal-footer">
				<button type="submit" class = "btn btn-flat btn-primary"><i class = "icon icon-save"></i> Save</button>
                <a data-dismiss="modal" class="btn btn-inverse" href="#">Cancel</a>
             </div>
        </form>
    </div>
@include('scripts/footer')

<script>
    show_allData();
    show_allBankAccountNames();
    show_allBankAccountAddress();
   
	$("#btn_openModal").on('click', function(){
        $("#fund_form").trigger('reset');
        $("#modal-title").text('Add Fund');
        $("#fund_modal").modal('show');
    })
    $("#account_no").on('input', function () {
        var val = this.value;
        if($('#bankaccount_numbers option').filter(function(){
            return this.value.toUpperCase() === val.toUpperCase();        
        }).length) { 
            //send ajax request
            $.ajax({
                type: 'GET',
                url: '/get_bankaccount_info/'+val,
                dataType: 'json',
                success:    function(data)
                {
                    $("#bankaccount_name").html(data[0].bankaccount_name);
                    $('#bankaccount_name').attr('readonly', true);
                }
            })
        }
    });
    function show_allBankAccountNames()
    {
        $.ajax({
            type: 'GET',
            url: '/get_allbankaccount',
            dataType: 'json',
            success:    function(data)
            {
                var option = "";
                for(var i = 0; i<data.length; i++)
                {
                    option += "<option>"+data[i].bankaccount_name+"</option>";
                }
                $("#bankaccount_names").html(option);
            }
        })
    }
    function show_allBankAccountAddress()
    {
        $.ajax({
            type: 'GET',
            url: '/get_allbankaccount',
            dataType: 'json',
            success:    function(data)
            {
                var option = "";
                for(var i = 0; i<data.length; i++)
                {
                    option += "<option>"+data[i].address+"</option>";
                }
                $("#addresses").html(option);
            }
        })
    }
    $("#fund_form").on('submit', function(e){
        e.preventDefault();
        var form_data = $(this).serialize();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': "{{csrf_token()}}",
            },
            type: 'POST',
            url: '/funds_action',
            data: form_data,
            dataType: 'json',
            success: function(response){
                if(response.status == 200)
                {
                    $("#fund_form").trigger('reset');
                    $("#fund_modal").modal('hide');
                    alert(response.fundadded_msg);
                }
                else if(response.status == 106)
                {
                    alert(response.fundexist_msg);
                }
                else if(response.status == 105)
                {
                    $("#ajaxresponse").html("");
                    $("#ajaxresponse").removeClass('alert alert-danger');
                    $("#ajaxresponse").addClass('alert alert-danger');
                    $.each(response.errors, function (key, err_values){
                        $("#ajaxresponse").append('<li>'+err_values+'</li>');
                    });
                }
                else{}    
                show_allData();
            }
        })
    })
    $("body").on('click', '.edit', function(e){
        var id = $(this).data('id');
        $.ajax({
            type: 'GET',
            url: '/get_fundinfo/'+id,
            dataType: 'json',
            success:function(response)
            {
                $("#fund_id").val(response[0].fund_id);
                $("#fund").val(response[0].fund);
                $("#account_no").val(response[0].account_no);
                $("#address").val(response[0].address);
                $("#code").val(response[0].code);
                $("#bankaccount_name").val(response[0].bankaccount_name);
            }
        })
        $("#fund_modal").modal({
            backdrop: 'static',
            keyboard: false,
        }, 'show');
        $("#modal-title").text('Edit Fund Details');
    })
    $("body").on('click', '.remove', function(e){
        var id = $(this).data('id');
        if(confirm("Are you sure you want to delete this fund?"))
        {
            $.ajax({
                type: 'GET',
                url: '/delete_fund/'+id,
                dataType: 'json',
                success:function(response)
                {
                    if(response.status == 200) alert(response.message);
                    else if(response.status == 400) alert(response.error_msg);
                    else{}
                    show_allData();
                }
            })
        }
    })
    function show_allData()
    {
        $.ajax({
            type: 'GET',
            url: '/get_allFunds',
            dataType: 'json',
            success:    function(data)
            {
                var row = "";
                for(var i = 0; i<data.length; i++)
                {
                    var code = " - ";
                    if(data[i].code != null) code = data[i].code;
                    row += "<tr >";
                    row += "<td>"+data[i].fund+"</td>";
                    row += "<td>"+code+"</td>";
                    row += "<td>"+data[i].account_no+"</td>";
                    row += "<td>"+data[i].bankaccount_name+"</td>";
                    row += "<td>"+data[i].address+"</td>";
                    row += "<td>"+data[i].created_at+"</td>";
                    row += "<td>"+data[i].updated_at+"</td>";
                    row += "<td align = 'center'>"+
                                "<button class = 'btn btn-primary edit' data-id = "+data[i].fund_id+"><i class = 'icon icon-edit'></i></button>"+
                                "<button class = 'btn btn-danger remove' data-id = "+data[i].fund_id+"><i class = 'icon icon-trash'></i></button>"+
                            "</td>";
                    row += "</tr>";
                }
                $("#funds tbody").html(row);
            },
            error:  function(response) {
                console.log("Server error.") ;    
            }
        })
    }
</script>
</body>
</html>
