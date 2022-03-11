@extends('layout.main')
@section('content')
<body>
    <style>
        ul {
            list-style-type: none
        }

        a {
            color: #b63b4d;
            text-decoration: none
        }

        .accordion {
            width: 100%;
            max-width: 384px;
            margin: 30px auto 20px;
            background: #FFF;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 0px
        }

        .accordion .link {
            cursor: pointer;
            display: block;
            padding: 15px 15px 15px 42px;
            color: #4D4D4D;
            font-size: 14px;
            font-weight: 700;
            border-bottom: 1px solid #CCC;
            position: relative;
            -webkit-transition: all 0.4s ease;
            -o-transition: all 0.4s ease;
            transition: all 0.4s ease
        }

        .accordion li:last-child .link {
            border-bottom: 0
        }

        .accordion li i {
            position: absolute;
            top: 16px;
            left: 12px;
            font-size: 18px;
            color: #595959;
            -webkit-transition: all 0.4s ease;
            -o-transition: all 0.4s ease;
            transition: all 0.4s ease
        }

        .accordion li i.fa-chevron-down {
            right: 12px;
            left: auto;
            font-size: 16px
        }

        .accordion li.open .link {
            color: #AA00FF
        }

        .accordion li.open i {
            color: #AA00FF
        }

        .accordion li.open i.fa-chevron-down {
            -webkit-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            -o-transform: rotate(180deg);
            transform: rotate(180deg)
        }

        .submenu {
            display: none;
            background: #444359;
            font-size: 14px
        }

        .submenu li {
            border-bottom: 1px solid #4b4a5e
        }

        .submenu a {
            display: block;
            text-decoration: none;
            color: #d9d9d9;
            padding: 12px;
            padding-left: 42px;
            -webkit-transition: all 0.25s ease;
            -o-transition: all 0.25s ease;
            transition: all 0.25s ease
        }

        .submenu a:hover {
            background: #b63b4d;
            color: #FFF
        }
</style>

<header id="header-wrap">

<div class="top-bar">
<div class="container">
<div class="row">
<div class="col-lg-7 col-md-5 col-xs-12">

