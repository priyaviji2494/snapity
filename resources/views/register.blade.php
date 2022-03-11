@extends('layout.main')

<body>

<header id="header-wrap">

<div class="top-bar">
<div class="container">
<div class="row">
<div class="col-lg-7 col-md-5 col-xs-12">

<ul class="list-inline">
<li><i class="lni-phone"></i> +0123 456 789</li>
<li><i class="lni-envelope"></i> <a href="http://preview.uideck.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9ae9efeaeaf5e8eedafdf7fbf3f6b4f9f5f7">[email&#160;protected]</a></li>
</ul>

</div>
<div class="col-lg-5 col-md-7 col-xs-12">
@include('layout.topmenu')
</div>
</div>
</div>
</div>


@include('layout.navbar')

</header>


<div class="page-header" style="background: url(assets/img/banner1.jpg);">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb-wrapper">
<h2 class="product-title">Join Us</h2>
<ol class="breadcrumb">
<li><a href="#">Home /</a></li>
<li class="current">Register</li>
</ol>
</div>
</div>
</div>
</div>
</div>


<section class="register section-padding">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-5 col-md-12 col-xs-12">
<div class="register-form login-area">
<h3>
Register
</h3>
<form class="login-form" method="post" action="{{route('register.perform') }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}" />
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
<div class="form-group">
<div class="input-icon">
<i class="lni-user"></i>
<input type="text" class="form-control" name="username" value="{{ old('username') }}" required="required" autofocus placeholder="Username">
@if ($errors->has('username'))
    <span class="text-danger text-left">{{ $errors->first('username') }}</span>
@endif
</div>
</div>
<div class="form-group">
<div class="input-icon">
<i class="lni-envelope"></i>
<input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="name@example.com" required="required" autofocus>
@if ($errors->has('email'))
    <span class="text-danger text-left">{{ $errors->first('email') }}</span>
@endif
</div>
</div>
<div class="form-group">
<div class="input-icon">
<i class="lni-lock"></i>
<input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
@if ($errors->has('password'))
    <span class="text-danger text-left">{{ $errors->first('password') }}</span>
@endif
</div>
</div>
<div class="form-group">
<div class="input-icon">
<i class="lni-lock"></i>
<input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" required="required" placeholder="Retype Password">
@if ($errors->has('password_confirmation'))
    <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
@endif
</div>
</div>
<!-- <div class="form-group mb-3">
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="checkedall">
<label class="custom-control-label" for="checkedall">By registering, you accept our Terms & Conditions</label>
</div>
</div> -->
<div class="text-center">
<button class="btn btn-common log-btn">Register</button>
</div>
</form>
</div>
</div>
</div>
</div>
</section>

</body>