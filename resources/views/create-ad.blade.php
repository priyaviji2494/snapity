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
<h2 class="product-title">Post an Ad</h2>
<ol class="breadcrumb">
<li><a href="#">Home /</a></li>
<li class="current">Post an Ad</li>
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
                            @if(Route::currentRouteName()=='post-ads.show')
                                <h2 class="dashbord-title">Post an Ad - Choose Category</h2>
                            @else
                                <h2 class="dashbord-title">Post an Ad - Add Product Details</h2>
                            @endif
                            </div>
                            @if(Route::currentRouteName()=='add-product')
                                <ol class="breadcrumb">
                                @foreach($category_name as $val)
                                    <li>{{$val->name}} /</li>
                                @endforeach
                                @foreach($subcategory_name as $val)
                                    <li class="current">{{$val->subcategory_name}}</li>
                                @endforeach
                                </ol>
                                <a href="{{route('post-ads.show')}}">Change</a>
                            @endif
                            <div class="dashboard-wrapper">
                            @if(Route::currentRouteName()=='post-ads.show')
                                <ul id="accordion" class="accordion">
                                @foreach($cat_subcat as $val)            
                                    <li>
                                        <div class="link"><i class="lni-{{$val->icon}}"></i>{{$val->name}}<i class="fa fa-chevron-down"></i></div>
                                        <ul class="submenu">
                                        @foreach($val->cat_subcat as $val1) 
                                            <li><a href="{{url('add-product/'.$val->id.'/'.$val1->id)}}">{{$val1->subcategory_name}}</a></li>
                                        @endforeach
                                        </ul>
                                    </li>
                                @endforeach
                                </ul> 
                            @else
                            <div class="form-group mb-3">
                                <label class="control-label">Ad Title</label>
                                <input class="form-control input-md" name="Title" placeholder="Title" type="text">
                            </div>  
                            <div class="form-group mb-3">
                                <label class="control-label">Description</label>
                                <textarea class="form-control input-md" name="Title"></textarea>
                            </div>
                            @foreach($fields as $v1)
                            <div class="form-group mb-3">
                                <label class="control-label">{{$v1->field_name}}</label>
                                @if($v1->field_type=='inputbox')
                                    <input class="form-control input-md" name="{{$v1->field_name}}" placeholder="{{$v1->field_name}}" type="text">
                                @endif
                            </div>
                            @endforeach
                            <div class="form-group mb-3">
                                <label class="control-label">Price</label>
                                <input class="form-control input-md" name="price" placeholder="Price" type="text">
                            </div>
                            <div class="form-group mb-3">
                                <div class="tg-checkbox mt-3">
                                    <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="tg-priceoncall">
                                    <label class="custom-control-label" for="tg-priceoncall">Courier available</label>
                                    </div>
                                </div>
                                <div class="tg-checkbox mt-3">
                                    <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="tg-priceoncall">
                                    <label class="custom-control-label" for="tg-priceoncall">Online payment</label>
                                    </div>
                                </div>
                            </div>
                            @endif                                 
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