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
        {{$status}}
        @endif
        @if($errors->all())
        @foreach($errors->all() as $error)
        {{error}}
        @endforeach
        @endif
        </div>
        <form method="post">
            <label>Name:</label>
            <input type="text" placeholder="Enter your Name" name="name"/><br />
            <input type="number" placeholder="Enter your identification number" name="id"/><br />
            <input type="submit">
        </form>
    </center>
    </body>
</html>