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
				<a href="#"><strong> Manage Users and Designation</strong></a>
				</div>
                <!-- <h1>Bank Reconciliation as of July 2022</h1> -->
			</div>
			
			<div class="container-fluid" style = "font-family: Segoe UI">
				<div class="row-fluid">
					<div class="span12">
                        <div class="span2">
                            <div class="control-group">
								<div class="controls">
									 <button class = "btn btn-primary" id = "btn_openModal"><i class = "icon icon-user"></i> Add User</button>
								</div>
							</div>
                        </div>
						<div class="widget-box" >
							<div class="">
								<h5 > Type and List of Users</h5>
							</div>
                            
							<div class="widget-content nopadding" >
								<table id = "Users" style = "font-family: Arial Narrow; text-align: center;  color: black; border: 1px solid black"  class = "table table-stripped table-bordered">
									<thead>
										<tr >
											<th >Name</th>
                                            <th >Email</th>
                                            <th >Username</th>
											<th >Designated Work</th>
                                            <th>Office</th>
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

    <div id="User_modal" class="modal hide animated fadeIn" >
        <div class="modal-header" style = "height: 50px; ">
            <button data-dismiss="modal" class="close" type="button">×</button>
            <h3 id = "modal-title" style = "font-size: 20px"></h3>
        </div>
        <ul id = "ajaxresponse"></ul>
        	<form id = "User_form">
            	<input type="hidden" id = "user_id" name = "user_id" >
            	<div class="modal-body" style = "position: relative" align = "center">
					<table class = "table table-bordered " id = "tbl_designationOfficers" style= " border-top: 2px solid #ccc;  ">
						<tbody>
								@csrf
								<input type="hidden" name = "">
							<tr>
								<td><strong>Full name</strong></td>
								<td  style = " font-size: 20px; height: 40px;"  >
									<input  name="name" id = "name" type = "text"   autocomplete = "off" style = "text-align: center; font-family: Segoe UI; box-sizing: border-box; height: 40px; width: 100%" required>
								</td>
							</tr>
                            <tr>
								<td><STRONG>Email</STRONG></td>
								<td  style = " font-size: 20px; height: 40px;"  >
									<input  name="email" id = "email" type = "email"   autocomplete = "off" style = "text-align: center; font-family: Segoe UI; box-sizing: border-box; height: 40px; width: 100%">
								</td>
							</tr>
                            <tr>
								<td><STRONG>Office Assignment</STRONG></td>
								<td  style = " font-size: 20px; height: 40px;"  >
									<input  name="office" id = "office"  type = "text"  list = "offices" autocomplete = "off" style = "text-align: center; font-family: Segoe UI; box-sizing: border-box; height: 40px; width: 100%" required>
                                    <datalist id = "offices">

                                    </datalist>
                                </td>
							</tr>

                            <tr>
								<td><STRONG>Designated Work / Designation</STRONG></td>
								<td  style = " font-size: 20px; height: 40px;"  >
									<input  name="designation" id = "designation"  list = "designations" type = "text"   autocomplete = "off" style = "text-align: center; font-family: Segoe UI; box-sizing: border-box; height: 40px; width: 100%" required>
                                    <datalist id = "designations">

                                    </datalist>
                                </td>
							</tr>
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
    show_allDesignations();
    show_allOffices();
    // show_allBankAccountAddress();
   
	$("#btn_openModal").on('click', function(){
        $("#User_form").trigger('reset');
        $("#modal-title").text('Add User With His Designated Work');
        $("#User_modal").modal('show');
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
    function show_allDesignations()
    {
        $.ajax({
            type: 'GET',
            url: '/get_allDesignations',
            dataType: 'json',
            success:    function(data)
            {
                var option = "";
                for(var i = 0; i<data.length; i++)
                {
                    option += "<option>"+data[i].designation+"</option>";
                }
                $("#designations").html(option);
            }
        })
    }

    function show_allOffices()
    {
        $.ajax({
            type: 'GET',
            url: '/get_allOffices',
            dataType: 'json',
            success:    function(data)
            {
                var option = "";
                for(var i = 0; i<data.length; i++)
                {
                    option += "<option>"+data[i].office+"</option>";
                }
                $("#offices").html(option);
            }
        })
    }
   
    $("#User_form").on('submit', function(e){
        e.preventDefault();
        var form_data = $(this).serialize();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': "{{csrf_token()}}",
            },
            type: 'POST',
            url: '/add_user',
            data: form_data,
            dataType: 'json',
            success: function(response){
                if(response.status == 200)
                {
                    alert(response.success);
                    $("#User_form").trigger('reset');
                    $("#User_modal").modal('hide');
                }
                else if(response.status == 201)
                {
                    alert(response.success);
                    $("#User_form").trigger('reset');
                    $("#User_modal").modal('hide');
                }
                else if(response.status == 101)
                {
                    alert(response.fails);
                }
                else if(response.status == 400)
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
            url: '/get_userinfo/'+id,
            dataType: 'json',
            success:function(response)
            {
                $("#user_id").val(response[0].user_id);
                $("#name").val(response[0].name);
                $("#email").val(response[0].email);
                $("#designation").val(response[0].designation);
                $("#office").val(response[0].office);
            }
        })
        $("#User_modal").modal({
            backdrop: 'static',
            keyboard: false,
        }, 'show');
        $("#modal-title").text('Edit User Details');
    })
    $("body").on('click', '.remove', function(e){
        var id = $(this).data('id');
        if(confirm("Are you sure you want to delete this User?"))
        {
            $.ajax({
                type: 'GET',
                url: '/delete_User/'+id,
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
            url: '/get_allusers',
            dataType: 'json',
            success:    function(data)
            {
                var row = "";
                for(var i = 0; i<data.length; i++)
                {
                    row += "<tr >";
                    row += "<td>"+data[i].name+"</td>";
                    row += "<td>"+data[i].email+"</td>";
                    row += "<td>"+data[i].username+"</td>";
                    row += "<td>"+data[i].designation+"</td>";
                    row += "<td style = 'background-color: pink'> "+data[i].office+"</td>";
                    row += "<td>"+data[i].user_created_at+"</td>";
                    row += "<td>"+data[i].user_updated_at+"</td>";
                    row += "<td align = 'center'>"+
                                "<button class = 'btn btn-primary edit' data-id = "+data[i].user_id+"><i class = 'icon icon-edit'></i></button>"+
                                // "<button class = 'btn btn-danger remove' data-id = "+data[i].user_id+"><i class = 'icon icon-trash'></i></button>"+
                            "</td>";
                    row += "</tr>";
                }
                $("#Users tbody").html(row);
            },
        })
    }
</script>
</body>
</html>
