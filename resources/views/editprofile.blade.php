<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>
<body>
@extends('layouts.app')
    @section('content')
        <center><h1>Welcome to Edit Profile</h1></center>

        <div style="margin-left: 1.4%;">
            <form action="{{route('editprofiel')}}" class="form-group" method="post">
                <!-- Cross Site Request Forgery-->
                {{csrf_field()}}

                <div class="col-md-4 form-group">
                    <b><span>Username: </span></b>
                    <input type="text" name="uname" value="{{}}" class="form-control">
                    @error('uname')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <br>
                <div class="col-md-4 form-group">
                    <b><span>First Name: </span></b>
                    <input type="text" name="fname" value="{{old('fname')}}"class="form-control">
                    @error('fname')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <br>
                <div class="col-md-4 form-group">
                    <b><span>Last Name: </span></b>
                    <input type="text" name="lname" value="{{old('lname')}}" class="form-control">
                    @error('lname')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <br>
                <div class="col-md-4 form-group">
                    <b><span>Password</span>: </span></b>
                    <input type="password" name="password" value="{{old('password')}}" class="form-control">
                    @error('password')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <br>
                <div class="col-md-4 form-group">
                    <b><span>Confirm Password</span>: </span></b>
                    <input type="password" name="cpassword" value="{{old('cpassword')}}" class="form-control">
                    @error('cpassword')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <br>
                <div class="col-md-4 form-group">
                    <b><span>Email Address: </span></b>
                    <input type="email" name="email" value="{{old('email')}}" class="form-control">
                    @error('email')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <br>
                <div class="col-md-4 form-group">
                    <b><span>Phone Number: </span></b>
                    <input type="number" name="Phone" value="{{old('Phone')}}" class="form-control">
                    @error('Phone')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <br>
                <input type="submit" class="btn btn-success" value="Edit" >              
            </form>
        </div>
        
    @endsection 
</body>
</html>