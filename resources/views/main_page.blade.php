<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
     <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>خلاق شو</title>
<!--     <link href='{{asset("/fonts/font-awesome.min.css")}}' rel="stylesheet" type="text/css">
 -->
 <style type="text/css">
  @font-face { 
           font-family:BYekan; src: url('{{ asset('fonts/BYekan.ttf') }}'); 
         }
         
         header,div,h1,h2,h3,h4,h5,h6,a,button{
          font-family: BYekan !important;
         }
         #tesit{
            animation-name: slidein;
            animation-iteration-count: 1;
            animation-timing-function: ease-out;
            animation-duration: 1s;
         }
         @keyframes slidein {
            from {
              margin-left: 100%; 
            }

            to {
                  margin-left: 0%;
                  width: 100%;
                  margin-right: 0%;
                }
            }
           
          }
        .stepwizard-step p {
            margin-top: 10px;
        }
        .stepwizard-row {
            display: table-row;
        }
        .stepwizard {
            display: table;
            width: 100%;
            position: relative;
        }
        .stepwizard-step button[disabled] {
            opacity: 1 !important;
            filter: alpha(opacity=100) !important;
        }
        .stepwizard-row:before {
            top: 14px;
            bottom: 0;
            position: absolute;
            content: " ";
            width: 100%;
            height: 1px;
            background-color: #ccc;
            z-order: 0;
        }
        .stepwizard-step {
            display: table-cell;
            text-align: center;
            position: relative;
        }
        .btn-circle {
            width: 30px;
            height: 30px;
            text-align: center;
            padding: 6px 0px !important;
            font-size: 12px;
            line-height: 1.428571429;
            border-radius: 15px !important;
        }
        .btn-form{
          color: #fff;
          background-color: #fed136;
          border-color: #fed136;
          border-radius: 3px;
          font-size: 18px;
          padding: 10px 26px;
        }
        .btn-sty{
        float: right !important;
        margin-right: 3px !important;

      }
      .btn-login{
        background-color: #fed136;
        margin-left: 2px;
      }
      .bnr-sty{
        text-align: center;
        background-color: rgb(254, 209, 54);
        padding: 14px;
        border-radius: 5px;
        margin-bottom: 27px;
        -webkit-animation-duration: 10s; 
            animation-duration: 10s; 
            -webkit-animation-fill-mode: both; 
            animation-fill-mode: both;
      }
      @-webkit-keyframes shake {
            0%, 100% {-webkit-transform: translateX(0);} 
            10%, 30%, 50%, 70%, 90% {-webkit-transform: translateX(-10px);} 
            20%, 40%, 60%, 80% {-webkit-transform: translateX(10px);} 
         }
         
         @keyframes shake { 
            0%, 100% {transform: translateX(0);} 
            10%, 30%, 50%, 70%, 90% {transform: translateX(-10px);} 
            20%, 40%, 60%, 80% {transform: translateX(10px);} 
         }
         
         .shake { 
            -webkit-animation-name: shake; 
            animation-name: shake; 
         }
 /*font awesome*/
   a {
  color: #fff;
  text-decoration: none !important;
}
.me {
  width: 400px;
  margin: 90px auto;
}
.me p,
.me h1 {
  text-transform: uppercase;
  letter-spacing: 3px;
  text-align: center;
}
.me p {
  font-weight: 200;
}
.me span {
  font-weight: bold;
}
.social {
  position: fixed;
  top: 20px;
}
.social ul {

  padding: 0px;
  -webkit-transform: translate(-270px, 0);
  -moz-transform: translate(-270px, 0);
  -ms-transform: translate(-270px, 0);
  -o-transform: translate(-270px, 0);
  transform: translate(-241px, 0);
}
.social ul li {
  display: block;
  margin: 5px;
  background: rgba(0, 0, 0, 0.36);
  width: 300px;
  text-align: right;
  padding: 10px;
  -webkit-border-radius: 0 30px 30px 0;
  -moz-border-radius: 0 30px 30px 0;
  border-radius: 0 30px 30px 0;
  -webkit-transition: all 1s;
  -moz-transition: all 1s;
  -ms-transition: all 1s;
  -o-transition: all 1s;
  transition: all 1s;
}
.social ul li:hover {
  -webkit-transform: translate(110px, 0);
  -moz-transform: translate(110px, 0);
  -ms-transform: translate(110px, 0);
  -o-transform: translate(110px, 0);
  transform: translate(110px, 0);
  background: rgba(255, 255, 255, 0.4);
}
.social ul li:hover a {
  color: #000;
}
.social ul li:hover i {
  color: #fff;
  background: rgba(0, 0, 0, 0.36);
  -webkit-transform: rotate(360deg);
  -moz-transform: rotate(360deg);
  -ms-transform: rotate(360deg);
  -o-transform: rotate(360deg);
  transform: rotate(360deg);
  -webkit-transition: all 1s;
  -moz-transition: all 1s;
  -ms-transition: all 1s;
  -o-transition: all 1s;
  transition: all 1s;
}
.social ul li i {
  margin-left: 10px;
  color: #000;
  background: #fff;
  padding: 10px;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  width: 40px;
  height: 40px;
  font-size: 20px;
  background: #ffffff;
  -webkit-transform: rotate(0deg);
  -moz-transform: rotate(0deg);
  -ms-transform: rotate(0deg);
  -o-transform: rotate(0deg);
  transform: rotate(0deg);
}

