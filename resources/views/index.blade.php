<!DOCTYPE html>
<html>
    <head>
        <title>IGHub Registration</title>
    </head>
    <body>
        @if(session('status'))
        {{$status}}
        @endif
        @if($errors->all())
        @foreach($errors->all() as $error)
        {{error}}
        @endforeach
        @endif
        <form method="post">
            <label>Name:</label>
            <input type="text" placeholder="Enter your Name" name="name"/><br />
            <input type="text" placeholder="Enter your Phone" name="phone"/><br />
            <input type="email" placeholder="Email Address" name="email" /><br />
            <input type="date" name="date"/>
            <label>Male</label><input type="radio" name="gender"/>
            <label>Female</label><input type="radio" name="gender" />
            <input type="text" placeholder="Qualification" name="qualification" />
            <select name="choice">
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
        </form>
    </body>
</html>