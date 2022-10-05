<!doctype html>
<html lang="en">
  <head>
  	<title>@yield('judul')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{asset('css/style.css')}}">
  </head>
  <body>

		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	        </button>
        </div>
	  		<div class="img bg-wrap text-center py-4" style="background-image: url('{{asset('images/bg_1.jpg')}}');">
	  			<div class="user-logo">
	  				<div class="img" style="background-image: url('{{asset('images/wert.jpg')}}');"></div>
	  				<h3 style="
            a:link {
            color: green;
            background-color: transparent;
            text-decoration: none;
          }"><a href="/">Data Sekolah</a></h3>
            <p>PALEMBANG</p>
	  			</div>
	  		</div>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="/rumah"><span class="fa fa-home mr-3"></span> Home</a>
          </li>
          <li>
            <li class="active">
             <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span class="fa fa-university mr-3"></span>Sekolah Negeri</a>
             <ul class="collapse list-unstyled" id="homeSubmenu">
               <li>
                   <a href="/sd">SD</a>
               </li>
               <li>
                   <a href="/smp">SMP</a>
               </li>
               <li>
                   <a href="/sma">SMA</a>
               </li>
             </ul>
           </li>
          <li class="active">
           <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span class="fa fa-university mr-3"></span>Sekolah Swasta</a>
           <ul class="collapse list-unstyled" id="homeSubmenu">
             <li>
                 <a href="/sds">SD</a>
             </li>
             <li>
                 <a href="/smps">SMP</a>
             </li>
             <li>
                 <a href="/smas">SMA</a>
             </li>
           </ul>
         </li>
          <li class="active">
            <a href="/kontak"><span class="fa fa-phone mr-3"></span> Kontak</a>
          </li>
          <li class="active">
            <a href="/users"><span class="fa fa-user mr-3"></span> Users</a>
          </li>
          <li class="active">
            <a href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
          </li>
        </ul>

    	</nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
         @yield('isi')
       </div>
 		</div>

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
  </body>
</html>