body {
  background: #25343F;
  color: #fff;
  font-family: 'Raleway', sans-serif;
}

  </style>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,200' rel='stylesheet' type='text/css'> 
  
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Bootstrap Core CSS -->
    <link href="/css/front_lib/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <!--sweet alert-->
    <link rel="stylesheet" href="/assets/css/libs.css" />
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    
    <!-- Theme CSS -->
    <link href="/css/front_lib/agency.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
        
</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <div style="direction:ltr;">
        <nav  class="social">
            <ul>
                <li><a href="http://telegram.me/bcreativee">تلگرام <i class="fa fa-paper-plane"></i></a></li>
                <!-- <li><a href="http://facebook.com/gian.michelle">Facebook <i class="fa fa-facebook"></i></a></li> -->
            <!--     <li><a href="http://dribbble.com/gian_michelle">Dribbble <i class="fa fa-dribbble"></i></a></li>
                <li><a href="http://behance.net">Behance <i class="fa fa-behance"></i></a></li> -->
                
            </ul>
        </nav>
    </div>
    <!-- Header -->
    <header>

        <div class="container">
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    
                        @if (Auth::guest())
                            <li><a href="#" data-toggle="modal" data-target="#loginModal">ورود/ثبت نام</a></li>                        
                        @endif
                </ul>
            </div>
            <!-- /.navbar-collapse -->
            <div class="intro-text">
                <div class="intro-lead-in">به ایستگاه خلاقیت خوش آمدید:)</div>
                <div class="intro-heading">آیا فکر می کنید که آدم خلاقی هستین؟؟</div>
