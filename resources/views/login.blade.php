@extends('layout.main')

<body>

<header id="header-wrap">

<div class="top-bar">
<div class="container">
<div class="row">
<div class="col-lg-7 col-md-5 col-xs-12">

<ul class="list-inline">
<li><i class="lni-phone"></i> +0123 456 789</li>
<li><i class="lni-envelope"></i> <a href="http://preview.uideck.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5c2f292c2c332e281c3b313d3530723f3331">[email&#160;protected]</a></li>
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
<h2 class="product-title">Login</h2>
<ol class="breadcrumb">
<li><a href="index-2.html">Home /</a></li>
<li class="current">Login</li>
</ol>
</div>
</div>
</div>
</div>
</div>


<section class="login section-padding">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-5 col-md-12 col-xs-12">
<div class="login-form login-area">
<h3>
Login Now
</h3>
<form role="form" class="login-form" method="post" action="{{ route('login.perform') }}">
@if(isset ($errors) && count($errors) > 0)
    <div class="alert alert-warning" role="alert">
        <ul class="list-unstyled mb-0">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(Session::get('success', false))
    <?php $data = Session::get('success'); ?>
    @if (is_array($data))
        @foreach ($data as $msg)
            <div class="alert alert-warning" role="alert">
                <i class="fa fa-check"></i>
                {{ $msg }}
            </div>
        @endforeach
    @else
        <div class="alert alert-warning" role="alert">
            <i class="fa fa-check"></i>
            {{ $data }}
        </div>
    @endif
@endif
<input type="hidden" name="_token" value="{{ csrf_token() }}" />
<div class="form-group">
<div class="input-icon">
<i class="lni-user"></i>
<input type="email" class="form-control" name="username" value="{{ old('username') }}" placeholder="Email ID" required="required" autofocus>
@if ($errors->has('username'))
    <span class="text-danger text-left">{{ $errors->first('username') }}</span>
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
<div class="form-group mb-3">

<a class="forgetpassword" href="forgot-password.html">Forgot Password?</a>
</div>
<div class="text-center">
<button class="btn btn-common log-btn">Submit</button>
</div>
</form>
</div>
</div>
</div>
</div>
</section>
</body>