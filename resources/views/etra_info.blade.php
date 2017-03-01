@extends('admin_template')
@section('header')
<!-- CSS -->
<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="/css/prism.css">
<link rel="stylesheet" href="/css/chosen.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<style type="text/css" media="all">
    /* fix rtl for demo */
    .chosen-rtl .chosen-drop { left: -9000px; }
  </style>
    
@endsection
@section('content')
 <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary" style="padding:1% 3%">
            <div class="box-header with-border">
              <h3 class="box-title">Additional information</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
                <div id="success"></div>
                <form id="extra_info" role="form" action="{{url('/etra_info/')}}/{{ $user_info->id }}" method="POST" >
                {{ method_field('PATCH') }}
                {{ csrf_field() }}
                <div class="form-group" id="upName">
                  <label>Name</label>
                  <input type="text" class="form-control" name="name" placeholder="Enter your name" value="{{ $user_info->name }}">
                  <span class="help-block"><strong id="update-errors-name"></strong></span>
                </div>
                <div class="form-group" id="upLname">
                  <label>Last_Name</label>
                  <input type="text" class="form-control" name="lastname" placeholder="Enter ..." value="{{ $user_info->lastname }}">
                  <span class="help-block"><strong id="update-errors-lname"></strong></span>
                </div>

                
                
               
                  

                <!-- radio -->
                  <div class="form-group">
                    <label>gender status</label> 
                    @if($user_info->gender=='male')

                    <div class="radio">
                       <label><input type="radio" name="gender" checked value="male" { { old('gender')=="male" ? 'checked='.'"'.'checked'.'"' : '' } }>Male</label>
                    </div>
                     <div class="radio">
                       <label><input type="radio" name="gender" value="female" { { old('gender')=="female" ? 'checked='.'"'.'checked'.'"' : '' } }>Female</label>
                    </div>   
                    @elseif($user_info->gender=='female') 
                    
                    <div class="radio">
                       <label><input type="radio" name="gender" value="male" { { old('gender')=="male" ? 'checked='.'"'.'checked'.'"' : '' } }>Male</label>
                    </div>
                     <div class="radio">
                       <label><input type="radio" name="gender" checked value="female" { { old('gender')=="female" ? 'checked='.'"'.'checked'.'"' : '' } }>Female</label>
                    </div>   
                    @endif                
                  </div>

                  <div class="form-group">
                    <label>marriage status</label> 
                    @if($user_info->marriage=='single')
                    <div class="radio">
                       <label><input type="radio" name="marriage" checked value="single" { { old('marriage')=="single" ? 'checked='.'"'.'checked'.'"' : '' } } >Single</label>
                    </div>
                     <div class="radio">
                       <label><input type="radio" name="marriage" value="married" { { old('marriage')=="married" ? 'checked='.'"'.'checked'.'"' : '' } } >Married</label>
                    </div>   
                    @elseif($user_info->marriage=='married') 
                    <div class="radio">
                       <label><input type="radio" name="marriage" value="single" { { old('marriage')=="single" ? 'checked='.'"'.'checked'.'"' : '' } }>Single</label>
                    </div>
                     <div class="radio">
                       <label><input type="radio" name="marriage" checked value="married" { { old('marriage')=="married" ? 'checked='.'"'.'checked'.'"' : '' } } >Married</label>
                    </div>   
                    @endif                
                  </div>
                   
                
                
                <div class="form-group" id="upDate">
                  <label>Birth Date</label>

                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" name="birth_date" class="form-control pull-right" id="datepicker" value="{{ $user_info->birth_date }}">
                    <span class="help-block"><strong id="update-errors-date"></strong></span>
                  </div>
                  
                </div>
                
                <div class="form-group" id="upPhone">
                  <label>Phone Number</label>
                  <input type="text" class="form-control" name="phone" placeholder="Enter ..." value="{{ $user_info->phone }}">
                  <span class="help-block"><strong id="update-errors-phone"></strong></span>
                </div>
          
                <div class="form-group" id="upTalents">
                  <label>Your Talent's</label>
                  <textarea class="form-control" rows="3" name="talents" placeholder="Enter ...">{{ $user_info->talents }}</textarea>
                  <span class="help-block"><strong id="update-errors-talents"></strong></span>
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-block btn-success btn-lg">Success</button>
                </div>

              </form>


              @foreach ($errors->all() as $error)
                 <div>{{ $error }}</div>
              @endforeach
   



            </div>
        

            <!-- /.box-body -->
    </div>
  </div>
  </div>
</div>
</div>

 
@endsection
@section('footer')
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
 -->
<script src="/js/formajax.js" type="text/javascript"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="/js/chosen.jquery.js" type="text/javascript"></script>
  <script src="/js/prism.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
      '.chosen-select-width'     : {width:"95%"}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
  </script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
  } );
  </script> 

@endsection