<!--                 <a href="#services" class="page-scroll btn btn-xl">Test Yourself</a>
 -->                <a href="#" id="tesit" class="page-scroll btn btn-xl" data-toggle="modal" data-target="#testModal">امتحانش کنید</a>

            </div>
        </div>
    </header>
    <!--login modal-->
      <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="panel panel-filled">
                <div class="panel-body">
                    <div id="success"></div>
                    
                     <form action="{{url('/register')}}" id="registerForm" method="post" name="registerForm">
                      <h4 class="bnr-sty shake">ثبت نام</h4>
                        <div class="form-group" id="register-name">
                            <label class="control-label" for="name">نام کاربری</label> <input class="form-control" id="username" name="username"
                            placeholder="نام کاربری" required="" title="Please enter your username" type="text"> <span class=
                            "help-block"><strong id="register-errors-name"></strong></span>
                        </div>
                        <div class="form-group" id="register-email">
                            {{ csrf_field() }} <label class="control-label" for="email">آدرس ایمیل</label> <input class="form-control" id=
                            "email" name="email" placeholder="example@gmail.com" required="" title="Please enter you email" type="email"
                            value=""> <span class="help-block"><strong id="register-errors-email"></strong></span>
                        </div>
                        <div class="form-group" id="register-password">
                            <label class="control-label" for="password">رمز عبور</label> <input class="form-control" id="password" name=
                            "password" placeholder="******" required="" title="Please enter your password" type="password" value="">
                            <span class="help-block"><strong id="register-errors-password"></strong></span>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="password-confirm">تایید رمز عبور</label> <input class="form-control" id=
                            "password-confirm" name="password_confirmation" placeholder="******" type="password"> <span class=
                            "help-block"><strong id="form-errors-password-confirm"></strong></span>
                        </div>
                       <!--  <div class="form-group" id="login-errors">
                            <span class="help-block"><strong id="form-login-errors"></strong></span>
                        </div>
 -->

                        <div class="btn-sty">
                            <button class="btn btn-login right" >ثبت نام</button>
                        </div>
                    </form>
                    
                    <form action="{{url('/login')}}" method="POST" id="loginForm" novalidate>
                      <h4 class="bnr-sty shake">ورود به دفتر خلاقیتتون</h4>
                        <div class="form-group" id="email-div">
                            {{ csrf_field() }}
                            <label class="control-label" for="email">آدرس ایمیل</label>
                            <input id="email" type="email" placeholder="example@gmail.com" title="Please enter you email" required value="" name="email" class="form-control">
                            {{-- <div id="form-errors-email" class="has-error"></div> --}}
                            <span class="help-block">
                                <strong id="form-errors-email"></strong>
                            </span>
                        </div>
                        <div class="form-group" id="password-div">
                            <label class="control-label" for="password">پسورد</label>
                            <input type="password" title="Please enter your password" placeholder="******" required value="" name="password" id="password" class="form-control">
                            <span class="help-block">
                                <strong id="form-errors-password"></strong>
                            </span>
                            <span class="help-block small">پسورد باید حداقل ۶ کاراکتر باشد</span>
                        </div>
                        <div class="form-group" id="login-errors">
                            <span class="help-block">
                                <strong id="form-login-errors"></strong>
                            </span>
                        </div>
                        <!-- <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember"> Remember Me
                                </label>
                            </div>
                        </div> -->

                        <div class="btn-sty ">
                            <button class="btn btn-login right " >ورود</button>
                        </div>
                    </form>
                    <span href="#" class="btn btn-default" style="display:none;" id="toggle-login">ورود</span> 
                    <span href="#" class="btn btn-default" id="toggle-register">ثبت نام</span>
                </div>
            </div>
        </div>
    </div>
</div>
    <!--end of login modal-->
    <div class="modal fade" id="testModal" tabindex="-1" role="dialog" hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="panel panel-filled">
                <div class="panel-body">
                  
                <div class="stepwizard col-md-offset-3">
    <div class="stepwizard-row setup-panel">
      @for($i=0;$i <= $counter-1;$i++)
      
      @if($i==0)
      <div class="stepwizard-step">
        <a href="#step-{{ $i }}" type="button" class="btn btn-xl btn-circle">{{ $i+1 }}</a>
        <p>مرحله ی {{ $i+1 }}</p>
      </div>
      @else
      <div class="stepwizard-step">
        <a href="#step-{{ $i }}" type="button" class="btn btn-default btn-circle" disabled="disabled">{{ $i+1 }}</a>
        <p>مرحله ی {{ $i+1 }}</p>
      </div>
       @endif
      @endfor
      
    </div>
  </div>
  <form  id="test_c" role="form" action="{{url('/storeAnsware')}}" method="post">
  {{ csrf_field() }}
