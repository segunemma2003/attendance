<!DOCTYPE html>
<html>
    <head>
        <title>IGHub Registration</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    </head>
    <body style="background-color:#27AE60;padding:5%;">
      
        
        <h1 class="text-center">IGHUB Developer/Netpreneurship Fellowship 2018</h1>
        <h4 class="text-center">Students Attendance Details</h4>
        <div style="height:100%;width:40%;margin-left:30%;padding:5%;margin-bottom:30px;">
            @if(session('status'))
            <center>
        <div style="color:green;"><h4>{{session('status')}}</h4></div>
        @endif
        @if($errors->all())
        @foreach($errors->all() as $error)
        <div style="color:red;"><h4>{{$error}}</h4>
        </div>
        @endforeach
        @endif
    </center>
        <form method="post">
            @csrf
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" placeholder="Enter your Name" class="form-control" name="name"/><br />
                </div>
                    <div class="form-group">
                        <label>Phone number:</label>
                        <input type="text" placeholder="Enter your Phone" class="form-control" name="phone"/><br />
                    </div>
                        <div class="form-group">
                            <label>Email:</label>
                            <input type="email" placeholder="Email Address" class="form-control" name="email" /><br />
                        </div>
                            <div class="form-group form-check form-check-inline">
                                <label class="form-check-label">Gender: &nbsp &nbsp </label>

                                <label class="form-check-label">Male</label>
                                <input class="form-check-input"type="radio" name="gender"/> &nbsp &nbsp &nbsp
                                <label class="form-check-label">Female</label><input class="form-check-input" type="radio" name="gender" /><br />
                            </div>
                           
                                <div class="form-group">
                                    <label>Qualification:</label>
                                    <input  class="form-control"type="text" placeholder="Qualification" name="qualification" />
                                    <br />
                                </div>
            <div class="form-group">
            <label>Your choice:</label>
            <select class="form-control"name="choice">
                <option name="Ecommerce Marketing">Ecommerce Marketing</option>
                <option name="Info Marketing">Info Marketing</option>
                <option name="Digital Marketing">Digital Marketing</option>
                <option name="Affiliate Marketing">Affiliate Marketing</option>
                <option name="Product Creation and Launch">Product Creation and Launch</option>
                <option name="Frontend Development">Frontend Development</option>
                <option name="Backend Development">Backend Development</option>
                <option name="Frontend Development">Frontend Development</option>
                <option name="Mobile Development">Mobile Development</option>
                <option name="Graphics Design">Graphics Design</option>
            </select>
            </div>
            <input class="btn btn-secondary" style="background-color:black;" type="submit">
        </form>
        </div>
   
    </body>
</html>