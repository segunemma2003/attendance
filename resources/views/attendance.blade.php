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
        <div style="color:green;">{{session('status')}}</div>
        @endif
        @if($errors->all())
        @foreach($errors->all() as $error)
        <div style="color:red;">{{error}}</div>
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