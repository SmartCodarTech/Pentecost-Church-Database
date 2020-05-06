<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Job Finder</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{asset("job/fonts/icomoon/style.css")}}">

    <link rel="stylesheet" href="{{asset("job/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("job/css/magnific-popup.css")}}">
    <link rel="stylesheet" href="{{asset("job/css/jquery-ui.css")}}">
    <link rel="stylesheet" href="{{asset("job/css/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{asset("job/css/owl.theme.default.min.css")}}">
    <link rel="stylesheet" href="{{asset("job/css/bootstrap-datepicker.css")}}">
    <link rel="stylesheet" href="{{asset("job/css/animate.css")}}">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
    
    
    
    <link rel="stylesheet" href="{{asset("job/fonts/flaticon/font/flaticon.css")}}">
  
    <link rel="stylesheet" href="{{asset("job/css/aos.css")}}">

    <link rel="stylesheet" href="{{asset("job/css/style.css")}}">
    
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <div class="site-navbar-wrap js-site-navbar bg-white">
      
      <div class="container">
        <div class="site-navbar bg-light">
          <div class="py-1">
            <div class="row align-items-center">
              <div class="col-2">
                <h2 class="mb-0 site-logo"><a href="/">Job<strong class="font-weight-bold">Finder</strong> </a></h2>
              </div>
              <div class="col-10">
                <nav class="site-navigation text-right" role="navigation">
                  <div class="container">
                    <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                      <li><a href="categories">For Candidates</a></li>
                      <li class="has-children">
                        <a href="category">For Employees</a>
                        <ul class="dropdown arrow-top">
                          <li><a href="category">Category</a></li>
                          <li><a href="#">Browse Candidates</a></li>
                          <li><a href="new-post">Post a Job</a></li>
                          <li><a href="#">Employeer Profile</a></li>
                          <li class="has-children">
                            <a href="#">More Links</a>
                            <ul class="dropdown">
                              <li><a href="#">Browse Candidates</a></li>
                              <li><a href="#">Post a Job</a></li>
                              <li><a href="#">Employeer Profile</a></li>
                            </ul>
                          </li>

                        </ul>
                      </li>
                      <li><a href="contact">Contact</a></li>
                      <li><a href="{{route('login')}}"><span class="bg-primary text-white py-3 px-4 rounded"><span class="icon-plus mr-3"></span>Post/Search New Job</span></a></li>
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>