<!DOCTYPE html>
<html>
    <head>
        <title>IGHub Registration</title>
    </head>
    <body>

        <center>
        <h1>Attendance sheet for  {{date('D')}} {{date('M')}} {{date('Y')}}</h1>
        <h3>Total number of fellows is/are {{$attendance->count()}}</h3> 
        @include('navbar')
        <div>
         @if(session('status'))
        <div style="color:green;">{{session('status')}}</div>
        @endif
        @if($errors->all())
        @foreach($errors->all() as $error)
        <div style="color:red;">{{$error}}</div>
        @endforeach
        @endif
        </div>
        <form method="get">

            @csrf
            <label>Search by date:</label>
            <small>search in this format <quote>dd-mm-yyyy</quote></small>
            <input type="text" placeholder="Search" name="q"/><span>
            <input type="submit"></span>
        </form>
        <div>
            @if($attendance->isEmpty())
            <div>You have no student present yet</div>
            @else
            <table border="1" style="border-collapse: collapse;">
                <tr>
                    <th>No</th>
                    
                    <th>Name</th>
                    <th>Email</th>
                    <th>gender</th>
                    <th>Choice</th>
                    <th>Id</th>
                    <th>Time</th>
                    <th>Signout</th>
                    <th>Delete</th>
                </tr>
                @foreach($attendance as $attenda)

                <tr>
                    <td>{{$loop->index+1}}</td>
                    
                    <td>{{$attenda->fellow->name}}</td>
                    <td>{{$attenda->fellow->email}}</td>
                    <td>{{$attenda->fellow->gender}}</td>
                    <td>{{$attenda->fellow->choice}}</td>
                    <td>{{$attenda->fellow->id}}</td>
                    <td>{{$attenda->time}}</td>
                    <td>
                        @if($attenda->timeout=="")
                        <a href="{{route('signout',$attenda->id)}}">Signout</a>
                        @else
                        {{$attenda->timeout}}
                        @endif
                    </td>
                    <td><a style="padding:12px;" href="{{route('fellow.destroy',$attenda->id)}}">Delete</a></td>
                </tr>
                @endforeach
            </table>
            @endif
        </div>
    </center>
    </body>
</html>