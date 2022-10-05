<!DOCTYPE html>
<html>
<head>
    <title>@yield('judul')</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">

    <style type="text/css">

body {
  background: #eee
}

.nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
    color: #495057;
    background-color: transparent;
    border-color: transparent;
    border-bottom: 3px solid #000;

}

.nav-tabs>li>a{

  text-transform: uppercase;
  color: #000;
      font-weight: 500;
}

.nav-tabs .nav-link:hover {
    border-color: transparent;
    border-bottom: 3px solid #000
}

.navbar{

      border-bottom: 1px solid #00000012;
      padding-top: 0rem !important;
      padding-bottom: 0rem !important;
          background-color: #ffffff!important;
}

.navbar-brand{

  font-size: 24px;
  text-transform: uppercase;
  font-family: 'Allerta Stencil', sans-serif;
  font-weight: 500;
}

.nav-tabs {
    border-bottom: none;
}

.snip1527 {
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
    color: #ffffff;
    float: left;
    font-family: 'Lato', Arial, sans-serif;
    font-size: 16px;
    margin: 10px 1%;
    max-width: 310px;
    min-width: 250px;
    overflow: hidden;
    position: relative;
    text-align: left;
    width: 100%
}

.snip1527 * {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    -webkit-transition: all 0.25s ease;
    transition: all 0.25s ease
}

.snip1527 img {
    max-width: 100%;
    vertical-align: top;
    position: relative
}

.snip1527 figcaption {
    padding: 25px 20px 25px;
    position: absolute;
    bottom: 0;
    z-index: 1
}

.snip1527 figcaption:before {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background: #700877;
    content: '';
    background: -moz-linear-gradient(90deg, #700877 0%, #ff2759 100%, #ff2759 100%);
    background: -webkit-linear-gradient(90deg, #700877 0%, #ff2759 100%, #ff2759 100%);
    background: linear-gradient(90deg, #700877 0%, #ff2759 100%, #ff2759 100%);
    opacity: 0.8;
    z-index: -1
}

.snip1527 .date {
    background-color: #fff;
    border-radius: 50%;
    color: #700877;
    font-size: 18px;
    font-weight: 700;
    min-height: 48px;
    min-width: 48px;
    padding: 10px 0;
    position: absolute;
    right: 15px;
    text-align: center;
    text-transform: uppercase;
    top: -25px
}

.snip1527 .date span {
    display: block;
    line-height: 14px
}

.snip1527 .date .month {
    font-size: 11px
}

.snip1527 h3,
.snip1527 p {
    margin: 0;
    padding: 0
}

.snip1527 h3 {
    display: inline-block;
    font-weight: 700;
    letter-spacing: -0.4px;
    margin-bottom: 5px
}

.snip1527 p {
    font-size: 0.8em;
    line-height: 1.6em;
    margin-bottom: 0px
}

.snip1527 a {
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    position: absolute;
    z-index: 1
}

.snip1527:hover img,
.snip1527.hover img {
    -webkit-transform: scale(1.1);
    transform: scale(1.1)
}

img {
    border-radius: 5px
}

img {
    border-radius: 5px
}
    </style>
</head>
<body>
  <div>
    <div class="container-fluid px-0">
     <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed">
         <div class="container-fluid d-flex"> <a class="navbar-brand" href="#">Data Sekolah Palembang</a>
             <ul class="nav nav-tabs" id="myTab" role="tablist">
                 <li class="nav-item" role="presentation"> <a class="nav-link" id="home-tab" data-toggle="tab" href="/fsd" role="tab" aria-controls="home" aria-selected="true">SD</a> </li>
                 <li class="nav-item" role="presentation"> <a class="nav-link" id="profile-tab" data-toggle="tab" href="/fsmp" role="tab" aria-controls="profile" aria-selected="false">SMP</a> </li>
                 <li class="nav-item" role="presentation"> <a class="nav-link" id="contact-tab" data-toggle="tab" href="/fsma" role="tab" aria-controls="contact" aria-selected="false">SMA</a> </li>
             </ul>
         </div>
     </nav>
 </div>
</div>
  @yield('isi')
</body>
</html>
