<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Employee List</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Core Stylesheet -->
  
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <style>
    	.modal{
    		color: #000;     }
    </style>
</head>
<body>
	<div class="container">
		<div class="jumbotron text-center">
			<h2>List of Employee</h2>
			<a class="btn btn-primary" href="{{URL::to('add_employee')}}">Add New employee</a>
		</div>
		<div class="section">

			<div class="table-responsive">
				<table class="table table-white table-hover">
					<thead>
						<th>Name</th>
						<th>Email</th>
						<th>Date of Birth</th>
						<th>Salary</th>
						<th>Gender</th>
						
							
					</thead>
					<tbody>
						@foreach($employee as $e)
						<tr>
							<td>{{ $e->name }}</td>
							<td>{{ $e->email }}</td>
							<td>{{ $e->dob }}</td>
							<td>{{ $e->salary }}</td>
							<td>{{ $e->gender }}</td>			
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>