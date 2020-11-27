  <!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<script src="bootstrap.min.js" type="text/javascript" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link https="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" rel="stylesheet">
    <link https="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js" rel="stylesheet">

<style>
body {
  background: #eeeded;
}

.card {
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  transition: all 0.2s ease-in-out;
  box-sizing: border-box;
  margin-top:10px;
  margin-bottom:10px;
  background-color:#FFF;
}

.card:hover {
  box-shadow: 0 5px 5px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
}
.card > .card-inner {
  padding:10px;
}
.card .header h2, h3 {
  margin-bottom: 0px;
  margin-top:0px;
}
.card .header {
  margin-bottom:5px;
  padding: 10%;

}
.card .header > #alter_button{
	position: relative;
	top: 10%;
	width: 100%;
}

</style>
</head>
<body>
<div class="container">
	<div class="row row-no-gutters bg-info">
		<div class="col-sm-3">
		  <div class="card">
			    <div class="card-inner">
			    	<table>
				      	<thead>
				      		<tr class="col-sm-12">
				      			<th class="col-sm-4">Item</th>
				      			<th class="col-sm-4">Qty</th>
				      			<th class="col-sm-4">Status</th>
				      		</tr>
				      	</thead>
				      	<tbody class=".table-hover">
				      		<tr class="col-sm-12">
				      			<td class="col-sm-4">Chicken</td>
				      			<td class="col-sm-4">1</td>
				      			<td class="col-sm-4">done</td>
				      		</tr>
				      	</tbody>
				    </table>
				    <!-- <div class="content">
				    </div> -->
				</div>
				<div class="header">
				    <button class="btn btn-primary" id="alter_button">
				    		<a href="#" style="text-decoration:none; color: white;text-align: center;">Prepared</a>
				    </button>
			    </div>
		  </div>
		</div>
		<div class="col-sm-3">
		  <div class="card">
			    <div class="card-inner">
			    	<table>
				      	<thead>
				      		<tr class="col-sm-12">
				      			<th class="col-sm-4">Item</th>
				      			<th class="col-sm-4">Qty</th>
				      			<th class="col-sm-4">Status</th>
				      		</tr>
				      	</thead>
				      	<tbody>
				      		<tr class="col-sm-12">
				      			<td class="col-sm-4">Chicken</td>
				      			<td class="col-sm-4">1</td>
				      			<td class="col-sm-4">done</td>
				      		</tr>
				      	</tbody>
				    </table>
				    <!-- <div class="content">
				    </div> -->
				</div>
				<div class="header">
				    <button class="btn btn-primary" id="alter_button">
				    		<a href="#" style="text-decoration:none; color: white;text-align: center;">Prepared</a>
				    </button>
			    </div>
		  </div>
		</div>
		<div class="col-sm-3">
		  <div class="card">
			    <div class="card-inner">
			    	<table>
				      	<thead>
				      		<tr class="col-sm-12">
				      			<th class="col-sm-4">Item</th>
				      			<th class="col-sm-4">Qty</th>
				      			<th class="col-sm-4">Status</th>
				      		</tr>
				      	</thead>
				      	<tbody>
				      		<tr class="col-sm-12">
				      			<td class="col-sm-4">Chicken</td>
				      			<td class="col-sm-4">1</td>
				      			<td class="col-sm-4">done</td>
				      		</tr>
				      	</tbody>
				    </table>
				    <!-- <div class="content">
				    </div> -->
				</div>
				<div class="header">
				    <button class="btn btn-primary" id="alter_button">
				    		<a href="#" style="text-decoration:none; color: white;text-align: center;">Prepared</a>
				    </button>
			    </div>
		  </div>
		</div>
		<div class="col-sm-3">
		  <div class="card">
			    <div class="card-inner">
			    	<table>
				      	<thead>
				      		<tr class="col-sm-12">
				      			<th class="col-sm-4">Item</th>
				      			<th class="col-sm-4">Qty</th>
				      			<th class="col-sm-4">Status</th>
				      		</tr>
				      	</thead>
				      	<tbody>
				      		<tr class="col-sm-12">
				      			<td class="col-sm-4">Chicken</td>
				      			<td class="col-sm-4">1</td>
				      			<td class="col-sm-4">done</td>
				      		</tr>
				      	</tbody>
				    </table>
				    <!-- <div class="content">
				    </div> -->
				</div>
				<div class="header">
				    <button class="btn btn-primary" id="alter_button">
				    		<a href="#" style="text-decoration:none; color: white;text-align: center;">Prepared</a>
				    </button>
			    </div>
		  </div>
		</div>
		<div class="col-sm-3">
		  <div class="card">
			    <div class="card-inner">
			    	<table>
				      	<thead>
				      		<tr class="col-sm-12">
				      			<th class="col-sm-4">Item</th>
				      			<th class="col-sm-4">Qty</th>
				      			<th class="col-sm-4">Status</th>
				      		</tr>
				      	</thead>
				      	<tbody class=".table-hover">
				      		<tr class="col-sm-12">
				      			<td class="col-sm-4">Chicken</td>
				      			<td class="col-sm-4">1</td>
				      			<td class="col-sm-4">done</td>
				      		</tr>
				      	</tbody>
				    </table>
				    <!-- <div class="content">
				    </div> -->
				</div>
				<div class="header">
				    <button class="btn btn-primary" id="alter_button">
				    		<a href="#" style="text-decoration:none; color: white;text-align: center;">Prepared</a>
				    </button>
			    </div>
		  </div>
		</div>
		<div class="col-sm-3">
		  <div class="card">
			    <div class="card-inner">
			    	<table>
				      	<thead>
				      		<tr class="col-sm-12">
				      			<th class="col-sm-4">Item</th>
				      			<th class="col-sm-4">Qty</th>
				      			<th class="col-sm-4">Status</th>
				      		</tr>
				      	</thead>
				      	<tbody>
				      		<tr class="col-sm-12">
				      			<td class="col-sm-4">Chicken</td>
				      			<td class="col-sm-4">1</td>
				      			<td class="col-sm-4">done</td>
				      		</tr>
				      	</tbody>
				    </table>
				    <!-- <div class="content">
				    </div> -->
				</div>
				<div class="header">
				    <button class="btn btn-primary" id="alter_button">
				    		<a href="#" style="text-decoration:none; color: white;text-align: center;">Prepared</a>
				    </button>
			    </div>
		  </div>
		</div>
		<div class="col-sm-3">
		  <div class="card">
			    <div class="card-inner">
			    	<table>
				      	<thead>
				      		<tr class="col-sm-12">
				      			<th class="col-sm-4">Item</th>
				      			<th class="col-sm-4">Qty</th>
				      			<th class="col-sm-4">Status</th>
				      		</tr>
				      	</thead>
				      	<tbody>
				      		<tr class="col-sm-12">
				      			<td class="col-sm-4">Chicken</td>
				      			<td class="col-sm-4">1</td>
				      			<td class="col-sm-4">done</td>
				      		</tr>
				      	</tbody>
				    </table>
				    <!-- <div class="content">
				    </div> -->
				</div>
				<div class="header">
				    <button class="btn btn-primary" id="alter_button">
				    		<a href="#" style="text-decoration:none; color: white;text-align: center;">Prepared</a>
				    </button>
			    </div>
		  </div>
		</div>
		<div class="col-sm-3">
		  <div class="card">
			    <div class="card-inner">
			    	<table>
				      	<thead>
				      		<tr class="col-sm-12">
				      			<th class="col-sm-4">Item</th>
				      			<th class="col-sm-4">Qty</th>
				      			<th class="col-sm-4">Status</th>
				      		</tr>
				      	</thead>
				      	<tbody>
				      		<tr class="col-sm-12">
				      			<td class="col-sm-4">Chicken</td>
				      			<td class="col-sm-4">1</td>
				      			<td class="col-sm-4">done</td>
				      		</tr>
				      	</tbody>
				    </table>
				    <!-- <div class="content">
				    </div> -->
				</div>
				<div class="header">
				    <button class="btn btn-primary" id="alter_button">
				    		<a href="#" style="text-decoration:none; color: white;text-align: center;">Prepared</a>
				    </button>
			    </div>
		  </div>
		</div>
	</div>
</div>
</body>
<script>
	$(document).ready( function () {
    	$(".btn-primary").click(function(){
    		$(this).parent().parent().parent().removeClass("card");
    		$(this).parent().parent().parent().hide(500);
    	});
    	/*$(".class").click(function(){
		    $(".subclass", this).css("visibility","visible");
		});*/
} );
</script>
</html>