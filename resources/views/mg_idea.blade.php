@extends('admin_template')
@section('header')
   <link rel="stylesheet" href="{{ asset('assets/css/sticker.css')}}">
   <style type="text/css">
    #main-wall{
      border-style: dashed;
      color: gray;

    }
    .content-wrapper{
      background-image: url("/imgs/wall.jpg");
      background-repeat: repeat-x;
      text-align: right;
    }
    .fa-plus-circle{
      color: #00CC00;
      font-size: 33px;
    }
    .content-header{
      padding: 0px !important;
    }
   </style>
@endsection
@section('topic')
   <section class="content-header">
    <div class="row">
      <div class="col-md-6">
          <span><a href="javascript:;"  id="add_new"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></span><span style="float:right;"><h2>افزودن ایده ی جدید</h2></span>

       </div>
       <div class="col-md-6">
         <h1>
        دیواره ایده ها
        <small>ایدها تو بچسبون به دیوار</small>
      </h1>
       </div>

    </div>
      
    </section>
@endsection
@section('content')
</div> -->
<div class="row">
   
   <div class="col-md-6" id="desk">
      <div id="board">
        
      </div>
      

   </div>
   <div id="main-wall" class="col-md-6">
    <div class="col-md-6">dfg</div>
    <div class="col-md-6">dgfd</div>
   </div>
</div>
      <!-- ./row -->
@endsection
@section('footer')
<script src="/js/formajax.js" type="text/javascript"></script>
<script src="/assets/js/sticker.js" type="text/javascript"></script>
@endsection
