
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bootstrapmaster.com/live/clever/page-login.html by HTTrack Website Copier/3.x [XR&CO'2013], Fri, 05 May 2017 04:00:36 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="CleverAdmin - Bootstrap Admin Template">
        <meta name="author" content="Łukasz Holeczek">
        <meta name="keyword" content="CleverAdmin, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset("clever/assets/ico/apple-touch-icon-144-precomposed.png")}}">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset("clever/assets/ico/apple-touch-icon-114-precomposed.png")}}">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset("clever/assets/ico/apple-touch-icon-72-precomposed.png")}}">
        <link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{asset("clever/assets/ico/apple-touch-icon-57-precomposed.png")}}">
        <link rel="shortcut icon" href="{{asset("clever/assets/ico/favicon.png")}}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

        <script src='https://www.google.com/recaptcha/api.js'></script>
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
         <script src='https://www.google.com/recaptcha/api.js'></script>
<script>
function onSubmit(token) {
    document.getElementById("login").submit();
}
</script>


 <style>
  .box
  {
   width:100%;
   max-width:600px;
   background-color:#f9f9f9;
   border:1px solid #ccc;
   border-radius:5px;
   padding:16px;
   margin:0 auto;
  }
  input.parsley-success,
  select.parsley-success,
  textarea.parsley-success {
    color: #468847;
    background-color: #DFF0D8;
    border: 1px solid #D6E9C6;
  }

  input.parsley-error,
  select.parsley-error,
  textarea.parsley-error {
    color: #B94A48;
    background-color: #F2DEDE;
    border: 1px solid #EED3D7;
  }

  .parsley-errors-list {
    margin: 2px 0 3px;
    padding: 0;
    list-style-type: none;
    font-size: 0.9em;
    line-height: 0.9em;
    opacity: 0;

    transition: all .3s ease-in;
    -o-transition: all .3s ease-in;
    -moz-transition: all .3s ease-in;
    -webkit-transition: all .3s ease-in;
  }

  .parsley-errors-list.filled {
    opacity: 1;
  }

  .parsley-type, .parsley-required, .parsley-equalto, .parsley-pattern, .parsley-length{
   color:#ff0000;
  }

  </style>

  <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '{1758557604281519}',
      cookie     : true,
      xfbml      : true,
      version    : '{v6.8}'
    });

    FB.AppEvents.logPageView();

  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

        <title>Login</title>

        <!-- Bootstrap core CSS -->
        <link href="{{asset("clever/assets/css/bootstrap.min.css")}}" rel="stylesheet">

        <!-- page css files -->
        <link href="{{asset("clever/assets/css/font-awesome.min.css")}}" rel="stylesheet">
        <link href="{{asset("clever/assets/css/jquery-ui.min.css")}}" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="{{asset("clever/assets/css/style.min.css")}}" rel="stylesheet">
         <link href="{{asset("social/bootstrap-social.css")}}" rel="stylesheet">
         <link href="{{asset("social/assets/css/font-awesome.css")}}" rel="stylesheet">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
</head>

<body>
        <div class="container-fluid content">
        <div class="row">
                    <div id="content" class="col-sm-12 full">
            <div class="row">
                <div class="login-box">

                    <div class="header">
                        Pent Database
                    </div>


                    <div class="text-with-hr">
                        <span>Login Here</span>
                    </div>


                      <form id="login" class="form-horizontal login" action="{{ route('login') }}" method="post">


                        @csrf

                        <fieldset class="col-sm-12">


 <div class="form-group">
<div class="controls row">
 <div class="input-group col-sm-12">
<input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="E-mail" value="{{ old('email') }}" required data-parsley-type="email" data-parsley-trigger="keyup"/>
<span class="input-group-addon"><i class="fa fa-envelope"></i></span>

    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                </div>
                            </div>
<div class="form-group">
<div class="controls row">
<div class="input-group col-sm-12">
 <input type="password" class="form-control  @error('password') is-invalid @enderror" id="password" placeholder="Password" name="password" required data-parsley-length="[8,16]" data-parsley-trigger="keyup"/>
   <span class="input-group-addon"><i class="fa fa-key"></i></span>

                                           @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                </div>
                            </div>


                            <div class="confirm">
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}/>
                                <label for="remember">Remember me</label>
                            </div>


                            <div class="row">
                           <button type="submit" id="submit" class="btn btn-primary pull-right">Login</button>


                            </div>

                        </fieldset>

                    </form>
                     <a class="pull-right" href="{{route('register')}}"><b>Sign Up!</b></a>
                    <hr>







                    <div class="clearfix"></div>

                </div>
            </div><!--/row-->

        </div>

                </div><!--/row-->

    </div><!--/container-->


    <!-- start: JavaScript-->
    <!--[if !IE]>-->

            <script src="{{asset("clever/assets/js/jquery-2.1.0.min.js")}}"></script>

    <!--<![endif]-->

    <!--[if IE]>

        <script src="assets/js/jquery-1.11.0.min.js"></script>

    <![endif]-->

    <!--[if !IE]>-->

        <script type="text/javascript">
            window.jQuery || document.write("<script src='assets/js/jquery-2.1.0.min.js'>"+"<"+"/script>");
        </script>

    <!--<![endif]-->

    <!--[if IE]>

        <script type="text/javascript">
        window.jQuery || document.write("<script src='assets/js/jquery-1.11.0.min.js'>"+"<"+"/script>");
        </script>

    <![endif]-->
    <script src="{{asset("clever/assets/js/jquery-migrate-1.2.1.min.js")}}></script>
    <script src="{{asset("clever/assets/js/bootstrap.min.js")}}"></script>



    <!-- page scripts -->
    <script src="{{asset("clever/assets/js/jquery.icheck.min.js")}}"></script>

    <!-- theme scripts -->
    <script src="{{asset("clever/assets/js/custom.min.js")}}"></script>
    <script src="{{asset("clever/assets/js/core.min.js")}}"></script>

    <!-- inline scripts related to this page -->
    <script src="{{asset("clever/assets/js/pages/login.js")}}"></script>

     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="http://parsleyjs.org/dist/parsley.js"></script>

    <script>
$(document).ready(function(){

 $('#login').parsley();

 $('#login').on('subm', function(event){
  event.preventDefault();

  if($('#login').parsley().isValid())
  {
   $.ajax({
    url: '{{ route("login") }}',
    method:"POST",
    data:$(this).serialize(),
    dataType:"json",
    beforeSend:function()
    {
     $('#subm').attr('disabled', 'disabled');
     $('#subm').val('Submitting...');
    }

   });
  }
 });

});
</script>



    <!-- end: JavaScript-->

</body>

<!-- Mirrored from bootstrapmaster.com/live/clever/page-login.html by HTTrack Website Copier/3.x [XR&CO'2013], Fri, 05 May 2017 04:00:36 GMT -->
</html>
