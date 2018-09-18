<!DOCTYPE html>
<html>
    <head>
        <title>IGHub Registration</title>
    </head>
    <body>
        <center>
        <h1>Attendance sheet</h1>
        <div>
         @if(session('status'))
        <div style="color:green;"><h4>{{session('status')}}</h4></div>
        @endif
        @if($errors->all())
        @foreach($errors->all() as $error)
        <div style="color:red;"><h4>{{error}}</h4></div>
        @endforeach
        @endif
        </div>
        <form method="post">

            @csrf
            <label>Input Identification number:</label>
            <input type="number" placeholder="Enter your identification number" name="id"/><br />
            <input type="submit">
        </form>
    </center>
    </body>
</html>