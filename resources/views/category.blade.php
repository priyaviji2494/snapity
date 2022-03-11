@extends('layout.main')
<body>
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
    <div id="hero-area">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 text-center">
            <div class="contents-ctg">
              <div class="search-bar">
                <div class="search-inner">
                  <form class="search-form">
                    <div class="form-group inputwithicon">
                      <i class="lni-tag"></i>
                      <input type="text" name="customword" class="form-control" placeholder="Enter Product Keyword">
                    </div>
                    <div class="form-group inputwithicon">
                      <i class="lni-target"></i>
                      <div class="select">
                        <select>
                          <option value="none">All Locations</option>
                          <option value="none">New York</option>
                          <option value="none">California</option>
                          <option value="none">Washington</option>
                          <option value="none">Birmingham</option>
                          <option value="none">Chicago</option>
                          <option value="none">Phoenix</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group inputwithicon">
                      <i class="lni-menu"></i>
                      <div class="select">
                        <select>
                          <option value="none">Select Categories</option>
                          <option value="none">Mobiles</option>
                          <option value="none">Electronics</option>
                          <option value="none">Training</option>
                          <option value="none">Real Estate</option>
                          <option value="none">Services</option>
                          <option value="none">Training</option>
                          <option value="none">Vehicles</option>
                        </select>
                      </div>
                    </div>
                    <button class="btn btn-common" type="button"><i class="lni-search"></i> Search Now</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="main-container section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-12 col-xs-12 page-sidebar">
          <aside>
            <div class="widget_search">
              <form role="search" id="search-form">
                <input type="search" class="form-control" autocomplete="off" name="s" placeholder="Search..." id="search-input" value="">
                <button type="submit" id="search-submit" class="search-btn"><i class="lni-search"></i></button>
              </form>
            </div>
            <div class="widget categories">
              <h4 class="widget-title">All Categories</h4>
              <ul class="categories-list">
                <li>
                  <a href="#">
                  <i class="lni-dinner"></i>
                  Hotel & Travels <span class="category-counter">(5)</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                  <i class="lni-control-panel"></i>
                  Services <span class="category-counter">(8)</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                  <i class="lni-github"></i>
                  Pets <span class="category-counter">(2)</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                  <i class="lni-coffee-cup"></i>
                  Restaurants <span class="category-counter">(3)</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                  <i class="lni-home"></i>
                  Real Estate <span class="category-counter">(4)</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                  <i class="lni-pencil"></i>
                  Jobs <span class="category-counter">(5)</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                  <i class="lni-display"></i>
                  Electronics <span class="category-counter">(9)</span>
                  </a>
                </li>
              </ul>
            </div>
            <div class="widget widget-price-filter">
              <h4 class="widget-title">Price</h4>
              <div class="add-box">
								<form method="post" action="">
									<p class="price-slider-value mb-3">Price ($) 
                    <span id="price-min"></span> - <span id="price-max"></span>
									</p>
									<div class="slider-styled price-slider" id="slider-round"></div>
									<div class="row slider-value-wrap">
										<input type="text" id="slider-limit-value-min" class="form-control">
										<input type="text" id="slider-limit-value-max" class="form-control">
									</div>
								</form>
              </div>
            </div>
            <div class="widget">
              <h4 class="widget-title">Advertisement</h4>
              <div class="add-box">
                <img class="img-fluid" src="assets/img/img1.jpg" alt="">
              </div>
            </div>
          </aside>
        </div>
        <div class="col-lg-9 col-md-12 col-xs-12 page-content">
          <div class="product-filter">
            <div class="short-name">
              <span>Showing (1 - 12 products of 7371 products)</span>
            </div>
            <div class="Show-item">
              <span>Show Items</span>
              <form class="woocommerce-ordering" method="post">
                <label>
                  <select name="order" class="orderby">
                    <option selected="selected" value="menu-order">49 items</option>
                    <option value="popularity">popularity</option>
                    <option value="popularity">Average ration</option>
                    <option value="popularity">newness</option>
                    <option value="popularity">price</option>
                  </select>
                </label>
              </form>
            </div>
            <ul class="nav nav-tabs">
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#grid-view"><i class="lni-grid"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#list-view"><i class="lni-list"></i></a>
              </li>
            </ul>
          </div>
          <div class="adds-wrapper">
            <div class="tab-content">
              <div id="grid-view" class="tab-pane fade">
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="featured-box">
                      <figure>
                        <span class="price-save">
                        30% Save
                        </span>
                        <div class="icon">
                          <span class="bg-green"><i class="lni-heart"></i></span>
                          <span><i class="lni-bookmark"></i></span>
                        </div>
                        <a href="#"><img class="img-fluid" src="assets/img/featured/img-1.jpg" alt=""></a>
                      </figure>
                      <div class="feature-content">
                        <div class="product">
                          <a href="#">Electronic > </a>
                          <a href="#">Apple</a>
                        </div>
                        <h4><a href="{{url('ad-details')}}">Canon SX Powershot ...</a></h4>
                        <div class="meta-tag">
                          <span>
                          <a href="#"><i class="lni-user"></i> John Smith</a>
                          </span>
                          <span>
                          <a href="#"><i class="lni-map-marker"></i> New York, US</a>
                          </span>
                          <span>
                          <a href="#"><i class="lni-tag"></i> Apple</a>
                          </span>
                        </div>
                        <p class="dsc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
                        <div class="listing-bottom">
                          <h3 class="price float-left">$249.00</h3>
                          <a href="{{url('ad-details')}}" class="btn btn-common float-right">View Details</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="featured-box">
                      <figure>
                        <div class="icon">
                          <span class="bg-green"><i class="lni-heart"></i></span>
                          <span><i class="lni-bookmark"></i></span>
                        </div>
                        <a href="#"><img class="img-fluid" src="assets/img/featured/img-2.jpg" alt=""></a>
                      </figure>
                      <div class="feature-content">
                        <div class="product">
                          <a href="#">Electronic > </a>
                          <a href="#">Apple</a>
                        </div>
                        <h4><a href="{{url('ad-details')}}">Apple Macbook Pro ...</a></h4>
                        <div class="meta-tag">
                          <span>
                          <a href="#"><i class="lni-user"></i> John Smith</a>
                          </span>
                          <span>
                          <a href="#"><i class="lni-map-marker"></i> New York, US</a>
                          </span>
                          <span>
                          <a href="#"><i class="lni-tag"></i> Apple</a>
                          </span>
                        </div>
                        <p class="dsc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
                        <div class="listing-bottom">
                          <h3 class="price float-left">$289.00</h3>
                          <a href="{{url('ad-details')}}" class="btn btn-common float-right">View Details</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="featured-box">
                      <figure>
                        <div class="icon">
                          <span class="bg-green"><i class="lni-heart"></i></span>
                          <span><i class="lni-bookmark"></i></span>
                        </div>
                        <a href="#"><img class="img-fluid" src="assets/img/featured/img-3.jpg" alt=""></a>
                      </figure>
                      <div class="feature-content">
                        <div class="product">
                          <a href="#">Electronic > </a>
                          <a href="#">Apple</a>
                        </div>
                        <h4><a href="{{url('ad-details')}}">Mercedes Benz E200 ...</a></h4>
                        <div class="meta-tag">
                          <span>
                          <a href="#"><i class="lni-user"></i> John Smith</a>
                          </span>
                          <span>
                          <a href="#"><i class="lni-map-marker"></i> New York, US</a>
                          </span>
                          <span>
                          <a href="#"><i class="lni-tag"></i> Apple</a>
                          </span>
                        </div>
                        <p class="dsc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
                        <div class="listing-bottom">
                          <h3 class="price float-left">$199.80</h3>
                          <a href="{{url('ad-details')}}" class="btn btn-common float-right">View Details</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="featured-box">
                      <figure>
                        <span class="price-save">
                        25% Save
                        </span>
                        <div class="icon">
                          <span class="bg-green"><i class="lni-heart"></i></span>
                          <span><i class="lni-bookmark"></i></span>
                        </div>
                        <a href="#"><img class="img-fluid" src="assets/img/featured/img-4.jpg" alt=""></a>
                      </figure>
                      <div class="feature-content">
                        <div class="product">
                          <a href="#">Electronic > </a>
                          <a href="#">Apple</a>
                        </div>
                        <h4><a href="{{url('ad-details')}}">Brown Leather Bag ...</a></h4>
                        <div class="meta-tag">
                          <span>
                          <a href="#"><i class="lni-user"></i> John Smith</a>
                          </span>
                          <span>
                          <a href="#"><i class="lni-map-marker"></i> New York, US</a>
                          </span>
                          <span>
                          <a href="#"><i class="lni-tag"></i> Apple</a>
                          </span>
                        </div>
                        <p class="dsc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
                        <div class="listing-bottom">
                          <h3 class="price float-left">$206.90</h3>
                          <a href="{{url('ad-details')}}" class="btn btn-common float-right">View Details</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="list-view" class="tab-pane fade active show">
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="featured-box">
                      <figure>
                        <span class="price-save">
                        10% Save
                        </span>
                        <div class="icon">
                          <span class="bg-green"><i class="lni-heart"></i></span>
                          <span><i class="lni-bookmark"></i></span>
                        </div>
                        <a href="#"><img class="img-fluid" src="assets/img/featured/img-1.jpg" alt=""></a>
                      </figure>
                      <div class="feature-content">
                        <div class="product">
                          <a href="#">Electronic > </a>
                          <a href="#">Apple</a>
                        </div>
                        <h4><a href="{{url('ad-details')}}">Canon SX Powershot ...</a></h4>
                        <div class="meta-tag">
                          <span>
                          <a href="#"><i class="lni-user"></i> John Smith</a>
                          </span>
                          <span>
                          <a href="#"><i class="lni-map-marker"></i> New York, US</a>
                          </span>
                          <span>
                          <a href="#"><i class="lni-tag"></i> Apple</a>
                          </span>
                        </div>
                        <p class="dsc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
                        <div class="listing-bottom">
                          <h3 class="price float-left">$249.00</h3>
                          <a href="{{url('ad-details')}}" class="btn btn-common float-right">View Details</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="featured-box">
                      <figure>
                        <div class="icon">
                          <span class="bg-green"><i class="lni-heart"></i></span>
                          <span><i class="lni-bookmark"></i></span>
                        </div>
                        <a href="#"><img class="img-fluid" src="assets/img/featured/img-2.jpg" alt=""></a>
                      </figure>
                      <div class="feature-content">
                        <div class="product">
                          <a href="#">Electronic > </a>
                          <a href="#">Apple</a>
                        </div>
                        <h4><a href="{{url('ad-details')}}">Apple Macbook Pro ...</a></h4>
                        <div class="meta-tag">
                          <span>
                          <a href="#"><i class="lni-user"></i> John Smith</a>
                          </span>
                          <span>
                          <a href="#"><i class="lni-map-marker"></i> New York, US</a>
                          </span>
                          <span>
                          <a href="#"><i class="lni-tag"></i> Apple</a>
                          </span>
                        </div>
                        <p class="dsc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
                        <div class="listing-bottom">
                          <h3 class="price float-left">$289.00</h3>
                          <a href="{{url('ad-details')}}" class="btn btn-common float-right">View Details</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="featured-box">
                      <figure>
                        <span class="price-save">
                        30% Save
                        </span>
                        <div class="icon">
                          <span class="bg-green"><i class="lni-heart"></i></span>
                          <span><i class="lni-bookmark"></i></span>
                        </div>
                        <a href="#"><img class="img-fluid" src="assets/img/featured/img-3.jpg" alt=""></a>
                      </figure>
                      <div class="feature-content">
                        <div class="product">
                          <a href="#">Electronic > </a>
                          <a href="#">Apple</a>
                        </div>
                        <h4><a href="{{url('ad-details')}}">Mercedes Benz E200 ...</a></h4>
                        <div class="meta-tag">
                          <span>
                          <a href="#"><i class="lni-user"></i> John Smith</a>
                          </span>
                          <span>
                          <a href="#"><i class="lni-map-marker"></i> New York, US</a>
                          </span>
                          <span>
                          <a href="#"><i class="lni-tag"></i> Apple</a>
                          </span>
                        </div>
                        <p class="dsc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
                        <div class="listing-bottom">
                          <h3 class="price float-left">$199.80</h3>
                          <a href="{{url('ad-details')}}" class="btn btn-common float-right">View Details</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="featured-box">
                      <figure>
                        <div class="icon">
                          <span class="bg-green"><i class="lni-heart"></i></span>
                          <span><i class="lni-bookmark"></i></span>
                        </div>
                        <a href="#"><img class="img-fluid" src="assets/img/featured/img-4.jpg" alt=""></a>
                      </figure>
                      <div class="feature-content">
                        <div class="product">
                          <a href="#">Electronic > </a>
                          <a href="#">Apple</a>
                        </div>
                        <h4><a href="{{url('ad-details')}}">Brown Leather Bag ...</a></h4>
                        <div class="meta-tag">
                          <span>
                          <a href="#"><i class="lni-user"></i> John Smith</a>
                          </span>
                          <span>
                          <a href="#"><i class="lni-map-marker"></i> New York, US</a>
                          </span>
                          <span>
                          <a href="#"><i class="lni-tag"></i> Apple</a>
                          </span>
                        </div>
                        <p class="dsc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
                        <div class="listing-bottom">
                          <h3 class="price float-left">$206.90</h3>
                          <a href="{{url('ad-details')}}" class="btn btn-common float-right">View Details</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="pagination-bar">
            <nav>
              <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link active" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>