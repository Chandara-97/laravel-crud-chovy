<nav class="navbar navbar-expand-lg navbar-light fixed-top">
		<div class="container">
            <a class="navbar-brand" href="#"><img src="image/logo.png" style="width: 20%;" alt=""></a>
            <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler custom-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button"><span class="navbar-toggler-icon "></span></button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">

				<li class="nav-item " id="1">
						<a class="nav-link"  href="{{url('/')}}"><span class="btn btn-white rounded-pill">ទំព័រដើម</span> </a>
					</li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="btn  btn-white rounded-pill ">ដំណឹងអាហារូករណ៍</span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{url('/scholarship/highschool')}}"><span class="btn  btn-white rounded-pill ">វិទ្យាល័យ</span></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{url('/scholarship/bachelor')}}"><span class="btn  btn-white rounded-pill ">បរិញ្ញាបត្រ</span></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{url('/scholarship/master')}}"><span class="btn  btn-white rounded-pill ">អនុបណ្ឌិត</span></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{url('/scholarship/phd')}}"><span class="btn  btn-white rounded-pill ">បណ្ឌិត</span></a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="btn  btn-white rounded-pill ">ប្រភពចំណេះដឹង</span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{url('/source/book')}}"><span class="btn  btn-white rounded-pill ">Book</span></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{url('/source/video')}}"><span class="btn  btn-white rounded-pill ">Video</span></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{url('/source/website')}}"><span class="btn  btn-white rounded-pill ">website</span></a>
                            <div class="dropdown-divider"></div>
                        </div>
                    </li>
					<li class="nav-item"id="3">
						<a class="nav-link" href="{{url('/aboutus')}}"><span class="btn  btn-white rounded-pill ">ព័ត៌មានអំពីយើង</span> </a>
					</li>
					<li class="nav-item" id="4">
                        <a class="nav-link"href="{{url('/contactus')}}"><span class="btn  btn-white rounded-pill ">ទាក់ទងជាមួយយើង</span> </a>
					</li>
					@guest
                    <li class="nav-item"id="5">
						<a class="nav-link" href="{{url('/login')}}"><span class="btn  btn-white rounded-pill">ចូលគណនី</span> </a>
					</li>
					@if(Route::has('register'))
					<li class="nav-item" id="6">
						<a class="nav-link"href="{{url('/register')}}"><span class="btn  btn-white rounded-pill">ចុះឈ្មោះ</span> </a>
					</li>
					@endif
					@else
					<li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-primary font-weight-bold" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
					@endguest
				</ul>
			</div>
		</div>
	</nav>
<style>
    @media all and (min-width: 992px) {
        .navbar .nav-item .dropdown-menu{  display:block; opacity: 0;  visibility: hidden; transition:.3s; margin-top:0;  }
        .navbar .nav-item:hover .nav-link{ color: #fff;  }
        .navbar .dropdown-menu.fade-down{ top:80%; transform: rotateX(-75deg); transform-origin: 0% 0%; }
        .navbar .dropdown-menu.fade-up{ top:180%;  }
        .navbar .nav-item:hover .dropdown-menu{ transition: .3s; opacity:1; visibility:visible; top:100%; transform: rotateX(0deg); }
    }
</style>

