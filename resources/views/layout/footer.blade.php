<footer>

<section class="footer-Content">
<div class="container">
<div class="row">
<div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
<div class="widget">
<div class="footer-logo"><img src="assets/img/logo.png" alt=""></div>
<div class="textwidget">
<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt consectetur, adipisci velit.</p>
</div>
<ul class="mt-3 footer-social">
<li><a class="facebook" href="#"><i class="lni-facebook-filled"></i></a></li>
<li><a class="twitter" href="#"><i class="lni-twitter-filled"></i></a></li>
<li><a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a></li>
<li><a class="google-plus" href="#"><i class="lni-google-plus"></i></a></li>
</ul>
</div>
</div>
<div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
<div class="widget">
<h3 class="block-title">Quick Link</h3>
<ul class="menu">
<li><a href="#">- About Us</a></li>
<li><a href="#">- Blog</a></li>
<li><a href="#">- Events</a></li>
<li><a href="#">- Shop</a></li>
<li><a href="#">- FAQ's</a></li>
<li><a href="#">- About Us</a></li>
<li><a href="#">- Blog</a></li>
<li><a href="#">- Events</a></li>
<li><a href="#">- Shop</a></li>
<li><a href="#">- FAQ's</a></li>
</ul>
</div>
</div>
<div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
<div class="widget">
<h3 class="block-title">Contact Info</h3>
<ul class="contact-footer">
<li>
<strong><i class="lni-phone"></i></strong><span>+1 555 444 66647 <br> +1 555 444 66647</span>
</li>
<li>
<strong><i class="lni-envelope"></i></strong><span><a href="http://preview.uideck.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="88ebe7e6fce9ebfcc8e5e9e1e4a6ebe7e5">[email&#160;protected]</a> <br> <a href="http://preview.uideck.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f4878184849b8680b499959d98da979b99">[email&#160;protected]</a></span>
</li>
<li>
<strong><i class="lni-map-marker"></i></strong><span><a href="#">9870 St Vincent Place, Glasgow, DC 45 <br>Fr 45</a></span>
</li>
</ul>
</div>
</div>
</div>
</div>
</section>


<div id="copyright">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="site-info text-center">
<p><a target="_blank" href="https://templateshub.net">Templates Hub</a></p>
</div>
</div>
</div>
</div>
</div>

</footer>


<a href="#" class="back-to-top">
<i class="lni-chevron-up"></i>
</a>

<div id="preloader">
<div class="loader" id="loader-1"></div>
</div>


<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-min.js"></script>


{!! Html::script('assets/js/popper.min.js') !!}
{!! Html::script('assets/js/bootstrap.min.js') !!}

<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.5.1/nouislider.min.js"></script>
{!! Html::script('assets/js/jquery.counterup.min.js') !!}
{!! Html::script('assets/js/waypoints.min.js') !!}
{!! Html::script('assets/js/wow.js') !!}
{!! Html::script('assets/js/owl.carousel.min.js') !!}
{!! Html::script('assets/js/jquery.slicknav.js') !!}
{!! Html::script('assets/js/main.js') !!}
{!! Html::script('assets/js/form-validator.min.js') !!}
{!! Html::script('assets/js/contact-form-script.min.js') !!}
{!! Html::script('assets/js/summernote.js') !!}

<script>
    var handlesSlider = document.getElementById('slider-round');

    noUiSlider.create(handlesSlider, {
        start: [0, 75000],
				connect: true,
        range: {
            'min': [0],
            'max': [100000]
        }
    });

    var limitFieldMin = document.getElementById('price-min');
    var limitFieldMax = document.getElementById('price-max');

    handlesSlider.noUiSlider.on('update', function (values, handle) {
        (handle ? limitFieldMax : limitFieldMin).innerHTML = Math.round(values[handle]);
    });

		var inputNumberMin = document.getElementById('slider-limit-value-min');
		var inputNumberMax = document.getElementById('slider-limit-value-max');

		handlesSlider.noUiSlider.on('update', function (values, handle) {

					var value = values[handle];

					if (handle) {
						inputNumberMax.value = Math.round(value);
					} else {
						inputNumberMin.value = Math.round(value);
					}
			});

			inputNumberMin.addEventListener('change', function(){
          price_slider.noUiSlider.set(this.value);
      });
      inputNumberMax.addEventListener('change', function(){
          price_slider.noUiSlider.set(this.value);     
      });

</script>
</html>