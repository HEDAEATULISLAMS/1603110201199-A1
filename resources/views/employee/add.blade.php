<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
	<body>
		<div class="container">
		<div class="jumbotron text-center">
					<h2>Add Employee</h2>
                    @if(Session::has('success'))
						<div class="alert alert-success">
						<strong>{{Session::get('success')}}</strong> 
						</div>
					@endif
	
				</div>
			<div class="section col-md-8 offset-md-2">
				
				<form method="post" action="{{ URL::to('store_employee')}}" >
					{{csrf_field()}}
				<div class="form-group">
						<label for="name">Enter Name</label>
						<input type="text" class="form-control" name="name" id="name">
					</div>
					<div class="form-group">
						<label for="email">Email address</label>
						<input type="email" class="form-control" name="email" id="email">
					</div>

					<div class="form-group">
						<label for="dob">Birth of Date</label>
						<input type="date" class="form-control" name="dob" id="dob">
					</div>

                    <div class="form-group">
						<label for="salary">Salary</label>
						<input type="number" class="form-control" name="salary" id="salary">
					</div>

					<div class="form-group">
				    <label for="gender">Select gender:</label>
				    <select value="" class="form-control" name="gender" >
				    	<option value="">Select Gender</option>
				    	<option value="Male">Male</option>
				    	<option value="Female">Female</option>
				    </select>
			 	</div>
					<button type="submit" class="btn btn-primary">Add</button>
                    <a class="btn btn-primary" href="{{URL::to('all_employee')}}">back</a>
			
				</form>
			</div>
		</div>
	</body>
</html>