<h3 style="display:none;">{{ $j=1}}</h3>
    @for($i=0;$i <= $counter-1;$i++)
      <div class="row setup-content" id="step-{{ $i }}">
      <div class="col-xs-12">
       
        <div class="col-xs-12">
                            <div class="col-md-12">
                              <h3></h3>
                             <div id="product_container"> 
                             @foreach($qs as $key=>$q)
                             @if($key==$i)

                              @foreach($q as $ques)
                              <div class="form-group" id="addQt{{ $j }}">
                             <label class="control-label" style="display:block;">{{ $j }}.{{ $ques->question }}</label>
                             <div style="padding-right:3%;">
                             <div class="radio-inline">
                                   <label><input type="radio" name="quiz_ans{{ $j }}" value="Notatall">اصلا</label>
                                </div>
                                 <div class="radio-inline">
                                   <label><input type="radio" name="quiz_ans{{ $j }}" value="Rarely">به ندرت</label>
                                </div>
                                <div class="radio-inline">
                                   <label><input type="radio" name="quiz_ans{{ $j }}" value="Sometimes">گاهی</label>
                                </div>
                                <div class="radio-inline">
                                   <label><input type="radio" name="quiz_ans{{ $j }}" value="Often">اغلب</label>
                                </div>
                                <div class="radio-inline">
                                   <label><input type="radio" name="quiz_ans{{ $j }}" value="VeryOften">همیشه</label>
                                </div>
                                <span class="help-block"><strong id="test-errors-question{{ $j }}"></strong></span>

                              </div>
                              </div>
                             <hr>
                             <h3 style="display:none;">{{ $j++ }}</h3>

                             @endforeach
                             @endif

                             @endforeach
                             
                             @if($i==0)
                              <button class="btn btn-form nextBtn btn-lg pull-left" type="button" >بعدی</button>

                             @elseif($i==$counter - 1)
                              <button type="submit" class="btn btn-success btn-lg pull-left" >ثبت</button>
                              <button class="btn btn-form prevBtn btn-lg pull-right" type="button" >قبلی</button>

                             @else
                              <button class="btn btn-form nextBtn btn-lg pull-left" type="button" >بعدی</button>
                              <button class="btn btn-form prevBtn btn-lg pull-right" type="button" >قبلی</button>


                             @endif
                           </div>
                              <div id="product_container">
                              
                            </div>

                          </div>
                        </div>
      </div>
    </div>
    @endfor
   

    
  </form>

</div>
            </div>
        </div>
    </div>

