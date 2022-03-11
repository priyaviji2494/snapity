<div class="roof-social float-right">
<a class="facebook" href="#"><i class="lni-facebook-filled"></i></a>
<a class="twitter" href="#"><i class="lni-twitter-filled"></i></a>
<a class="instagram" href="#"><i class="lni-instagram-filled"></i></a>
<a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a>
<a class="google" href="#"><i class="lni-google-plus"></i></a>
</div>
<div class="header-top-right float-right">
@auth
{{auth()->user()->username}}
<a href="{{ route('logout.perform') }}" class="header-top-button"><i class="lni-lock"></i>Logout</a>
@endauth

@guest
<a href="{{url('login')}}" class="header-top-button"><i class="lni-lock"></i> Log In</a> |
<a href="{{url('register')}}" class="header-top-button"><i class="lni-pencil"></i> Register</a>
@endguest

</div>