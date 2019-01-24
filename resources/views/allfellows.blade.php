<!DOCTYPE html>
<html>
    <head>
        <title>IGHub Registration</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    </head>
    <body>

        <center>
        <h1>All Fellows</h1>
        <center><marquee><h3>Welcome to IGHUB Fellowship programme 2018</h3></marquee></center><br/>
        
         @include('navbar') <br/>
         <h3>Digital Marketing </h3>
            <table border="1" style="border-collapse: collapse;">
                <tr>
                    <th>No</th>
                    
                    <th>Name</th>
                    <th>Email</th>
                    <th>gender</th>
                    <th>Age</th>
                    <th>Fellowship Course</th>
                    <th>Id</th>
                    
                </tr>
                @foreach($netpren as $attenda)

                <tr>
                    <td>{{$loop->index+1}}</td>
                    
                    <td><a href="{{route('fellows.edit',$attenda->id)}}">{{$attenda->name}}</a></td>
                    <td>{{$attenda->email}}</td>
                    <td>{{$attenda->gender}}</td>
                    <td>{{$attenda->dob}}</td>
                    <td>{{$attenda->choice}}</td>
                    <td>{{$attenda->id}}</td>
                    <!-- <td>{{$attenda->created_at}}</td> -->
                </tr>
                @endforeach
            </table><br/><br/>

            <h3>Graphic Design </h3>
            <table border="1" style="border-collapse: collapse;">
                <tr>
                    <th>No</th>
                    
                    <th>Name</th>
                    <th>Email</th>
                    <th>gender</th>
                    <th>Age</th>
                    <th>Fellowship Course</th>
                    <th>Id</th>
                    
                </tr>
                @foreach($graphics as $graph)

                <tr>
                    <td>{{$loop->index+1}}</td>
                    
                    <td><a href="{{route('fellows.edit',$attenda->id)}}">{{$graph->name}}</a></td>
                    <td>{{$graph->email}}</td>
                    <td>{{$graph->gender}}</td>
                    <td>{{$graph->dob}}</td>
                    <td>{{$graph->choice}}</td>
                    <td>{{$graph->id}}</td>
                    
                </tr>
                @endforeach
            </table><br/><br/>

            <h3>Frontend Development </h3>
            <table border="1" style="border-collapse: collapse;">
                <tr>
                    <th>No</th>
                    
                    <th>Name</th>
                    <th>Email</th>
                    <th>gender</th>
                    <th>Age</th>
                    <th>Fellowship Course</th>
                    <th>Id</th>
                    
                </tr>
                @foreach($front as $front)

                <tr>
                    <td>{{$loop->index+1}}</td>
                    
                    <td><a href="{{route('fellows.edit',$attenda->id)}}">{{$front->name}}</a></td>
                    <td>{{$front->email}}</td>
                    <td>{{$front->gender}}</td>
                    <td>{{$front->dob}}</td>
                    <td>{{$front->choice}}</td>
                    <td>{{$front->id}}</td>
                    
                </tr>
                @endforeach
            </table><br/><br/>


            <h3>Backend Development </h3>
            <table border="1" style="border-collapse: collapse;">
                <tr>
                    <th>No</th>
                    
                    <th>Name</th>
                    <th>Email</th>
                    <th>gender</th>
                    <th>Age</th>
                    <th>Fellowship Course</th>
                    <th>Id</th>
                    
                </tr>
                @foreach($back as $back)

                <tr>
                    <td>{{$loop->index+1}}</td>
                    
                    <td><a href="{{route('fellows.edit',$attenda->id)}}">{{$back->name}}</a></td>
                    <td>{{$back->email}}</td>
                    <td>{{$back->gender}}</td>
                    <td>{{$back->dob}}</td>
                    <td>{{$back->choice}}</td>
                    <td>{{$back->id}}</td>
                    
                </tr>
                @endforeach
            </table><br/><br/>

            <h3>Mobile Development </h3>
            <table border="1" style="border-collapse: collapse;">
                <tr>
                    <th>No</th>
                    
                    <th>Name</th>
                    <th>Email</th>
                    <th>gender</th>
                    <th>Age</th>
                    <th>Fellowship Course</th>
                    <th>Id</th>
                    
                </tr>
                @foreach($mobile as $mobile)

                <tr>
                    <td>{{$loop->index+1}}</td>
                    
                    <td><a href="{{route('fellows.edit',$attenda->id)}}">{{$mobile->name}}</a></td>
                    <td>{{$mobile->email}}</td>
                    <td>{{$mobile->gender}}</td>
                    <td>{{$mobile->dob}}</td>
                    <td>{{$mobile->choice}}</td>
                    <td>{{$mobile->id}}</td>
                    
                </tr>
                @endforeach
            </table>
        
        </div>
    </center>
    </body>
</html>