</div>
 

    <!-- jQuery -->
    <script src="/js/front_lib/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="/js/front_lib/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    
  <!-- Theme JavaScript -->
    <script src="/js/front_lib/agency.min.js"></script>
  <!--login/register form-->
  <script>
    $(document).ready(function(){
        $("#registerForm").hide();
        $("#toggle-login").click(function(){
            $("#registerForm").hide().attr("formnovalidate");
            $("#loginForm").toggle();
            $("#toggle-login").hide();
            $("#toggle-register").toggle();



        });

        $("#toggle-register").click(function(){
            $("#loginForm").hide().attr("formnovalidate");
            $("#registerForm").toggle();
            $("#toggle-register").hide();
            $("#toggle-login").toggle();
            

            
        });
        var registerForm = $("#registerForm");
        registerForm.submit(function(e){
            e.preventDefault();
            var formData = registerForm.serialize();
            $( '#register-errors-name' ).html( "" );
            $( '#register-errors-email' ).html( "" );
            $( '#register-errors-password' ).html( "" );
            $("#register-name").removeClass("has-error");
            $("#register-email").removeClass("has-error");
            $("#register-password").removeClass("has-error");

            $.ajax({
                url:'/register',
                type:'POST',
                data:formData,
                success:function(data){
                    // $('#registerModal').modal( 'hide' );
                    // location.reload(true);
                    $('#success').html("<div class='alert alert-success'>");
                    $('#success > .alert-success').html("<button type='button' class='close pull-left' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-success')
                        .append("<strong>ایمیلتونا چک کنید لطفا:)</strong>");
                    $('#success > .alert-success')
                        .append('</div>').delay(3000).fadeOut("slow");
                    registerForm.trigger("reset");

                },
                error: function (data) {
                    console.log(data.responseText);
                    var obj = jQuery.parseJSON( data.responseText );
                   if(obj.name){
                        $("#register-name").addClass("has-error");
                        $( '#register-errors-name' ).html( obj.name );
                    }
                    if(obj.email){
                        $("#register-email").addClass("has-error");
                        $( '#register-errors-email' ).html( obj.email );
                    }
                    // if(obj.password){
                    //     $("#register-password").addClass("has-error");
                    //     $( '#register-errors-password' ).html( obj.password );
                    // }
                }
            });
        });
            var loginForm = $("#loginForm");
        loginForm.submit(function(e) {
            e.preventDefault();
            var formData = loginForm.serialize();
            $('#form-errors-email').html("");
            $('#form-errors-password').html("");
            $('#form-login-errors').html("");
            $("#email-div").removeClass("has-error");
            $("#password-div").removeClass("has-error");
            $("#login-errors").removeClass("has-error");
            $.ajax({
                url: '/login',
                type: 'POST',
                data: formData,
                success: function(data) {
                    // $('#loginModal').modal('hide');
                    // location.reload(true);
                    location.href = "/admin";
                },
                error: function(data) {
                    console.log(data.responseText);
                    var obj = jQuery.parseJSON(data.responseText);
                    if (obj.email) {
                        $("#email-div").addClass("has-error");
                        $('#form-errors-email').html(obj.email);
                    }
                    if (obj.password) {
                        $("#password-div").addClass("has-error");
                        $('#form-errors-password').html(obj.password);
                    }
                    if (obj.error) {
                        $("#login-errors").addClass("has-error");
                        $('#form-login-errors').html(obj.error);
                    }
                }
            });
        });
    });

</script>
    <!-- form step js -->
    <script type="text/javascript">
        $(document).ready(function () {
        var navListItems = $('div.setup-panel div a'),
                allWells = $('.setup-content'),
                allNextBtn = $('.nextBtn');
                allPrevBtn = $('.prevBtn');

        allWells.hide();

        navListItems.click(function (e) {
            e.preventDefault();
            var $target = $($(this).attr('href')),
                    $item = $(this);

            if (!$item.hasClass('disabled')) {
                navListItems.removeClass('btn-xl').addClass('btn-default');
                $item.addClass('btn-xl');
                allWells.hide();
                $target.show();
                $target.find('input:eq(0)').focus();
            }
        });

        allNextBtn.click(function(){
            var curStep = $(this).closest(".setup-content"),
                curStepBtn = curStep.attr("id"),
                nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                curInputs = curStep.find("input[type='text'],input[type='url']"),
                isValid = true;

            $(".form-group").removeClass("has-error");
            for(var i=0; i<curInputs.length; i++){
                if (!curInputs[i].validity.valid){
                    isValid = false;
                    $(curInputs[i]).closest(".form-group").addClass("has-error");
                }
            }

            if (isValid)
                nextStepWizard.removeAttr('disabled').trigger('click');
        });
        allPrevBtn.click(function(){
            var curStep = $(this).closest(".setup-content"),
                curStepBtn = curStep.attr("id"),
                prevStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().children("a"),
                curInputs = curStep.find("input[type='text'],input[type='url']"),
                isValid = true;

            $(".form-group").removeClass("has-error");
            for(var i=0; i<curInputs.length; i++){
                if (!curInputs[i].validity.valid){
                    isValid = false;
                    $(curInputs[i]).closest(".form-group").addClass("has-error");
                }
            }

            if (isValid)
                prevStepWizard.removeAttr('disabled').trigger('click');
        });

        $('div.setup-panel div a.btn-xl').trigger('click');
      });
      </script>
     <!-- Form Step js -->
    <script src="/js/formajax.js"></script>

    <script type="text/javascript" src="/assets/js/libs.js"></script>
    
   
   
</body>

</html>
