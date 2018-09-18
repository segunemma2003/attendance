<!DOCTYPE html>
<html>
    <head>
        <title>IGHub Registration</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    </head>
    <body style="padding:10%;background-color:#27AE60;">
        <!-- <center> -->
        <h1 class="text-center">IGHUB Developers/Netpreneurship Fellowship 2018</h1>
        <h3 class="text-center">Attendance sheet</h3>
        <div>
            <center>
         @if(session('status'))
        <div style="color:green;"><h4>{{session('status')}}</h4></div>
        @endif
        @if($errors->all())
        @foreach($errors->all() as $error)
        <div style="color:red;"><h4>{{error}}</h4></div>
        @endforeach
        @endif
    </center>
        </div>
         <div style="height:500px;width:40%;margin-left:30%;padding:5%;margin-bottom:30px;">
        	<form method="post">

            @csrf
           <div class="form-group">
            <label>Input Identification number:</label>
            <input type="number" class="form-control" placeholder="Enter your identification number" name="id"/><br />
            <input class="btn btn-secondary" style="background-color:#000;"type="submit">
        	</form>
    	</div>
        </body>
</html>