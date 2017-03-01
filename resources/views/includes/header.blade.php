 <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="#" data-toggle="modal" data-target="#loginModal">Login</a></li>
                             <li><a href="#" data-toggle="modal" data-target="#registerModal">Register</a></li>                        
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

   
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="panel panel-filled">
                <div class="panel-body">
                    <div id="success"></div>
                     <form action="{{url('/register')}}" id="registerForm" method="post" name="registerForm">
                        <div class="form-group" id="register-name">
                            <label class="control-label" for="name">User Name</label> <input class="form-control" id="username" name="username"
                            placeholder="choose name" required="" title="Please enter your username" type="text"> <span class=
                            "help-block"><strong id="register-errors-name"></strong></span> <span class="help-block small">Your name</span>
                        </div>
                        <div class="form-group" id="register-email">
                            {{ csrf_field() }} <label class="control-label" for="email">Email</label> <input class="form-control" id=
                            "email" name="email" placeholder="example@gmail.com" required="" title="Please enter you email" type="email"
                            value=""> <span class="help-block"><strong id="register-errors-email"></strong></span> <span class=
                            "help-block small">Your email</span>
                        </div>
                        <div class="form-group" id="register-password">
                            <label class="control-label" for="password">Password</label> <input class="form-control" id="password" name=
                            "password" placeholder="******" required="" title="Please enter your password" type="password" value="">
                            <span class="help-block"><strong id="register-errors-password"></strong></span> <span class=
                            "help-block small">Your strong password</span>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="password-confirm">Confirm Password</label> <input class="form-control" id=
                            "password-confirm" name="password_confirmation" placeholder="******" type="password"> <span class=
                            "help-block"><strong id="form-errors-password-confirm"></strong></span>
                        </div>
                       <!--  <div class="form-group" id="login-errors">
                            <span class="help-block"><strong id="form-login-errors"></strong></span>
                        </div>
 -->

                        <div class="btn-sty">
                            <button class="btn btn-login right" >Register</button>
                        </div>
                    </form>
                    <form action="{{url('/login')}}" method="POST" id="loginForm" novalidate>
                        <div class="form-group" id="email-div">
                            {{ csrf_field() }}
                            <label class="control-label" for="email">Email</label>
                            <input id="email" type="email" placeholder="example@gmail.com" title="Please enter you email" required value="" name="email" class="form-control">
                            {{-- <div id="form-errors-email" class="has-error"></div> --}}
                            <span class="help-block">
                                <strong id="form-errors-email"></strong>
                            </span>
                            <span class="help-block small">Your email</span>
                        </div>
                        <div class="form-group" id="password-div">
                            <label class="control-label" for="password">Password</label>
                            <input type="password" title="Please enter your password" placeholder="******" required value="" name="password" id="password" class="form-control">
                            <span class="help-block">
                                <strong id="form-errors-password"></strong>
                            </span>
                            <span class="help-block small">Your strong password</span>
                        </div>
                        <div class="form-group" id="login-errors">
                            <span class="help-block">
                                <strong id="form-login-errors"></strong>
                            </span>
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember"> Remember Me
                                </label>
                            </div>
                        </div>

                        <div class="btn-sty">
                            <button class="btn btn-login right" >Login</button>
                        </div>
                    </form>
                    <span href="#" class="btn btn-default" style="display:none;" id="toggle-login">Log in</span> 
                    <span href="#" class="btn btn-default" id="toggle-register">Register</span>
                </div>
            </div>
        </div>
    </div>
</div>

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
                    $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-success')
                        .append("<strong>Your message has been sent. </strong>");
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
                    $('#loginModal').modal('hide');
                    location.reload(true);
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