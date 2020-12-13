@extends('layouts.app')

@section('title')
   Add Student
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8 mt-5">

        <div class="card">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <div class="card-header"><h2>Add Student</h2></div>
            <div class="card-body">
                <form action="{{ url('/addstudent') }}" method="POST" class="form-horizontal">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="cols-sm-2 control-label">Your Name</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                                    placeholder="Enter your Name" />
                            </div>
                            @error('name')
                                <span class="text text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="roll" class="cols-sm-2 control-label">Your Roll</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="roll" id="roll"
                                    placeholder="Enter your Roll" />
                            </div>
                            @error('name')
                                <span class="text text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="class" class="cols-sm-2 control-label">Your Class</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                <select name="class" class="form-control @error('name') is-invalid @enderror" id="exampleFormControlSelect1">
                                    <option selected='selected'>Select Once</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                            @error('name')
                                <span class="text text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="cols-sm-2 control-label">Your Email</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope fa"
                                        aria-hidden="true"></i></span>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="email" id="email"
                                    placeholder="Enter your Email" />
                            </div>
                            @error('name')
                                <span class="text text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username" class="cols-sm-2 control-label">Username</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="username" id="username"
                                    placeholder="Enter your Username" />
                            </div>
                            @error('name')
                                <span class="text text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="cols-sm-2 control-label">Password</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock fa-lg"
                                        aria-hidden="true"></i></span>
                                <input type="password" class="form-control @error('name') is-invalid @enderror" name="password" id="password"
                                    placeholder="Enter your Password" />
                            </div>
                            @error('name')
                                <span class="text text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group ">
                        <button type="submit" class="btn btn-primary btn-lg btn-block login-button">Register</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection
