<!DOCTYPE html>
<html>
    <head>
        <title>IGHub Registration</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    </head>
    <body>

        <center>
        <h1>All Fellows</h1>
        <center><marquee><h3>Welcome to IGHUB Fellowship programme 2018</h3></marquee></center> 
        <h3>Total number of registered fellows are {{$attendances->count()}}</h3>
         @include('navbar')
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
                </tr>
                @foreach($attendance as $attenda)

                <tr>
                    <td>{{$loop->index+1}}</td>
                    
                    <td><a href="{{route('fellow.edit',$attenda->id)}}">{{$attenda->name}}</a></td>
                    <td>{{$attenda->email}}</td>
                    <td>{{$attenda->gender}}</td>
                    <td>{{$attenda->choice}}</td>
                    <td>{{$attenda->id}}</td>
                    <td>{{$attenda->created_at}}</td>
                </tr>
                @endforeach
            </table>
<div style="margin:0 auto;">{{$attendance->links()}}</div>
            @endif
        </div>
    </center>
    </body>
</html>