<!DOCTYPE html>
<html>
    <head>
        <title>IGHub Registration</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    </head>
    <body style="background-color:#27AE60;padding:5%;">
      
        
        <h1 class="text-center">IGHUB Developer/Netpreneurship Fellowship 2018</h1>

        <h4 class="text-center">Students Attendance Details</h4>
         @include('navbar')
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
        <form method="post" enctype="multipart/form-data”  >
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
                                <input class="form-check-input"type="radio" name="gender" value="Male"/> &nbsp &nbsp &nbsp
                                <label class="form-check-label">Female</label><input class="form-check-input" type="radio" name="gender" value="female"/><br />
                            </div>
                           
                                <div class="form-group">
                                    <label>Qualification:</label>
                                    <input  class="form-control"type="text" placeholder="Qualification" name="qualification" />
                                    <br />
                                </div>
                                <div class="form-group">
                                    <label>Date of Birth :</label>
                                    <input  class="form-control"type="text" placeholder="Date of Birth" name="dob" />
                                    <br />
                                </div>
                                 <div class="form-group">
                                    <label>State of Origin:</label>
                                    <input  class="form-control"type="text" placeholder="State of Origin" name="soo" />
                                    <br />
                                </div>
                                <div class="form-group">
                                    <label>Local Government Area:</label>
                                    <input  class="form-control"type="text" placeholder="Local Government Area" name="lga" />
                                    <br />
                                </div>
                                <div class="form-group">
                                    <label>Home address:</label>
                                    <input  class="form-control"type="text" placeholder="Home address" name="address" />
                                    <br />
                                </div>
            <div class="form-group">
            <label>Fellowship Courses:</label>
            <select class="form-control"name="choice">
                 <option name="Netpreneur">Netpreneur</option>
                <option name="Frontend Development">Frontend Development</option>
                <option name="Backend Development">Backend Development</option>
                <option name="Frontend Development">Frontend Development</option>
                <option name="Mobile Development">Mobile Development</option>
                <option name="Graphics Design">Graphics Design</option>
            </select>
            </div>
             <div class="form-group">
                 
                <label>upload profile image</label>
                    <input type="file" name="pics" class="form-control">
        
            </div>
            <input class="btn btn-secondary" style="background-color:black;" type="submit">
        </form>
        </div>
   
    </body>
</html>