<ul class="list-inline">
<li><i class="lni-phone"></i> +0123 456 789</li>
<li><i class="lni-envelope"></i> <a href="http://preview.uideck.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3d4e484d4d524f497d5a505c5451135e5250">[email&#160;protected]</a></li>
</ul>

</div>
<div class="col-lg-5 col-md-7 col-xs-12">
@include('layout.topmenu')
</div>
</div>
</div>
</div>


@include('layout.navbar')

<div class="page-header" style="background: url(assets/img/banner1.jpg);">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb-wrapper">
<h2 class="product-title">Profile Settings</h2>
<ol class="breadcrumb">
<li><a href="#">Home /</a></li>
<li class="current">Profile Settings</li>
</ol>
</div>
</div>
</div>
</div>
</div>

<div id="content" class="section-padding">
<div class="container">
<div class="row">
<div class="col-sm-12 col-md-4 col-lg-3 page-sidebar">
    @include('layout.profile-asidebar')
</div>
<div class="col-sm-12 col-md-8 col-lg-9">
<div class="row page-content">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">
<div class="inner-box">
<div class="dashboard-box">
<h2 class="dashbord-title">Ad Detail</h2>
</div>
<div class="dashboard-wrapper">
    <ul id="accordion" class="accordion">
        <li>
            <div class="link"><i class="fa fa-laptop"></i>Laptops<i class="fa fa-chevron-down"></i></div>
            <ul class="submenu">
                <li><a href="#">Dell Acron</a></li>
                <li><a href="#">HP Envy</a></li>
                <li><a href="#">Macbook Air</a></li>
            </ul>
        </li>
        <li>
            <div class="link"><i class="fa fa-tv"></i>Smart TV<i class="fa fa-chevron-down"></i></div>
            <ul class="submenu">
                <li><a href="#">Sony Bravia</a></li>
                <li><a href="#">Samsung</a></li>
                <li><a href="#">MI</a></li>
            </ul>
        </li>
        <li>
            <div class="link"><i class="fa fa-mobile"></i>Mobiles<i class="fa fa-chevron-down"></i></div>
            <ul class="submenu">
                <li><a href="#">Samsung S9</a></li>
                <li><a href="#">Apple X</a></li>
                <li><a href="#">Honor Play</a></li>
            </ul>
        </li>
        <li>
            <div class="link"><i class="fa fa-globe"></i>Search Engines<i class="fa fa-chevron-down"></i></div>
            <ul class="submenu">
                <li><a href="#">Google</a></li>
                <li><a href="#">Bing</a></li>
                <li><a href="#">Yahoo</a></li>
            </ul>
        </li>
    </ul>
</div>
<div class="dashboard-wrapper" style="">
<div class="form-group mb-3">
<label class="control-label">Project Title</label>
<input class="form-control input-md" name="Title" placeholder="Title" type="text">
</div>
<div class="form-group mb-3 tg-inputwithicon">
<label class="control-label">Categories</label>
<div class="tg-select form-control">
<select>
<option value="none">Select Categories</option>
@foreach($category as $val)
    <option value="{{$val->id}}">{{$val->name}}</option>
@endforeach
</select>
</div>
</div>
<div class="form-group mb-3 tg-inputwithicon">
<label class="control-label">Sub-Categories</label>
<div class="tg-select form-control">
<select>
<option value="none">Select Sub-Categories</option>
@foreach($subcategory as $val)
    <option value="{{$val->id}}">{{$val->subcategory_name}}</option>
@endforeach
</select>
</div>
</div>
<div class="form-group mb-3">
<label class="control-label">Price Title</label>
<input class="form-control input-md" name="price" placeholder="Ad your Price" type="text">
<div class="tg-checkbox mt-3">
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="tg-priceoncall">
<label class="custom-control-label" for="tg-priceoncall">Price On Call</label>
</div>
</div>
</div>
<div class="form-group md-3">
<section id="editor">
<div id="summernote">
</div>
</section>
</div>
<label class="tg-fileuploadlabel" for="tg-photogallery">
<span>Drop files anywhere to upload</span>
<span>Or</span>
<span class="btn btn-common">Select Files</span>
<span>Maximum upload file size: 500 KB</span>
<input id="tg-photogallery" class="tg-fileinput" type="file" name="file">
</label>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-5" style="display:none;">
<div class="inner-box">
<div class="tg-contactdetail">
<div class="dashboard-box">
<h2 class="dashbord-title">Contact Detail</h2>
</div>
<div class="dashboard-wrapper">
<div class="form-group mb-3">
<strong>I’m a:</strong>
<div class="tg-selectgroup">
<span class="tg-radio">
<input id="tg-sameuser" type="radio" name="usertype" value="same user" checked="">
<label for="tg-sameuser">Same User</label>
</span>
<span class="tg-radio">
<input id="tg-someoneelse" type="radio" name="usertype" value="someone else">
<label for="tg-someoneelse">Someone Else</label>
</span>
</div>
</div>
<div class="form-group mb-3">
<label class="control-label">First Name*</label>
<input class="form-control input-md" name="name" type="text">
</div>
<div class="form-group mb-3">
<label class="control-label">Last Name*</label>
<input class="form-control input-md" name="name" type="text">
</div>
<div class="form-group mb-3">
<label class="control-label">Phone*</label>
<input class="form-control input-md" name="phone" type="text">
</div>
<div class="form-group mb-3">
<label class="control-label">Enter Address</label>
<input class="form-control input-md" name="address" type="text">
</div>
<div class="form-group mb-3">
<label class="control-label">Enter Address</label>
<input class="form-control input-md" name="address" type="text">
</div>
<div class="form-group mb-3 tg-inputwithicon">
<label class="control-label">Country</label>
<div class="tg-select form-control">
<select>
<option value="none">Select Country</option>
<option value="none">New York</option>
<option value="none">California</option>
<option value="none">Washington</option>
 <option value="none">Birmingham</option>
<option value="none">Chicago</option>
<option value="none">Phoenix</option>
</select>
</div>
</div>
<div class="form-group mb-3 tg-inputwithicon">
<label class="control-label">State</label>
<div class="tg-select form-control">
<select>
<option value="none">Select State</option>
<option value="none">Select State</option>
<option value="none">Select State</option>
</select>
</div>
</div>
<div class="form-group mb-3 tg-inputwithicon">
<label class="control-label">City</label>
<div class="tg-select form-control">
<select>
<option value="none">Select State</option>
<option value="none">Select State</option>
<option value="none">Select State</option>
</select>
</div>
</div>
<div class="tg-checkbox">
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="tg-agreetermsandrules">
<label class="custom-control-label" for="tg-agreetermsandrules">I agree to all <a href="javascript:void(0);">Terms of Use &amp; Posting Rules</a></label>
</div>
</div>
<button class="btn btn-common" type="button">Post Ad</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script>
    $(function() {
    var Accordion = function(el, multiple) {
    this.el = el || {};
    this.multiple = multiple || false;

    var links = this.el.find('.link');

    links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
    }

    Accordion.prototype.dropdown = function(e) {
    var $el = e.data.el;
    $this = $(this),
    $next = $this.next();

    $next.slideToggle();
    $this.parent().toggleClass('open');

    if (!e.data.multiple) {
    $el.find('.submenu').not($next).slideUp().parent().removeClass('open');
    };
    }

    var accordion = new Accordion($('#accordion'), false);
    });
</script>
</body>
@endsection